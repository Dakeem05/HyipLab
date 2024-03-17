<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use App\Models\Wallet;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $wallet_model = new Wallet();
        $get_wallet = $wallet_model->select("balance")->where('user_id',$user_id)->first();

        $transaction_mdoel = new Transaction();

        $fetch_tranaction = $transaction_mdoel->where('user_id',$user_id)->orderBy("created_at",'desc')->limit(7)->get();
        $withdraws_fetch = $transaction_mdoel->where('type',"withdraw")->where('status',1)->get();
        $withdraws_total = 0;
        if(!empty($withdraws_fetch))
        {
            foreach ($withdraws_fetch as $key => $value) {
                $withdraws_total += $value['amount'];
            }
            $withdraws =$withdraws_total;
        }else{
            $withdraws =$withdraws_total;
        }
        

        $user_data = [
            "user"=>Auth::user(),
            "wallet_balance"=>number_format($get_wallet['balance'],2) ,
        ];
        view()->share('user_data', $user_data);
        return view("user.dashboard",compact("fetch_tranaction","withdraws"));
    }


    public function change_password_page()
    {
        return view("user.change_password");
    }

    public function change_password(Request $request)
    {
        $old = $request->input('old_password');
        $db_pass = Auth::user()->password;
        $new = $request->input('password');
        $confirm = $request->input('password_confirmation');
       
        if(Hash::check($old, $db_pass))
        {
            if($confirm == $new)
            {
                $user_model = new User();
                $new = Hash::make($new);
                $user_model->where('id',Auth::user()->id)
                ->update([
                    "password"=>$new
                ]);
                return redirect()->to("logout");
            }else{
                return redirect()->back()->with("error","Confirm Password and new Password does not match!");
            }
        }else {
            return redirect()->back()->with("error","Password entered does not macth current password!");
            
        }
       
    }

    public function profile_fund(Request $request)
    {
        $user_data = Auth::user();
        return view("user.profile_settings",compact('user_data'));

    }

    
}
