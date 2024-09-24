<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;

class Admin_Controller extends Controller
{
    public function show($id){
        $admin = admin::findOrFail($id);
        return view('admin_details', compact('admin'));
    }




    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'password' => 'required|string|min:2'
        ]);

        admin::create([
            'name' => $validate['name'],
            'email' => $validate['email'],
            'password' => bcrypt($validate['password']),
            'usertype'=>'admin'
        ]);

        return redirect()->back()->with('success', 'Admin created successfully!');
    }

    public function list(){
        $admins = admin::where('usertype','admin')->get();
        return view('view_admins', compact('admins'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'password' => 'required|string|min:2'
        ]);

        $admin = admin::findOrFail($id);
        $admin->name = $request->input('name');
        $admin->email = $request->input('email');
        $admin->password = $request->input('password');
        $admin->save();

        return redirect()->route('adminList')->with('success', 'Product updated successfully.');
    }

    public function destroy($id){
        $admin = admin::findOrFail($id);
        $admin->delete();
        return redirect()->route('adminList')->with('success', 'User deleted successfully');
    }
    

    
}
