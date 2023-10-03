<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.login.index');
    }

    function login(Request $request)
    {
        // proses validasi
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        $infologin = [
            'email'=> $request->email,
            'password'=> $request->password,
        ];

        if(Auth::attempt($infologin)){
            if(Auth::user()->role == 'operator'){
                return redirect('admin/operator');
            } elseif (Auth::user()->role == 'keuangan'){
                return redirect('admin/keuangan');
            } elseif (Auth::user()->role == 'marketing'){
                return redirect('admin/marketing');
            }

        }else{
            return redirect('')->withErrors('Username dan password yang dimasukkan tidak sesuai')->withInput();
        }


    }

    function logout() {
        Auth::logout();
        return redirect('');
    }
}
