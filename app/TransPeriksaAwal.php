<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class TransPeriksaAwal extends Model
{
  protected $table = 'form_awal';
  protected $primarykey = 'id';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'suami_ke','anak_ke','hpht','taksiran_persalinan','status',

    ];
       public function user()
      {
        return $this->belongsTo('App\User','id');
      }


}
