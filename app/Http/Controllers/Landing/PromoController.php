<?php

namespace App\Http\Controllers\Landing;

use App\Models\BannerPromo;
use App\Models\promo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    public function promo(){
        $data = promo::all();
        $banner = BannerPromo::where('id', '=', 1)->firstOrFail();
        return view('landingpage.promo.promo', compact('data', 'banner'));
    }
}
