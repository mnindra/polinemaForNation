<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Pesan;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    public function __construct() {
      $pesan = Pesan::where('dibaca', 0)->orderBy('created_at', 'desc')->get();
      View::share('pesan_belum_terbaca', $pesan);
    }
}
