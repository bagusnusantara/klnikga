<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keluhan extends Model
{
	protected $table = 'trans_keluhan';
	protected $primaryKey = 'id_keluhan';
	public $timestamps = false;
	public $incrementing = false;

	protected $fillable = [
		'id_keluhan',
		'id_user',
		'deskripsi',
		'tanggal',
	];

	public function getKeluhanID() {
		return $this->id_keluhan;
	}

}
