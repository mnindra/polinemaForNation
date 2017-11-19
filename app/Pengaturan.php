<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaturan extends Model
{
    protected $table = "pengaturan";
    protected $primaryKey = "id_pengaturan";
    protected $fillable = ["heading", "email", "telp", "aturan_pemesanan"];
}
