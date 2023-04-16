<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('adminroute.adduserpage');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //  dd($request->all());
        User::create([
            'name' => $request-> name,
            'email' => $request-> email,
            'username' => $request -> username,
            'password' => bcrypt($request -> password),
            'address' => $request -> address,
            'phone_number' => $request -> phone_number,
            'id_role' => $request -> id_role,
            'shop_name' => $request -> shop_name,
            'saldo' => $request -> saldo,
        ]);

        return redirect()->route('saveuser')->with('success', 'user berhasil ditambahkan');
        //'success', 'user berhasil ditambahkan
    }

    /**
     * Display the specified resource.
     */
    public function show(user $user)
    {
        $users = user::all();
        return view('adminroute.viewuserpage', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, user $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(user $user)
    {
        $user->delete();
        return view("adminroute.viewuserpage")->with('success', 'Data berhasil dihapus');
    }
}
