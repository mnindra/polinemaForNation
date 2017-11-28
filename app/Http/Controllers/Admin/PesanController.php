<?php

namespace App\Http\Controllers\Admin;

use App\Pesan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class PesanController extends BaseController
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
//        $data['pesan'] = Pesan::all()->sortByDesc('created_at');
    $data['pesan'] = Pesan::orderBy('created_at', 'desc')->get();
    return view('admin.pesan.index', $data);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    Pesan::find($id)->update([
      'dibaca' => 1
    ]);

    $pesan = Pesan::where('dibaca', 0)->orderBy('created_at', 'desc')->get();
    View::share('pesan_belum_terbaca', $pesan);

    $data['pesan'] = Pesan::find($id);
    return view('admin.pesan.show', $data);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int $id
   * @param Request $request
   * @return \Illuminate\Http\Response
   */
  public function destroy($id, Request $request)
  {
    Pesan::destroy($id);
    $request->session()->flash('success_message', 'Data berhasil dihapus');
    return redirect('/admin/pesan');
  }
}
