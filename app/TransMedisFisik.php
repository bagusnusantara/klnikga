<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransMedisFisik extends Model
{
  protected $table = 'trans_medis_fisik';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'penggunaan_kontrasepsi','riwayat_penyakit','riwayat_alergi','tekanan_darah_atas','tekanan_darah_bawah','berat_badan',
      'umur_kehamilan','tinggi_fundus','letak_janin','denyut_jantung_janin','hpht','htp','lingkar_atas','tinggi_badan','KEK',
      'hamil_ke','jumlah_persalinan','jumlah_keguguran','jumlah_anak_hidup','jumlah_lahir_mati','jumlah_anak_lahir_kurang_bulan',
      'jarak_kehamilan','status_imunisasi_tt','penolong_persalinan','cara_persalinan','tgl_pemeriksaan','subjective','objective',
      'diagnosa','planning',
    ];
    public function user()
      {
        return $this->belongsTo('App\User');
      }
}
