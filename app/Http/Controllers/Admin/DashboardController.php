<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function admin(Request $request)
    {
        return view('pages.admin.index');
    }
    public function user(Request $request)
    {
        return view('pages.user.index');
    }
}
