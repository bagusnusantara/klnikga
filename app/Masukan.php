<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masukan extends Model
{
  protected $table = 'trans_masukan';
  protected $primaryKey = 'id_masukan';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'deskripsi',

    ];
    public function user()
      {
        return $this->belongsTo('App\User');
      }
}
