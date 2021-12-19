<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesan;

class PesanController extends Controller
{
    public function index()
    {
        $pesan = Pesan::get();
        return view('Admin.Pesan.index', compact('pesan'));
    }
    public function destroy($id)
    {
        Pesan::where('id', $id)->delete();
        return redirect()->back();
    }
}
