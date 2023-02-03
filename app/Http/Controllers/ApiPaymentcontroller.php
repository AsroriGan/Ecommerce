<?php

namespace App\Http\Controllers;

use App\Models\payment;
use Illuminate\Http\Request;

class ApiPaymentcontroller extends Controller
{
    public function paymen_handler(request $request){
        $json = json_decode($request->getContent());
        // return $json ;

        $signature_key = hash('SHA512', $json->order_id . $json->status_code . $json->gross_amount .env('MIDTRANS_SERVER_KEY'));
        return $signature_key;

        if($signature_key != $json->signature_key){
            return abort (404);
        }

        // status berhasil
        $order = payment::where('order_id', $json->order_id)->first();
        return $order->update(['status'=>$json->transaction_status]);
    }
}
