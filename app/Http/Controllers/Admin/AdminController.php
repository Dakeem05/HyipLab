<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function __construct()
    {
        
    }
         
    public function home(Request $request)
    {
        $transaction_model = new Transaction();
        if(isset($_GET['search']))
        {
         $deposits = $transaction_model->where('status',"=","0")->where('transaction_id',$_GET['search'])->paginate(10);
         
        }else{
            $deposits = $transaction_model->where('status',"=","0")->orderBy('created_at','desc')->paginate(10);
        }

        return view("admin.admin_dashboard",compact('deposits'));
    }
    public function change_password_page()
    {
        return view("admin.change_password");
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

    public function transaction_action(Request $request)
    {
        try {     
            DB::beginTransaction();
            $transaction_model = new Transaction();
            $t_id = $request->input('id');
            $action = $request->input('action');
            $amount = $request->input('amount');
            $user_id = $request->input('user_id');
            $type = $request->input('type');


            if($action == "reject")
            {
                $transaction_model->where('id',$t_id)->update([
                    "status"=>2
                ]);
                
            }else{
                $transaction_model->where('id',$t_id)->update([
                    "status"=>1
                ]);
            
                if($type == "deposit")
                {
                    Wallet::credit_account($amount,$user_id);

                }elseif ($type == "withdraw") {
                    Wallet::debit_account($amount,$user_id);

                }

            }
            DB::commit();
            return redirect()->back()->with('success',"Transaction request complete");
        } catch (\Throwable $th) {
            DB::rollBack();
        }
    }


    public function withdraw_request_page()
    {
        $transaction_model = new Transaction();
        if(isset($_GET['search']))
        {
         $deposits = $transaction_model->where('type','withdraw')->where('status',"=","0")->where('transaction_id',$_GET['search'])->paginate(10);
         
        }else{
            $deposits = $transaction_model->where('type','withdraw')->where('status',"=","0")->orderBy('created_at','desc')->paginate(10);
        }

        return view("admin.withdrawal_requests",compact('deposits'));

    }


   
}
