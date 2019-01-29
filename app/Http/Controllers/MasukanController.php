<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Masukan;
use Carbon\Carbon;
use Alert;


class MasukanController extends Controller
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
           return view('pasien.masukan.index');
      }

      public function store(Request $request)
      {
        $this->validate($request,[
        ]);
        //$id_user = Session::get('id');
        $id_user = \Auth::user()->id;
        $tanggal = Carbon::now()->toDateTimeString();
        $masukan = new Masukan();
        $masukan->deskripsi = $request->deskripsi;
        $masukan->id_user = $id_user;
        $masukan->tanggal = $tanggal;
        $masukan->save();
        Alert::success('Kritik dan Saran Anda sudah kami terima :)','Terima Kasih');
        return redirect()->route('Masukan.index');
      }
    }
