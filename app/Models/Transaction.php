<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;


    public static function update_transaction($amount,$user_id,$status,$type,$attachment=""){
        $transaction_model = new Transaction();
        $amount = $amount;
        $transaction_model->transaction_id =  substr(md5(time()), 0, 7); 
        $transaction_model->amount = $amount;
        $transaction_model->attachment = $attachment;
        $transaction_model->user_id = $user_id;
        $transaction_model->type = $type;
        $transaction_model->status = $status;
        $transaction_model->save();
    }
}
