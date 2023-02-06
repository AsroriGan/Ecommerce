<?php

namespace App\Http\Controllers\Landing;

use App\Models\Slider;
use Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Faker\Guesser\Name;
use Kavist\RajaOngkir\Facades\RajaOngkir;

class LandingpageController extends Controller
{
    public function home()
    {
        $data = Slider::all();
        return view('landingpage.home.home', compact('data'));
    }

    public function checkout()
    {
        $provinsi = RajaOngkir::provinsi()->all();
        $userId = auth()->user()->id;
        $data =  \Cart::session($userId)->getContent();
        $subtotal = \Cart::getSubTotal();
        // dd($data);
        if ($subtotal == null) {
            return redirect('/')->with("error", "Keranjang Anda kosong");
        } else {
            return view('landingpage.checkout.checkout', compact('provinsi', 'data', 'subtotal'));
        }
    }
    public function getongkir(Request $request)
    {
        if (is_null($request->prov) || is_null($request->dis) || is_null($request->dev)) {
            $html = "";
            echo $html;
        } else {
            $weight = array_sum($request->wgt);
            $ongkir = RajaOngkir::ongkosKirim([
                'origin' => 342,// ID kota/kabupaten asal
                'destination' => $request->dis, // ID kota/kabupaten tujuan
                'weight' => $weight, // berat barang dalam gram
                'courier' => $request->dev, // kode kurir pengiriman
            ])->get();
            // dd($ongkir[0]['costs']);
            $name = $ongkir[0]["name"];
            // dd($name);
            $html = "";
            $no = 0;
            foreach ($ongkir[0]["costs"] as $value) {
                // dd($value);
                $service = 'service';
                $OK = 'description';
                $val = 'value';
                $etd = 'etd';
                $cost = 'cost';
                $no++;
                $html .= '<span class="ec-del-option col-12"><span class="w-100"><span class="ec-del-opt-head">' . $name . '</span><input class="ongkir" type="radio" id="del' . $no . '" value="' . $value[$cost][0][$val] . '" name="radio-group"><label for="del' . $no . '" class="f-w500">' . $value[$service] . '' . ' ' . '' . '(' . $value[$OK] . ') : ' . 'Rp. ' . '' . $value[$cost][0][$val] . '' . '(' . '' . ($value[$cost][0][$etd]) . '' . ' days' . '' . ')' . '</label></span></span>';
            }
            echo $html;
        }
    }
}
