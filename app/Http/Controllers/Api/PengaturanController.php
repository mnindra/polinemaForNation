<?php

namespace App\Http\Controllers\Api;

use App\Pengaturan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PengaturanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengaturan = Pengaturan::find(1);
        echo json_encode($pengaturan);
    }
}
