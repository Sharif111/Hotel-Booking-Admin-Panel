<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Hash;
use Auth;

class AdminLoginController extends Controller
{
    public function index()
    {
       // $pass=Hash::make('1234');
       // dd($pass);
        return view('admin.layout.login');
    }

    public function forget_password()
    {
        return view('admin.layout.forget_password');
    }
}
