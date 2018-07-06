<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instansi extends Model
{
    //
    protected $table = 'instansi';

    protected $fillable = array('nama','kab_kota','telepon','email','alamat','ketua');

}
