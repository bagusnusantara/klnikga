<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Keluhan;
use App\TransMedisFisik;
use Carbon\Carbon;


class RekamMedisController extends Controller
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
           $list_pasien = Keluhan::all();
           return view('dokter.rekammedis.index',compact('list_pasien'));
      }
      public function create()
      {
      }
      public function edit($id_keluhan)
      {
        $list_pasien = Keluhan::find($id_keluhan);
        return view('dokter.pemeriksaan_fisik.create',compact('list_pasien'));
      }
      public function store(Request $request)
      {
        $this->validate($request,[
        ]);
        $periksa = TransMedisFisik::create($request->all());
        $periksa->save();
       return redirect()->back();
      }
    }
