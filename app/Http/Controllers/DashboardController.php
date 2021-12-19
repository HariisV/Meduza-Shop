<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\metodePembayaran;
class DashboardController extends Controller
{
    public function index()
    {
        return view('Admin.dashboard');
    }
    public function metodePembayaran()
    {
        $mp = metodePembayaran::get();
        return view('Admin.MetodePembayaran',compact('mp'));
    }
    public function hapusMetodePembayaran($id)
    {
        metodePembayaran::findOrFail($id)->delete();
        return redirect()->route('MetodePembayaran');
    }
    public function tambahMetodePembayaran(Request $request)
    {
        metodePembayaran::create($request->all());
        return redirect()->route('MetodePembayaran');

    }
}
