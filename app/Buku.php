<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';
    protected $primaryKey = 'id_buku';
    public $incrementing = false;
    protected $guarded = ['created_at', 'updated_at'];

    public function kategori() {
      return $this->belongsTo('App\Kategori', 'id_kategori', 'id_kategori');
    }
}
