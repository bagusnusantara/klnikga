<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Keluhan;
use Carbon\Carbon;
use App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\User;
use App\TransPudji;
use Session;


class TransPudjiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
      public function index(){
        return redirect()->back();
      }
      public function store(Request $request)
      {
        $this->validate($request,[
        ]);
        //$id_user = Session::get('id');
        //$trans_pudji = TransPudji::create($request->all());
        $trans_pudji = new TransPudji();
        $trans_pudji->trans_medis_fisik_id = $request->trans_medis_fisik_id;
        $trans_pudji->terlalu_muda_hamil = $request->terlalu_muda_hamil;
        $trans_pudji->terlalu_tua_hamil = $request->terlalu_tua_hamil;
        $trans_pudji->terlalu_lambat_hamil = $request->terlalu_lambat_hamil;
        $trans_pudji->terlalu_lama_hamil_lagi = $request->terlalu_lama_hamil_lagi;
        $trans_pudji->terlalu_cepat_hamil_lagi = $request->terlalu_cepat_hamil_lagi;
        $trans_pudji->terlalu_banyak_anak = $request->terlalu_banyak_anak;
        $trans_pudji->terlalu_tua_umur = $request->terlalu_tua_umur;
        $trans_pudji->terlalu_pendek = $request->terlalu_pendek;
        $trans_pudji->pernah_gagal_kehamilan = $request->pernah_gagal_kehamilan;
        $trans_pudji->terikan_tang = $request->terikan_tang;
        $trans_pudji->uri_dirogoh = $request->uri_dirogoh;
        $trans_pudji->diberi_infus = $request->diberi_infus;
        $trans_pudji->pernah_operasi_sesar = $request->pernah_operasi_sesar;
        $trans_pudji->kurang_darah = $request->kurang_darah;
        $trans_pudji->malaria = $request->malaria;
        $trans_pudji->tbc = $request->tbc;
        $trans_pudji->payah = $request->payah;
        $trans_pudji->diabetes = $request->diabetes;
        $trans_pudji->penyakit_menular_seksual= $request->penyakit_menular_seksual;
        $trans_pudji->bengkak_pada_muka= $request->bengkak_pada_muka;
        $trans_pudji->hamil_kembar = $request->hamil_kembar;
        $trans_pudji->hydramnion = $request->hydramnion;
        $trans_pudji->bayi_mati_dalam_kandungan = $request->bayi_mati_dalam_kandungan;
        $trans_pudji->kehamilan_lebih_bulan = $request->kehamilan_lebih_bulan;
        $trans_pudji->letak_sungsang = $request->letak_sungsang;
        $trans_pudji->letak_lintang = $request->letak_lintang;
        $trans_pudji->perdarahan = $request->perdarahan;
        $trans_pudji->kehamilan_lebih_bulan = $request->kehamilan_lebih_bulan;
        $trans_pudji->preeklampsia = $request->preeklampsia;

        $trans_pudji->skor =
        2+$trans_pudji->terlalu_muda_hamil+
        $trans_pudji->terlalu_tua_hamil
        +$trans_pudji->terlalu_lambat_hamil
        +$trans_pudji->terlalu_lama_hamil_lagi
        +$trans_pudji->terlalu_cepat_hamil_lagi
        +$trans_pudji->terlalu_banyak_anak
        +$trans_pudji->terlalu_tua_umur
        +$trans_pudji->terlalu_pendek
        +$trans_pudji->pernah_gagal_kehamilan
        +$trans_pudji->terikan_tang
        +$trans_pudji->uri_dirogoh
        +$trans_pudji->diberi_infus
        +$trans_pudji->pernah_operasi_sesar
        +$trans_pudji->kurang_darah
        +$trans_pudji->malaria
        +$trans_pudji->tbc
        +$trans_pudji->payah
        +$trans_pudji->diabetes
        +$trans_pudji->penyakit_menular_seksual
        +$trans_pudji->bengkak_pada_muka
        +$trans_pudji->hamil_kembar
        +$trans_pudji->hydramnion
        +$trans_pudji->bayi_mati_dalam_kandungan
        +$trans_pudji->kehamilan_lebih_bulan
        +$trans_pudji->letak_sungsang
        +$trans_pudji->letak_lintang
        +$trans_pudji->perdarahan
        +$trans_pudji->preeklampsia;
        $trans_pudji->save();

        return redirect()->back();
      }

    }
