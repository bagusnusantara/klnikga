<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Keluhan;
use App\TransPudji;
use App\TransMedisFisik;
use App\TransPeriksaAwal;
Use App\User;
use DB;

use Carbon\Carbon;


class ListPasienController extends Controller
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
     public function index()
      {
            $pasien_list = User::where('roles','pasien')->get();
            return view('dokter.listpasien.index',compact('pasien_list'));
      }
      public function show($id)
      {
        $pasien = User::find($id);
        //$tran = TransMedisFisik::find($id);
        $trans_medis_fisik = DB::table('trans_medis_fisik')
        ->join('users', 'trans_medis_fisik.users_id', '=', 'users.id')
        ->select('users.name', 'trans_medis_fisik.*')
        ->orderBy('tgl_periksa','desc')
        ->where('users_id', $pasien->id )
        ->get();
        //$trans_medis_fisik = TransMedisFisik::where('users_id', $pasien->id )->orderBy('tgl_periksa','desc')->get();
        return view('dokter.listpasien.show',compact('pasien','trans_medis_fisik'));
      }

      // public function edit($id)
      // {
      //   $list_pasien = TransMedisFisik::find($id);
      //   return view('dokter.pemeriksaan_fisik.create',compact('list_pasien','tabel_pr','trans_medis_fisik'));
      // }

      // public function edit($id)
      //   {
      //     $trans = TransMedisFisik::find($id);
      //     return view('MDPraSarana.edit')->with('siswa',$siswa);
      //   }
      // public function update(Request $request, $nisn)
      //  {
      //    //save data
      //    $siswa = md_siswa::findOrFail($request->nisn);
      //
      //    $siswa->update($request->all());
      //
      //    return back();
      //  }

      public function store(Request $request)
        {
          $this->validate($request,[
          ]);
          $periksa = new TransMedisFisik();
          $periksa->users_id = $request->users_id;
          $periksa->riwayat_penyakit = $request->riwayat_penyakit;
          $periksa->riwayat_alergi = $request->riwayat_alergi;
          $periksa->tekanan_darah_atas = $request->tekanan_darah_atas;
          $periksa->tekanan_darah_bawah = $request->tekanan_darah_bawah;
          $periksa->berat_badan = $request->berat_badan;
          $periksa->tinggi_badan = $request->tinggi_badan;
          $periksa->subjective = $request->subjective;
          $periksa->objective = $request->objective;
          $periksa->diagnosa = $request->diagnosa;
          $periksa->planning = $request->planning;
          $periksa->dokter = $request->dokter;
          $periksa->jenis_kehamilan = $request->jenis_kehamilan;
          $periksa->kondisi_janin = $request->kondisi_janin;
          $periksa->letak_kepala = $request->letak_kepala;
          $periksa->cairan_ketuban = $request->cairan_ketuban;
          $periksa->placenta_di = $request->placenta_di;
          $periksa->grade = $request->grade;
          $periksa->sex = $request->sex;
          $periksa->taksiran_berat_janin = $request->taksiran_berat_janin;
          $periksa->suami_ke = $request->suami_ke;
          $periksa->anak_ke = $request->anak_ke;
          $periksa->tgl_periksa_selanjutnya = Carbon::parse($request->tgl_periksa_selanjutnya)->format('Y-m-d');
          $periksa->taksiran_persalinan = Carbon::parse($request->taksiran_persalinan)->format('Y-m-d');
          $periksa->tgl_periksa = Carbon::parse($request->tgl_periksa)->format('Y-m-d');
          $periksa->hpht = Carbon::parse($request->hpht)->format('Y-m-d');
          $periksa->usia_kehamilan = $request->usia_kehamilan;
          $periksa->keterangan = $request->keterangan;
          if($request->file('foto1')){
          $file = $request->file('foto1')->store('foto', 'public');
          $periksa->foto1 = $file;
          }
          if($request->file('foto2')){
          $file = $request->file('foto2')->store('foto', 'public');
          $periksa->foto2 = $file;
          }
          if($request->file('foto3')){
          $file = $request->file('foto3')->store('foto', 'public');
          $periksa->foto3 = $file;
          }
          if($request->file('foto4')){
          $file = $request->file('foto4')->store('foto', 'public');
          $periksa->foto4 = $file;
          }
          $periksa->save();
          // $periksa = TransMedisFisik::create($request->all());
          // $periksa->save();
          return redirect()->back();
        }

        public function update(Request $request)
      {
          //save data
          $trans = TransMedisFisik::findOrFail($request->id);

          $trans->update($request->all());

          return back();
      }

      public function destroy($id){
        $del_user = TransMedisFisik::find($id);
        $del_user->delete();
        return redirect()->back();
      }
    }
