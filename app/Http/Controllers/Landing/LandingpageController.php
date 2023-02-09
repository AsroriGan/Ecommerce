<?php

namespace App\Http\Controllers\Landing;

use Cart;
use App\Models\Slider;
use Faker\Guesser\Name;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\datawilayahkecamatan;
use Illuminate\Support\Facades\Auth;
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
        $datas =  \Cart::session($userId)->getContent();
        $subtotal = \Cart::getSubTotal();
        //data exiting adress
        $ProvinsiId = Auth::user()->provinsi;
        $KabupatenId = Auth::user()->kabupaten;
        $KecamatanId = Auth::user()->kecamatan;
        $province_user = RajaOngkir::provinsi()->find($ProvinsiId);
        $Distric_user = RajaOngkir::kota()->dariprovinsi($ProvinsiId)->find($KabupatenId);
        $SubDistric_user = datawilayahkecamatan::find($KecamatanId);
        // dd($province_user);
        foreach ($datas as $cart) {
            $ids = $cart->attributes->ids;
            $data =  Cart::session($userId)->get($cart->attributes->ids);
            $datacart[] = $data;
            //khusus buat cart
            if ($data == null) {
                return redirect('/')->with("error", "Keranjang Anda kosong");
            } else {
                return view('landingpage.checkout.checkout', compact('provinsi', 'data', 'subtotal','datacart','province_user','Distric_user','SubDistric_user'));
            }
        }
        //untuk universal
        if ($subtotal == null) {
                return redirect('/')->with("error", "Keranjang Anda kosong");
        } else {
            return view('landingpage.checkout.checkout', compact('provinsi', 'data', 'subtotal','datacart','province_user','Distric_user','SubDistric_user'));
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
                $html .= '<span class="ec-del-option col-12"><span class="w-100"><span class="ec-del-opt-head">' . $name . '</span><input class="ongkir" type="radio" id="del' . $no . '" value="' . $value[$cost][0][$val] . '" name="delivery-method"><label for="del' . $no . '" class="f-w500">' . $value[$service] . '' . ' ' . '' . '(' . $value[$OK] . ') : ' . 'Rp. ' . '' . $value[$cost][0][$val] . '' . '(' . '' . ($value[$cost][0][$etd]) . '' . ' days' . '' . ')' . '</label></span></span>';
            }
            echo $html;
        }
    }
}
