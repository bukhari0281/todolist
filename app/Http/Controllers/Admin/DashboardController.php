<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return view('layouts.app');
    }
    public function operator(Request $request)
    {
        return view('pages.admin.operator');
    }
    public function keuangan(Request $request)
    {
        return view('pages.admin.keuangan');
    }
    public function marketing(Request $request)
    {
        return view('pages.admin.marketing');
    }
}
