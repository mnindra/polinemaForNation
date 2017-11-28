<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Kategori;
use Illuminate\Http\Request;

class KategoriController extends BaseController
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $data['kategori'] = Kategori::all();
    return view('admin.kategori.index', $data);
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
    $this->validate($request, [
      'nama' => 'required|string'
    ]);

    Kategori::create($request->all());
    $request->session()->flash('success_message', 'Data berhasil ditambahkan');
    return redirect('/admin/kategori');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $data['kategori'] = Kategori::find($id);
    return view('admin.kategori.edit', $data);
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
    $this->validate($request, [
      'nama' => 'required|string'
    ]);

    Kategori::find($id)->update($request->all());
    $request->session()->flash('success_message', 'Data berhasil diubah');
    return redirect('/admin/kategori');
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
    Kategori::destroy($id);
    $request->session()->flash('success_message', 'Data berhasil dihapus');
    return redirect('/admin/kategori');
  }
}
