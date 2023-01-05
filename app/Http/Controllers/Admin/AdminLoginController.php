<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function index()
    {
        return view('admin.layout.login');
    }

    public function forget_password()
    {
        return view('admin.layout.forget_password');
    }
}
