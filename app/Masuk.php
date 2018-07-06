<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masuk extends Model
{
    //
    protected $table = 'surat-masuk';

    protected $fillable = array('no_surat', 'tgl_surat','pengirim','perihal','id_disposisi','keterangan','file');

	public function disposisi() {
		return $this->belongsTo('App\Disposisi', 'id_disposisi');
	}
}
