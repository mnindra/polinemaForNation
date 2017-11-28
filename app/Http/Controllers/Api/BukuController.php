<?php

namespace App\Http\Controllers\Api;

use App\Buku;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = Buku::orderBy('created_at', 'desc')->with('kategori')->get();
        return response()->json($buku);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buku = Buku::with('kategori')->where('id_buku', $id)->get();
        return response()->json($buku);
    }
}
