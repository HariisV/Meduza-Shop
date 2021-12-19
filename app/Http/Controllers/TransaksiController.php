<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Transaksi;
use App\Models\Product;

class TransaksiController extends Controller
{   
    public function index()
    {
       
        $transaksi = Transaksi::get();
        $produk = Product::get();
        return view('Admin.Transaksi.index', compact('produk','transaksi'));
    }

    public function update(Request $request, $id)
    {
        Transaksi::where('id', $id)->update([
            'status' => $request->status
        ]);
        return Redirect()->back();

    }

    public function create(Request $request)
    {
        $cart = Cart::where('user_id', Auth()->user()->id)->get();
        $request['user_id'] = Auth()->user()->id;
        $harga = 0;
        foreach ($cart as $key) {
            $gg[] = $key->product_id;
            $hargaForX = $key->product->harga * $key->jumlah;
            $harga += $hargaForX;
        }
        $request['product_id'] = implode(",",$gg);
    
        $request['total'] = $harga;
        $request['status'] = "Pending";
        $Tid = Transaksi::create($request->all());
        Cart::where('user_id', Auth()->user()->id)->delete();
        return redirect()->route('success', $Tid->id);
    }
    public function success($id)
    {
        $transaksi = Transaksi::where('id',$id)->first();
        $ProdukID = explode(",", $transaksi->product_id);
        foreach ($ProdukID as $item) {
            $produk[] = Product::where('id', $item)->first();
        }
        $jumlahCart = Cart::where('user_id', Auth()->user()->id)->count();

        return view('Tampilan.success',compact('transaksi','produk','jumlahCart'));
    }
    public function konfirmasiPembayaran($id)
    {
        Transaksi::where('id',$id)->update([
            'status' => 'TRF'
        ]);
        return Redirect()->back()->with('success', 5);
    }
    public function delete($id)
    {
        Transaksi::where('id', $id)->delete();
        return Redirect()->back();

    }
}
