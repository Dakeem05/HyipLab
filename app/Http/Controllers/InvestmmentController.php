<?php

namespace App\Http\Controllers;

use App\Models\Investment;
use App\Models\User;
use App\Models\Wallet;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;

use function PHPUnit\Framework\isEmpty;

class InvestmmentController extends Controller
{
    public function show_investment()
    {
        $gateways = Config::get("payment_gateway.gateways");
        return view('user.investment_home',compact("gateways"));
    }

    public function review_investment(Request $request)
    {
        // $pick_gateway = $request->input("wallet_type");
        // $wallet = Config::get("payment_gateway.gateways")['bitcoin'];

        $plan_id = $request->input('plan_id');
        $amount = $request->input('amount');
        $wallet_model = new Wallet();
        $balance = $wallet_model->select('balance')->where('user_id',Auth::user()->id)->first();
        $plan = Config::get("investment_plan.".$plan_id);
        
        if($amount < $plan['minimum'])
        {
            return redirect()-> back()->with('error',"Amount can not be less than $".$plan['minimum']);
        }
        if($plan['maximum'] != 'unlimited' && $amount > $plan['maximum'])
        // dd($plan['maximum']);
    {
        dd($plan['maximum']);
            dd($amount);
            return redirect()-> back()->with('error',"Choose a different investment plan if you want to invest higher amounts.");
        }
        if($amount > $balance->balance)
        {
            return redirect()->to('user/deposit?payment_type=Bitcoin&amount='.($amount - $balance->balance));
        }
        $investment_amount = $amount;
        $investment_returns = $plan['profit'];
        $investment_frequency = $plan['frequency'];
        session()->put("investment_data",["amount"=>$amount,"plan"=> $plan,"plan_id"=>$plan_id]);
        $plan = $plan['name'];
        return view("user.investment_preview",compact('investment_amount','plan','investment_returns','investment_frequency'));

    }

    public function start_investment(Request $request)
    {
        $investment_instance = Investment::where('user_id',Auth::user()->id)->first();
     
        $investment_model = new Investment();
        $investment_data = session()->get("investment_data");
        $maturity_date = time() + 86400 * $investment_data['plan']['duration'];
        $maturity_date =date('Y/m/d ', $maturity_date);
        $investment_model->plan = $investment_data['plan_id'];
        $investment_model->maturity_date = $maturity_date;
    
        $investment_model->amount = $investment_data['amount'];
        $investment_model->status = 0;
        $investment_model->next_top_up = time() + env("TOP_UP_TIMER");
        $investment_model->user_id = Auth::user()->id;
        $investment_model->save();

        
        Wallet::debit_account($investment_data['amount'],Auth::user()->id);
        if($investment_instance == ''){
            $percentage = Config::get("referral_bonus.percentage_first");
            $user = User::where('id',Auth::user()->id)->first();
            $referrer = User::where('ref_code', $user->referrer_code)->first();
            $bonus = $investment_data['amount'] * ($percentage / 100);
            Wallet::credit_account($bonus,$referrer->id);
        } else{
            $percentage = Config::get("referral_bonus.percentage_others");
            $user = User::where('id',Auth::user()->id)->first();
            $referrer = User::where('ref_code', $user->referrer_code)->first();
            $bonus = $investment_data['amount'] * ($percentage / 100);
            Wallet::credit_account($bonus,$referrer->id);
        }
        return redirect("user/investment/history");

    }


    public function investment_history(Request $request)
    {
        $investment_model = new Investment();
        $investments = $investment_model->where('user_id',Auth::user()->id)->get();
        return view("user.investment_history",compact("investments"));
    }
}

