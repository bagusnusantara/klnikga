
<table class="table table-striped table-bordered table-hover dataTables-example" >
<tr>
<td align="left">Tekanan Darah Atas</td>
<td>
      {{ $trans_medis_fisik->tekanan_darah_atas }}
</td>
</tr>
<tr>
<td align="left">Tekanan Darah Bawah</td>
<td>
      {{ $trans_medis_fisik->tekanan_darah_bawah }}
</td>
<tr>
<td align="left">Tinggi Badan</td>
<td>
  @foreach($trans_medis_fisik as $trans)
      {{ $trans->tinggi_badan }}
  @endforeach
</td>
</tr>
<tr>
<td align="left">Berat Badan</td>
<td>
  @foreach($trans_medis_fisik as $trans)
      {{ $trans->berat_badan }}
  @endforeach
</td>
</tr>
</tr>
<tr>
<td align="left">Riwayat Penyakit</td>
<td>
  @foreach($trans_medis_fisik as $trans)
      {{ $trans->riwayat_penyakit }}
  @endforeach
</td>
</tr>
<tr>
<td align="left">Riwayat Alergi</td>
<td>
  @foreach($trans_medis_fisik as $trans)
      {{ $trans->riwayat_alergi }}
  @endforeach
</td>
</tr>
<tr>
<td align="left">Subjective</td>
<td>
  @foreach($trans_medis_fisik as $trans)
      {{ $trans->subjective }}
  @endforeach
</td>
</tr>
<tr>
<td align="left">Objective</td>
<td>
  @foreach($trans_medis_fisik as $trans)
      {{ $trans->objective }}
  @endforeach
</td>
</tr>
<tr>
<td align="left">Diagnosa</td>
<td>
  @foreach($trans_medis_fisik as $trans)
      {{ $trans->diagnosa }}
  @endforeach
</td>
</tr>
<tr>
<td align="left">Planning</td>
<td>
  @foreach($trans_medis_fisik as $trans)
      {{ $trans->planning }}
  @endforeach
</td>
</tr>
<tr>
<td align="left">Tanggal Pemeriksaan Selanjutnya</td>
<td>
  @foreach($trans_medis_fisik as $trans)
      {{ $trans->tgl_periksa_selanjutnya }}
  @endforeach
</td>
</tr>

<tr>
<td align="left">Foto 1</td>
<td>
  @foreach($trans_medis_fisik as $trans)
      <img src="{{asset('storage/'.$trans->foto1)}}" width="70px"/>
  @endforeach
</td>
</tr>
<tr>
<td align="left">Foto 2</td>
<td>
  @foreach($trans_medis_fisik as $trans)
      <img src="{{asset('storage/'.$trans->foto2)}}" width="70px"/>
  @endforeach
</td>
</tr>
<tr>
<td align="left">Foto 3</td>
<td>
  @foreach($trans_medis_fisik as $trans)
      <img src="{{asset('storage/'.$trans->foto3)}}" width="70px"/>
  @endforeach
</td>
</tr>
<tr>
<td align="left">Foto 4</td>
<td>
  @foreach($trans_medis_fisik as $trans)
      <img src="{{asset('storage/'.$trans->foto4)}}" width="70px"/>
  @endforeach
</td>
</tr>
</table>
