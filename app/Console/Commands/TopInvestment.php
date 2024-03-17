<?php

namespace App\Console\Commands;

use App\Models\Investment;
use App\Models\Wallet;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Config;

class TopInvestment extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'investment:topUp';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $investment_model = new Investment();
        $current_time = time();
        $all_investment = $investment_model->where("status","0")->get();

        foreach ($all_investment as $key => $value) {
            $timer = ($value['next_top_up'] - $current_time) / 3600;
            $maturity_date = $value['maturity_date'];
            if(Carbon::now()->toDateString() == $maturity_date )
            {
                // end investment
                $this->update_investment_status($value['id']);
               
            }else{

                if($timer < 2)
                {
                    $this->top_account($value['user_id'],$value['plan']);
                    $this->update_investment_timer($value['id']);
                }
            }
        }
        return 0;
    }


    public function top_account($user_id,$plan)
    {
        $investment_config = Config::get("investment_plan");
        $investment_plan = $investment_config[$plan];
        Wallet::credit_account($investment_plan['profit'],$user_id);
    }
    public function update_investment_timer($investment_id)
    {
        $investment_model = new Investment();
        $investment_model->where('id',$investment_id)->update([
            "next_top_up"=> time() + env("TOP_UP_TIMER")
        ]);
    }
    public function update_investment_status($investment_id)
    {
        $investment_model = new Investment();
        $investment_model->where('id',$investment_id)->update([
            "status"=> 1
        ]);
    }
}
