<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\foto;
use App\Models\slider;
use App\Models\Cart;
use App\Models\metodePembayaran;
use App\Models\Pesan;

class TampilanController extends Controller
{
    public function index()
    { 

        $product = Product::orderBy('id', 'desc')->where('stok', '>', 0)->take(8)->get();
        $slider = slider::get();
        $productCategory = Product::inRandomOrder()->take(4)->get();
        if (Auth()->user()) {
            $jumlahCart = Cart::where('user_id', Auth()->user()->id)->count();
        }else{
            $jumlahCart = 0;
        }
        

        return view('Tampilan/index',compact('product','slider','productCategory','jumlahCart'));
    }
    public function detail($nama)
    {
        $namaProduk = str_replace("-"," ",$nama); 
        $produk = Product::where('nama_product', $namaProduk)->first();
        $fotoProduk = foto::where('post_ID', $produk->id)->get();
        $productRelate = Product::inRandomOrder()->take(6)->get();
        if (Auth()->user()) {
            $jumlahCart = Cart::where('user_id', Auth()->user()->id)->count();
        }else{
            $jumlahCart = 0;
        }

        return view('Tampilan.Produk.detailProduk', compact('produk','fotoProduk','jumlahCart','productRelate'));
    }
    public function product()
    {
        if (Auth()->user()) {
            $jumlahCart = Cart::where('user_id', Auth()->user()->id)->count();
        }else{
            $jumlahCart = 0;
        }


        $produk = Product::get();
        foreach ($produk as $item) {
            $kategori[] =  $item->kategori;
        }
        $hasilKategori = array_unique($kategori);
        $forU = Product::inRandomOrder()->take(3)->get();
        $produkShow = Product::orderBy('id', 'desc')->paginate(4);
        return view('Tampilan.Product', compact('jumlahCart','hasilKategori','forU','produkShow'));
    }
    public function kategori($kategoris)
    {
        
        if (Auth()->user()) {
            $jumlahCart = Cart::where('user_id', Auth()->user()->id)->count();
        }else{
            $jumlahCart = 0;
        }


        $produk = Product::get();
        foreach ($produk as $item) {
            $kategori[] =  $item->kategori;
        }
        $hasilKategori = array_unique($kategori);
        $forU = Product::inRandomOrder()->take(3)->get();
        $produkShow = Product::where('kategori', $kategoris)->orderBy('id', 'desc')->paginate(4);
        return view('Tampilan.Product', compact('jumlahCart','hasilKategori','forU','produkShow'));
    }

    public function cart()
    {
        if (Auth()->user()) {
            $jumlahCart = Cart::where('user_id', Auth()->user()->id)->count();
        }else{
            $jumlahCart = 0;
        }
        $productRelate = Product::inRandomOrder()->take(3)->get();
        $harga = 0;
        $produkCart = Cart::where('user_id', Auth()->user()->id)->get();
        foreach ($produkCart as $key) {
            $hargaForX = $key->product->harga * $key->jumlah;
            
            $harga += $hargaForX;
            
        }
       
        return view('Tampilan.Cart', compact('produkCart', 'harga','productRelate','jumlahCart'));
    }

    public function cartTambah(Request $request)
    {
        $product = Product::where('id', $request->id)->first();
        $hargafix = $product->harga * $request->jumlah;
        Cart::updateOrCreate(
            [
                'user_id' => Auth()->User()->id,
                'product_id' => $request->id,
            ],
            [
                'jumlah' => $request->jumlah
            ]
        );
        return redirect()->route('cart');
    }
    public function checkout()
    {
        $produkCart = Cart::where('user_id', Auth()->user()->id)->get();
        if (Auth()->user()) {
            $jumlahCart = Cart::where('user_id', Auth()->user()->id)->count();
        }else{
            $jumlahCart = 0;
        }

        $harga = 0;

        foreach ($produkCart as $key) {
            $hargaForX = $key->product->harga * $key->jumlah;
            
            $harga += $hargaForX;
            
        }
        $mp = metodePembayaran::get();
        return view('Tampilan.checkout',compact('produkCart','harga','mp','jumlahCart'));
    }
    public function about()
    {
        if (Auth()->user()) {
            $jumlahCart = Cart::where('user_id', Auth()->user()->id)->count();
        }else{
            $jumlahCart = 0;
        }
        return view('Tampilan.About',compact('jumlahCart'));
    }
    public function contact()
    {
        if (Auth()->user()) {
            $jumlahCart = Cart::where('user_id', Auth()->user()->id)->count();
        }else{
            $jumlahCart = 0;
        }
        return view('Tampilan.contact',compact('jumlahCart'));
    }
    public function tambahPesan(Request $request)
    {
        if (Auth()->user()) {
            $jumlahCart = Cart::where('user_id', Auth()->user()->id)->count();
        }else{
            $jumlahCart = 0;
        }
        Pesan::create($request->all());
        return Redirect()->back()->with('success', 5);

    }
}
