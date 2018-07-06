<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disposisi extends Model
{
    //
    protected $table = 'disposisi';

    protected $fillable = array('keterangan');

    public function masuk() {
		return $this->hasMany('App\Masuk', 'id_disposisi');}
}

