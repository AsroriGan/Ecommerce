<?php

namespace App\Http\Controllers\Landing;

use Cart;
use App\Models\payment;
use App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Kavist\RajaOngkir\Facades\RajaOngkir;

class PaymentController extends Controller
{
    public function loginpayment()
    {
        return view('loginpayment');
    }
    public function payment(Request $request)
    {
        $provinsi = RajaOngkir::provinsi()->all();
        $subtotal = \Cart::getSubTotal();
        $userId = auth()->user()->id;
        $data =  \Cart::session($userId)->getContent();
        $total = $request->get('subtotal');
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
                'gross_amount' => $request->get('subtotal'),
            ),
            'customer_details' => array(

                'first_name' => Auth::user()->name,
                'last_name' => '',
                'email' => Auth::user()->email,
                'phone' => Auth::user()->notelepon,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        // return $snapToken;
        return view('landingpage.payment.payment', compact('data','provinsi','subtotal', 'total'), ['snap_token' => $snapToken]);
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
