<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PaymentController extends Controller
{
    public function loginpayment(){
        return view('loginpayment');
    }
    public function payment(Request $request){
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-2Gx3lYwZHN0JrnzfdJtZuuxe';    
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => 10000,
            ),
            'item_details' => array([
                "id"=> "a01",
      "price"=> 7000,
      "quantity"=> 2,
      "name"=> "Apple"
            ],
    [
      "id"=> "b02",
      "price"=> 3000,
      "quantity"=> 2,
      "name"=> "Orange"
    ]),
            'customer_details' => array(

                'first_name' => $request->get('username'),
                'last_name' => '',
                'email' => $request->get('email'),
                'phone' => $request->get('Nohp'),
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        // return $snapToken;
        return view('cobapayment', ['snap_token'=> $snapToken]);
    }
}