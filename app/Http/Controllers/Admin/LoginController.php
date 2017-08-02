<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginRequest;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function store(LoginRequest $request)
    {
        auth()->attempt(request()->only('email', 'password'));
        return redirect()->route('admin.index');
    }

    public function logout()
    {
    	auth()->logout();
    	return redirect()->route('admin.login');
    }
}