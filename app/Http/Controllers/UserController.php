<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
        // ------------------------------ Admin ------------------------------- //

    public function admin()
    {
        $user = User::where('role', 'Admin')->get();
        return view('Admin/User/admin',compact('user'));
    }
    // 
    // 
    // 
    // ------------------------------ CUSTOMER ------------------------------- //

     public function customer()
     {
         $user = User::where('role', 'Customer')->get();
         return view('Admin/User/customer',compact('user'));
     }
    // 
    // 
    // -----------------------------------------------------------------------------

    public function store(Request $request)
    {
        $request['password'] = bcrypt($request['password']);
        User::create($request->all());
        return redirect()->back();
    }

    public function tambahCustomer(Request $request)
    {
        $request['password'] = bcrypt($request['password']);
        User::create($request->all());
        return redirect()->route('login');
    }
    // 
    // 
    // 

    public function destroy($id)
    {
        // Hapus
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back();
    }

    // 
    // 
    // 
    public function edit($id)
    {
        // Edit
        $data = User::findOrFail($id);
        return view('Admin.User.edit',compact('data'));
    }

    // 
    // 
    // 
    public function update(Request $request,$id)
    {
        // Proses Edit
        if ($request['password'] == null) {
            User::where('id', $id)->update($request->except('_token','password'));
        }else{
            User::where('id', $id)->update($request->except('_token'));
        }
        return redirect()->back();
    }


   
}
