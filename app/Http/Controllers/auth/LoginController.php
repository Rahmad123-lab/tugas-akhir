<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider; // Menambahkan impor untuk RouteServiceProvider

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

}
