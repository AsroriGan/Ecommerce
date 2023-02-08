<?php


namespace App\Http\Controllers\Landing;

use App\Models\Produk;
use App\Models\Variant;
// use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cart;

class CartController extends Controller
{
    public function keranjang()
    {
        $userId = auth()->user()->id;
        $data =  Cart::session($userId)->getContent();
        foreach ($data as $cart){
            $ids = $cart->attributes->ids;
            // $datas = Cart::session($userId)->get($ids);
        }
        // dd($data);
        $total_produk =  Cart::session($userId)->getContent()->count();
        $quantity = [];
        foreach ($data as $value) {
            array_push($quantity, $value->quantity);
        }
        $total_quantity = array_sum($quantity);
        $subtotal = \Cart::getSubTotal();
        // dd($data);
        return view('landingpage.keranjang.keranjang', compact('data', 'subtotal','total_produk','total_quantity'));
    }

    public function cartpost(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);
        // dd($produk);
        $getfoto = explode(',', $produk->galeri_produk);
        $fotoproduk = $getfoto[0];
        $variant = Variant::where('produk_id', $produk->id)->where('ukuran_produk', $request->ukuran)->where('warna_produk', $request->warna)->first();
        // dd($fotoproduk);
        $hargatotal = $variant->harga_produk * $request->jumlah;
        // dd($hargatotal);
        if ($request->jumlah > $variant->stok_produk) {
            return redirect()->back()->with('error', 'Amount Exceeds Stock');
        } else {
           $iduser = auth()->user()->id;
            \Cart::session($iduser)->add(array(
                'id' => $produk->id,
                'name' => $produk->nama_produk,
                'price' => $variant->harga_produk,
                'quantity' => $request->jumlah,
                'attributes' => array(
                    'weight' => $produk->berat_produk,
                    'warna' => $request->warna,
                    'ukuran' => $request->ukuran,
                    'foto' => $fotoproduk,
                    'hargatotal' => $hargatotal,
                )

            ));
            return redirect()->back()->with('success', 'Successfully added products to cart');
        }
    }
    public function hapuscart($id)
    {
        $iduser = auth()->user()->id;
        \Cart::session($iduser)->remove($id);
        return redirect()->back()->with('success', 'successfully delete');
    }

    public function postcart(Request $request)
    {
        // dd($request->ids);

        $produk = Produk::where('id', $request->id)->first();
        $variant = Variant::where('produk_id', $produk->id)->where('ukuran_produk', $request->ukuran)->where('warna_produk', $request->warna)->first();
        // dd($produk);
        $getfoto = explode(',', $produk->galeri_produk);
        $fotoproduk = $getfoto[0];
        // dd($fotoproduk);
        $hargatotal = $variant->harga_produk * $request->jumlah;
        // dd($hargatotal);
        if ($request->jumlah > $variant->stok_produk) {
            return redirect()->back()->with('error', 'Amount Exceeds Stock');
        } else {
            $iduser = auth()->user()->id;
            Cart::session($iduser)->add(array(
                'id' => $produk->id,
                'name' => $produk->nama_produk,
                'price' => $variant->harga_produk,
                'quantity' => $request->jumlah,
                'attributes' => array(
                    'weight' => $produk->berat_produk,
                    'warna' => $request->warna,
                    'ukuran' => $request->ukuran,
                    'foto' => $fotoproduk,
                    'hargatotal' => $hargatotal,
                )

            ));
            return redirect()->back()->with('success', 'Successfully added products to cart');
        }
    }
    public function cartcheckout(Request $request){
        $userId = auth()->user()->id;
        $datacart = array();
        foreach($request->ids as $ids){
            $ids2 = $ids;
            $data =  Cart::session($userId)->get($ids2);
            $datacart[] = $data;
        }
        foreach ($datacart as $cart) {
            \Cart::session($userId)->update($cart->id,[
                'attributes' => array(
                    'ids' => $cart->id,
                    'weight' => $cart->attributes->weight,
                    'warna' =>  $cart->attributes->warna,
                    'ukuran' => $cart->attributes->ukuran,
                    'foto' =>  $cart->attributes->foto,
                    'hargatotal' => $cart->attributes->hargatotal,
                )
            ]);
        }
        return redirect()->route('checkout');
    }
}
