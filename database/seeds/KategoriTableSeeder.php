<?php

use App\Kategori;
use Illuminate\Database\Seeder;

class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kategori::create([
          'nama' => 'fiksi'
        ]);

        Kategori::create([
          'nama' => 'non fiksi'
        ]);
    }
}
