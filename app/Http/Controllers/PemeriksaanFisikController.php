<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Keluhan;
use Carbon\Carbon;


class PemeriksaanFisikController extends Controller
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

      public function create($id_keluhan){
        $keluhan = Post::find($id_keluhan);
        return view(PemeriksaanFisik.create);
      }
    }
