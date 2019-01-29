<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormAwal extends Model
{
  protected $table = 'form_awal';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'terlalu_muda_hamil','terlalu_tua_hamil','terlalu_lambat_hamil','terlalu_lama_hamil_lagi','terlalu_cepat_hamil_lagi','terlalu_banyak_anak',
      'terlalu_tua_umur','terlalu_pendek','pernah_gagal_kehamilan','terikan_tang','uri_dirogoh','diberi_infus','pernah_operasi_sesar','kurang_darah','malaria',
      'tbc','payah','diabetes','penyakit_menular_seksual','bengkak_pada_muka','hamil_kembar',
      'hydramnion','bayi_mati_dalam_kandungan','kehamilan_lebih_bulan','letak_sungsang','letak_lintang','perdarahan','preeklampsia',
      'users_id','id','trans_keluhan_id',
    ];

}
