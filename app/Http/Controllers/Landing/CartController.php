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
        $subtotal = \Cart::getSubTotal();
        return view('landingpage.keranjang.keranjang',compact('data','subtotal'));
    }

    public function cartpost(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);
        // dd($produk);
        $getfoto = explode(',', $produk->galeri_produk);
        $fotoproduk = $getfoto[0];
        $variant = Variant::where('produk_id',$produk->id)->where('ukuran_produk',$request->ukuran)->where('warna_produk',$request->warna)->first();
        // dd($fotoproduk);
        $hargatotal = $variant->harga_produk * $request->jumlah;
        // dd($hargatotal);
        if($request->jumlah > $variant->stok_produk) {
            return redirect()->back()->with('error','jumlah melebihi stock');
        } else {
           $iduser = auth()->user()->id;
            \Cart::session($iduser)->add(array(
                'id' => $produk->id,
                'name' => $produk->nama_produk,
                'price' => $variant->harga_produk,
                'quantity' => $request->jumlah,
                'attributes' => array(

                'warna' => $request->warna,
                'ukuran' => $request->ukuran,
                'foto' => $fotoproduk,
                'hargatotal' => $hargatotal,
                )

            ));
            return redirect()->back()->with('success','Berhasil Menambahkan Produk Ke Keranjang');
        }
    }
     public function hapuscart($id){
        $iduser = auth()->user()->id;
        \Cart::session($iduser)->remove($id);
        return redirect()->back()->with('success','berhasil menghapus');
    }

    public function postcart(Request $request)
    {
        // dd($request->all());
        $produk = Produk::where('id',$request->id)->first();
        $variant = Variant::where('produk_id',$produk->id)->where('ukuran_produk',$request->ukuran)->where('warna_produk',$request->warna)->first();
        // dd($produk);
        $getfoto = explode(',', $produk->galeri_produk);
        $fotoproduk = $getfoto[0];
        // dd($fotoproduk);
        $hargatotal = $variant->harga_produk * $request->jumlah;
        // dd($hargatotal);
        if($request->jumlah > $variant->stok_produk) {
            return redirect()->back()->with('error','jumlah melebihi stock');
        } else {
           $iduser = auth()->user()->id;
            Cart::session($iduser)->add(array(
                'id' => $produk->id,
                'name' => $produk->nama_produk,
                'price' => $variant->harga_produk,
                'quantity' => $request->jumlah,
                'attributes' => array(
                    // 'weight' => 
                'warna' => $request->warna,
                'ukuran' => $request->ukuran,
                'foto' => $fotoproduk,
                'hargatotal' => $hargatotal,
                )

            ));
            return redirect()->back()->with('success','Berhasil Menambahkan Produk Ke Keranjang');
        }
    }

}
