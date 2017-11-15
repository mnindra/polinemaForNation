<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Petugas extends Authenticatable
{
  protected $table = 'petugas';
  protected $primaryKey = 'id_petugas';
  protected $fillable = ['nama', 'jenis_kelamin', 'alamat', 'email', 'telp', 'username', 'password'];

  public function setAttribute($key, $value)
  {
    $isRememberTokenAttribute = $key == $this->getRememberTokenName();
    if (!$isRememberTokenAttribute)
    {
      parent::setAttribute($key, $value);
    }
  }
}
