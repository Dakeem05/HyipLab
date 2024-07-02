<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Investment;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Env;
use Illuminate\Support\Facades\Auth;

class ReferralController extends Controller
{
    public function referrals(Request $request)
    {
        $transaction_model = new Transaction();
        $user_model = new User();
        if(isset($_GET['search']))
        {
         $transactions = $transaction_model->where('user_id',Auth::user()->id)->where('transaction_id',$_GET['search'])->paginate(10);
         
        }else{
            $transactions = $transaction_model->where('user_id',Auth::user()->id)->orderBy('created_at','desc')->paginate(10);
        }
        $user = $user_model->where('id', Auth::id())->first();
        $refs = $user_model->where('referrer_code', $user->ref_code)->get();
        $ref_code = $user->ref_code;
        $returns = [];
        $amount = [];
        foreach ($refs as $ref) {
            $investment_instance = Investment::where('user_id', $ref->id)->first();
            $wallet_instance = Wallet::where('user_id', $ref->id)->first();
            $email = $ref->email;
            $balance = $wallet_instance->balance;
            $has_invested = false;
            if ($investment_instance !== '') {
                $has_invested = true;
            }

            $return = [
                "email" => $email,
                "balance" => $balance,
                "has_invested" => $has_invested,
            ];

            $returns[] = $return;
        }
        $perPage = 15; 
        $currentPage = request()->get('page', 1);
        $offset = ($currentPage - 1) * $perPage;
    
        $items = array_slice($returns, $offset, $perPage);
        
        $path = url('/user/referrals'); 
        
        $paginator = new LengthAwarePaginator($items, count($returns), $perPage, $currentPage, [
            'path' => $path,
            'pageName' => 'page',
        ]);
    
        $result = $paginator;
    
        return view("user.referrals",compact('transactions', "result", "ref_code"));

    }
}
