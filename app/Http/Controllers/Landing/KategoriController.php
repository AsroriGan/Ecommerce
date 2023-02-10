<?php

namespace App\Http\Controllers\Landing;

use App\Models\Produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KategoriController extends Controller
{
    public function index(){
        $data = Produk::paginate(6);
        return view('landingpage.Categories.categori',compact('data'));
    }
}
