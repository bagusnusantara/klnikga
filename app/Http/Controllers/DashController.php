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
use DB;


class DashController extends Controller
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
        $lava = new Lavacharts; // See note below for Laravel

              $skor = $lava->DataTable();

              $skor->addDateColumn('Tanggal Periksa')
             ->addNumberColumn('Skor')
             ->addRow(['2018-10-1',  67])
             ->addRow(['2018-11-2',  68])
             ->addRow(['2019-1-3',  68])
             ->addRow(['2019-2-4',  72])
             ->addRow(['2019-3-5',  61])
             ->addRow(['2019-4-6',  70])
             ->addRow(['2019-5-7',  74]);


            $lava->LineChart('Temps', $skor, [
                'title' => 'Skor Pemeriksaan Poedji Rochjati'
            ]);
            $user = User::all()->where('id',\Auth::user()->id);
            $periksa_next = TransMedisFisik::where('users_id',\Auth::user()->id)
            ->orderBy('tgl_periksa_selanjutnya', 'desc')
            ->limit(1)
            ->get();
            $taksir = TransPeriksaAwal::where('users_id',\Auth::user()->id)
            ->orderBy('id', 'desc')
            ->limit(1)
            ->get();;
            // $pudji = TransPudji::where('users_id',\Auth::user()->id)
            // ->orderBy('id','desc')
            // ->get();
            $pudji = TransPudji::all();
            Alert::success('Selamat Datang di Sistem Informasi Klinik Graha Amani', 'Selamat Datang');
            return view('dashboard',compact('lava','user','periksa_next','taksir','pudji'));
      }
    }
