<?php

use Illuminate\Database\Seeder;
use \App\Petugas;
class PetugasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Petugas::create([
          'nama' => 'administrator',
          'jenis_kelamin' => true,
          'alamat' => str_random(),
          'email' => 'administrator@gmail.com',
          'telp' => '085331247098',
          'username' => 'admin',
          'password' => md5('admin')
        ]);
    }
}
