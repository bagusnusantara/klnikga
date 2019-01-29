<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
Use App\User;
use Carbon\Carbon;
use Alert;


class ListAccountController extends Controller
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

          // $list_pasien = Keluhan::whereDate('tanggal', '=', Carbon::today())->get();
           $list_account = \App\User::all();
           return view('admin.listaccount.index',compact('list_account'));
      }
      public function create()
      {
      }
      public function edit($id)
      {
        $list_account = User::find($id);
        return view('admin.editaccount.create',compact('list_account'));
      }

      public function update(Request $request, $id)
      {
           $this->validate($request,[

            ]);        
        
          $data = User::find($id);
          $data->name = $request->get('name');
          $data->email = $request->get('email');
          $data->nik = $request->get('nik');
          $data->tempat_lahir = $request->get('tempat_lahir');
          $data->tgl_lahir = $request->get('tgl_lahir');
          $data->jenis_kelamin = $request->get('jenis_kelamin');
          $data->alamat_tinggal = $request->get('alamat_tinggal');
          $data->alamat_asal = $request->get('alamat_asal');
          $data->no_telp = $request->get('no_telp');
          $data->pekerjaan = $request->get('pekerjaan');

          $data ->save();
           Alert::success('Akun berhasil diupdate :)', 'Berhasil update');
          return redirect()->back();
        
      }
      public function destroy(Request $request, $id)
      {
        $data = User::find($id);
        $data->delete();
        Alert::success('Akun berhasil dihapus :)', 'Berhasil Hapus');
        return redirect()->back();
      }
      
    }
