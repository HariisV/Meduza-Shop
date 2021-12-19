<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\foto;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    public function index()
    {
        $product = Product::get();
        return view('Admin.Product.index',compact('product'));
    }
    public function create()
    {
        return view('Admin.Product.tambah');
    }
    public function store(Request $request)
    {
        $request['terjual'] = 0;
        $request['dilihat'] = 0;
        $gambar = $request['gambar'];
        $x = 0;

        // foto =
        foreach ( $gambar as $item) {
            $namaFile = rand(999,9999). "_" . $request['nama_product'] . "." .  $item->extension();
            if ($x == 0) {
                $request['photo'] = $namaFile;
                $idProduct = Product::create($request->all());
                // dd($idProduct->id);
            }
            $item->storeAS(
                'public/Product', $namaFile
            );
            foto::Create([
                "nama_file" => $namaFile,
                "jenis" => "Produk",
                "post_ID" => $idProduct->id
            ]);
            
            $x++;

        }
        // Product::create($request->all());
        return redirect()->route('product');
    }

    public function destroy($id)
    {
        $foto = Foto::where('post_ID', $id)->get();
        foreach ($foto as $item) {
            echo $item->nama_file . "<br>";
            Storage::delete('public/Product/' . $item->nama_file);

        }
        Foto::where('post_ID', $id)->delete();
        Product::where('id', $id)->delete();
        return redirect()->route('product');
    }

    public function edit($id)
    {
        $data = Product::where('id',$id)->first();
        $foto = Foto::where('post_id', $id)->get();
        return view('Admin.Product.edit',compact('data','foto'));
    }

    public function editProdukProses(Request $request, $id)
    {
        $gambar = $request['gambar'];
// dd($gambar);
        if ($request['gambar'] != null) {
            $x = 0;
            $foto = Foto::where('post_ID', $id)->get();
            foreach ($foto as $item) {
                echo $item->nama_file . "<br>";
                Storage::delete('public/Product/' . $item->nama_file);

            }
            Foto::where('post_ID', $id)->delete();

            foreach ( $gambar as $item) {
                $namaFile = rand(999,9999). "_" . $request['nama_product'] . "." .  $item->extension();
                if ($x == 0) {
                    $request['photo'] = $namaFile;
                    Product::where('id',$id)->update($request->except('_token','gambar'));
            }
                $item->storeAS(
                    'public/Product', $namaFile
                );
                foto::Create([
                    "nama_file" => $namaFile,
                    "jenis" => "Produk",
                    "post_ID" => $id
                ]);
                
                $x++;
    
            }
        }else{
                    Product::where('id',$id)->update($request->except('_token'));
        }
        return redirect()->route('product');
    }
}
