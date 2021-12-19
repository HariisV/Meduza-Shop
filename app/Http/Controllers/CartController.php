<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
class CartController extends Controller
{
    public function delete($id)
    {
        Cart::findORFail($id)->delete();
        return redirect()->back();
    }
}
