<?php

use Illuminate\Database\Seeder;

class PengaturanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \App\Pengaturan::create([
        'heading' => 'Tempat Beli Buku Murah',
        'email' => 'polinemaForNation@polinema.ac.id',
        'telp' => '085463728473',
        'aturan_pemesanan' => 'Silahkan cantumkan id buku yang bersangkutan'
      ]);
    }
}
