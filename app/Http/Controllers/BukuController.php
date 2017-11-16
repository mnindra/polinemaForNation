<?php

namespace App\Http\Controllers;

use App\Buku;
use App\Kategori;
use Illuminate\Http\Request;

class BukuController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $data['buku'] = Buku::with('kategori')->get();
    return view('admin.buku.index', $data);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $data['kategori'] = Kategori::all();
    return view('admin.buku.create', $data);
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
      'id_buku' => 'required|alpha_num|unique:buku',
      'id_kategori' => 'required|numeric',
      'isbn' => 'required|numeric|unique:buku',
      'judul' => 'required|string',
      'pengarang' => 'required|string',
      'penerbit' => 'required|string',
      'file' => 'required|file|mimes:pdf',
      'sampul' => 'required|image',
      'tahun_terbit' => 'required|numeric',
      'jumlah_halaman' => 'required|numeric',
      'deskripsi' => 'required|string'
    ]);

    // upload file ke public/ebook
    $ext = $request->file('file')->getClientOriginalExtension();
    $file = $request->input('id_buku') . '.' . $ext;
    $request->file('file')->move('ebook/', $file);

    // upload file ke public/img/
    $ext = $request->file('sampul')->getClientOriginalExtension();
    $sampul = $request->input('id_buku') . '.' . $ext;
    $request->file('sampul')->move('img/sampul/', $sampul);

    Buku::create($request->all());
    Buku::find($request->input('id_buku'))->update([
      'file' => $file,
      'sampul' => $sampul
    ]);
    return redirect('/buku');
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
    $data['buku'] = Buku::find($id);
    $data['kategori'] = Kategori::all();
    return view('admin.buku.edit', $data);
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
      'id_kategori' => 'required|numeric',
      'judul' => 'required|string',
      'pengarang' => 'required|string',
      'penerbit' => 'required|string',
      'file' => 'sometimes|required|file|mimes:pdf',
      'sampul' => 'sometimes|required|image',
      'tahun_terbit' => 'required|numeric',
      'jumlah_halaman' => 'required|numeric',
      'deskripsi' => 'required|string'
    ]);

    Buku::find($id)->update($request->all());

    if($request->has('file')) {
      // hapus file lama
      $files = glob('ebook/' . $id . '*');
      foreach ($files as $file) {
        unlink($file);
      }
      // upload file ke public/ebook
      $ext = $request->file('file')->getClientOriginalExtension();
      $file = $id . '.' . $ext;
      $request->file('file')->move('ebook/', $file);

      // update data di database
      Buku::find($id)->update([
        'file' => $file
      ]);
    }

    if($request->has('sampul')) {
      // hapus file lama
      $files = glob('img/sampul/' . $id . '*');
      foreach ($files as $file) {
        unlink($file);
      }
      // upload file ke public/img/sampul/
      $ext = $request->file('sampul')->getClientOriginalExtension();
      $sampul = $id . '.' . $ext;
      $request->file('sampul')->move('img/sampul/', $sampul);

      // update data di database
      Buku::find($id)->update([
        'sampul' => $sampul
      ]);
    }

    return redirect('/buku');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $buku = Buku::find($id);
    unlink('ebook/' . $buku['file']);
    unlink('img/sampul/' . $buku['sampul']);

    Buku::destroy($id);
    return redirect('/buku');
  }
}
