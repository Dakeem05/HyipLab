<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "balance"
    ];


    public static function debit_account($amount,$user_id)
    {
        $wallet_model = new Wallet();
        $get_user = $wallet_model->select("balance")->where('user_id',$user_id)->first();
        $balance = $get_user['balance'];
        $new_balance = $balance - $amount;
        if ($new_balance < 0) {
            return false;
        }
        $wallet_model->where('user_id',$user_id)->update([
            "balance"=>$new_balance
        ]);
        Transaction::update_transaction($amount,$user_id,1,"debit");


    }


    public static function credit_account($amount,$user_id)
    {
        $wallet_model = new Wallet();
        $get_user = $wallet_model->select("balance")->where('user_id',$user_id)->first();
        $balance = $get_user['balance'];
        $new_balance = $balance + $amount;
        $wallet_model->where('user_id',$user_id)->update([
            "balance"=>$new_balance
        ]);
      Transaction::update_transaction($amount,$user_id,1,"credit");

    }

   


}
