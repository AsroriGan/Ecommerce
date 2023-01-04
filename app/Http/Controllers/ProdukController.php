<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function produk()
    {
        return view('produk.produk');
    }
}
