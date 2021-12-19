<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\slider;
class SliderController extends Controller

{
    public function index()
    {
        $Slider = slider::get();
        return view('Admin.Slider.index',compact('Slider'));
    }
    public function store(Request $request)
    {
        $gambar = $request['gambar'];
        $request['image'] = rand(999,9999) . "_" . rand(9999,99999) . "." . $gambar->getClientOriginalExtension();
        $gambar->storeAS(
            'public/Slider/', $request['image']
        );
        // dd($namaGambar);

        slider::create($request->all());
        return redirect()->back();
    }
    public function destroy($id)
    {
        $slider = slider::where('id', $id)->first();

        Storage::delete('public/Slider/' . $slider->image);
        $slider->delete();
        return redirect()->back();

    }
}
