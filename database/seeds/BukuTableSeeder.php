<?php

use App\Buku;
use Illuminate\Database\Seeder;

class BukuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for($i = 0; $i < 10; $i++) {
        Buku::create([
          'id_buku' => 'B' . $i,
          'id_kategori' => 1,
          'isbn' => rand(100000,999999),
          'judul' => str_random(),
          'pengarang' => 'm. nindra zaka',
          'penerbit' => 'm. nindra zaka',
          'file' => 'tes',
          'sampul' => 'tes',
          'deskripsi' => 'tes',
          'jumlah_halaman' => 100,
          'tahun_terbit' => 2017
        ]);
      }
    }
}
