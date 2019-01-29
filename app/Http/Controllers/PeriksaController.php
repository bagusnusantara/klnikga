<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\User;
use App\TransPudji;
use App\TransPeriksaAwal;
use App\TransMedisFisik;
use App\FormAwal;
use Session;
use DB;


class PeriksaController extends Controller
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
      {   $auth = \Auth::user()['id'];
          $trans_medis_fisik_list = DB::table('trans_medis_fisik')
          ->join('users', 'trans_medis_fisik.users_id', '=', 'users.id')
          ->select('users.name','users.no_telp', 'trans_medis_fisik.*')
          ->orderBy('tgl_periksa','desc')
          ->where('users_id', $auth)
          ->get();
           return view('pasien.rekammedis.index',compact('trans_medis_fisik_list'));
      }

      public function show($id)
      {
        $trans_medis_fisik = TransMedisFisik::find($id);
        $tabel_pr = TransPudji::where('trans_medis_fisik_id', $trans_medis_fisik->id )->get();
        return view('pasien.rekammedis.show',compact('tabel_pr','trans_medis_fisik'));
      }

    }
