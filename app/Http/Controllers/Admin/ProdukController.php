<?php

namespace App\Http\Controllers\Admin;

use App\Models\Produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdukController extends Controller
{
    public function index()
    {
        $data = Produk::get();
        return view('dashboardadmin.produk.produk',compact('data'));
    }
    public function addproduct()
    {
        return view('dashboardadmin.produk.tambahproduk');
    }
}
