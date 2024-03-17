<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;

class TransactionController extends Controller
{
    //

    public function deposit()
    {
        $gateways = Config::get("payment_gateway.gateways");
        if(!isset($_GET['payment_type']) && !isset($_GET['amount'])){
            $gateway = "Bitcoin";
            $amount = 0.00;
            
        }else{
            $gateway  =$_GET['payment_type'];
            $amount = $_GET['amount'];
        }

        if($gateway == "Bitcoin")
        {
            try {
                $data = file_get_contents("https://blockchain.info/tobtc?currency=USD&value=".$amount) ?? null;
                if($data != null)
                {
                    $amount_payable = $data;
                }
            } catch (\Throwable $th) {
                $amount_payable = $data;
            }
            
        }

        $picked_gateway = Config::get("payment_gateway.gateways")[$gateway];
        $payment_address = $picked_gateway['address'];
        return view("user.deposit_home",compact("gateways","payment_address","amount_payable"));

        
    }

    public function deposit_create(Request $request)
    {
        $transaction_model = new Transaction();
        $request->validate([
            'deposit_receipt' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ]);

        try {
           $receipt = $request->deposit_receipt;
           $ext = $receipt->getClientOriginalExtension();
           $newfile_name = time()."." . $ext;
           $attachment = 'deposit_receipt/'.$newfile_name;
          $receipt->storePubliclyAs("deposit_receipt",$newfile_name,'public');
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
        }

        $amount = $request->input('amount');
        Transaction::update_transaction($amount,Auth::user()->id,0,"deposit",$attachment);
        return redirect(route("deposit.history"))->with('success',"Request sent and currently being reviewed");
    }


    public function deposit_history(Request $request)
    {
        $transaction_model = new Transaction();
        if(isset($_GET['search']))
        {
         $deposits = $transaction_model->where("type","deposit")->where('user_id',Auth::user()->id)->where('transaction_id',$_GET['search'])->paginate(10);
         
        }else{
            $deposits = $transaction_model->where("type","deposit")->where('user_id',Auth::user()->id)->orderBy('created_at','desc')->paginate(10);
        }

        return view("user.deposit_history",compact('deposits'));
    }

    public function transaction_history(Request $request)
    {
        $transaction_model = new Transaction();
        if(isset($_GET['search']))
        {
         $transactions = $transaction_model->where('user_id',Auth::user()->id)->where('transaction_id',$_GET['search'])->paginate(10);
         
        }else{
            $transactions = $transaction_model->where('user_id',Auth::user()->id)->orderBy('created_at','desc')->paginate(10);
        }

        return view("user.transaction_history",compact('transactions'));

    }

    public function withdraw_page()
    {
        
        return view("user.withdraw_home");
    }

    public function make_withdraw_request(Request $request)
    {
        $address = $request->input('withdraw_address');
        $amount = $request->input('amount');

        $wallet_model = new Wallet();
        $wallet = $wallet_model->where('user_id',Auth::user()->id)->first();

        if($amount > $wallet->balance)
        {
            return redirect()->back()->with("error","Insufficient Funds");
        }

        Transaction::update_transaction($amount,Auth::user()->id,0,"withdraw",$address);
        return redirect(route("withdraw_page"))->with('success',"Request sent and currently being reviewed");

        
    }
}
