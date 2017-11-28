<?php

namespace App\Http\Controllers\Api;

use App\Pesan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PemesananController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
        'nama' => 'required|string',
        'email' => 'required|email',
        'telp' => 'required|numeric',
        'isi' => 'required|string'
      ]);

      Pesan::create($request->all());
    }
}
