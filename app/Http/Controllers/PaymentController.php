<?php

namespace App\Http\Controllers;

use App\Models\payment;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PaymentController extends Controller
{
    public function loginpayment()
    {
        return view('loginpayment');
    }
    public function payment(Request $request)
    {
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
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
            'item_details' => array(
                [
                    "id" => "a01",
                    "price" => 7000,
                    "quantity" => 2,
                    "name" => "Apple"
                ],
                [
                    "id" => "b02",
                    "price" => 3000,
                    "quantity" => 2,
                    "name" => "Orange"
                ]
            ),
            'customer_details' => array(

                'first_name' => $request->get('username'),
                'last_name' => '',
                'email' => $request->get('email'),
                'phone' => $request->get('Nohp'),
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        // return $snapToken;
        return view('cobapayment', ['snap_token' => $snapToken]);
    }

    public function payment_post(request $request){
        // return $request;
        $json =json_decode($request->get('json'));
        $order = new payment();
        $order->status = $json->transaction_status;
        // dd($json->transaction_status);
        $order->username = $request->get('username');
        $order->Email = $request->get('Email');
        $order->Nohp = $request->get('Nohp');
        $order->transaction_id = $json->transaction_id;
        $order->order_id = $json->order_id;
        $order->gross_amount = $json->gross_amount;
        $order->payment_type = $json->payment_type;
        $order->payment_code = isset($json->payment_code) ? $json->payment_code : null;
        $order->pdf_url = isset($json->pdf_url) ? $json->pdf_url : null;
        return $order->save() ? redirect(url('/loginpayment'))->with('alert-succes', 'order berhasil dibuat') : redirect(url('/loginpayment'))->with('alert-failed', 'order gagal dibuat');
    }
}
