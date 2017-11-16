<?php

namespace App\Http\Controllers\Admin\Auth;

//use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/admin/';

    protected function guard() {
      return Auth::guard('petugas');
    }

    public function username() {
      return 'username';
    }

    public function showLoginForm() {
      return view('admin.auth.login');
    }
}
