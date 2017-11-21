<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PetugasController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['petugas'] = Petugas::all();
        return view('admin.petugas.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.petugas.create');
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
          'nama' => 'required|string',
          'jenis_kelamin' => 'required',
          'alamat' => 'required',
          'email' => 'required|email|unique:petugas',
          'telp' => 'required|numeric',
          'username' => 'required|alpha_dash|unique:petugas',
          'password' => 'required|min:6|same:konfirmasi_password'
        ]);
        $request->merge([
          'password' => bcrypt($request->input('password'))
        ]);

        Petugas::create($request->all());
        return redirect('/admin/petugas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $data['petugas'] = Petugas::find($id);
      return view('admin.petugas.edit', $data);
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
        'nama' => 'required|string',
        'jenis_kelamin' => 'required',
        'alamat' => 'required',
        'telp' => 'required|numeric'
      ]);

        Petugas::find($id)->update($request->all());
        return redirect('/admin/petugas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        if($id == Auth::guard('petugas')->user()->id_petugas) {
          $request->session()->flash('error_message', 'Anda sedang login menggunakan akun ini');
        } else {
          Petugas::destroy($id);
        }

        return redirect('/admin/petugas');
    }
}
