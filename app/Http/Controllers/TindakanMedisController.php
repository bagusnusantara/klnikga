<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Khill\Lavacharts\Lavacharts;
use App\User;
use App\TransPudji;
use App\TransMedisFisik;
use App\TransPeriksaAwal;
use Alert;


class TindakanMedisController extends Controller
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

            $trans_fisik= TransMedisFisik::all();
            return view('dokter.tindakanmedis.index',compact('trans_fisik'));
      }
    }
