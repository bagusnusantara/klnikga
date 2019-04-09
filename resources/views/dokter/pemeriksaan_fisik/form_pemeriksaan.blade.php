<form method="POST" action="{{ route('ListPasien.store') }}" class="form-horizontal" enctype="multipart/form-data">
@csrf
<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('ID Pasien') }}</label>
    <div class="col-md-6">
        <input id="name" type="text" class="form-control" value="{{ $pasien->id }}" name="users_id" readonly="readonly">
    </div>
</div>
<div class="form-group row">
    <label for="users_id" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>
    <div class="col-md-6">
        <input id="users_id" type="text" class="form-control" value="{{ $pasien->name }}" readonly="readonly">
    </div>
</div>
<div class="form-group row">
    <label for="tgl_periksa" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Pemeriksaan') }}</label>
    <div class="col-md-6">
        <input id="datepicker1" type="text" name="tgl_periksa" class="dates form-control">
    </div>
</div>
<div class="form-group row">
  <label for="suami ke-" class="col-md-4 col-form-label text-md-right">{{ __('Suami ke') }}</label>
      <div class="col-md-6">
        <select class="default-select" name="suami_ke" id="default-select">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
       </select>
     </div>
</div>
<div class="form-group row">
  <label for="anak ke-" class="col-md-4 col-form-label text-md-right">{{ __('Anak ke') }}</label>
      <div class="col-md-6">
        <select class="default-select" name="anak_ke">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="1">5</option>
                <option value="2">6</option>
                <option value="3">7</option>
                <option value="4">8</option>
                <option value="1">9</option>
                <option value="2">10</option>
                <option value="3">11</option>
                <option value="4">12</option>
       </select>
     </div>
</div>

<div class="form-group row">
  <label for="suami ke-" class="col-md-4 col-form-label text-md-right">{{ __('Dokter Pemeriksa') }}</label>
      <!-- <div class="col-md-6">
        <select class="default-select" name="dokter" id="default-select">
                <option value="Muhammad Ardian.C.L., dr. Sp.OG(K), M. Kes">Muhammad Ardian.C.L., dr. Sp.OG(K), M. Kes</option>
                <option value="dr. Salmon Charles.P.T.Siahaan, Sp.OG">dr. Salmon Charles.P.T.Siahaan, Sp.OG</option>
                <option value="dr. Hartatiek Nila Karmila, Sp.OG">dr. Hartatiek Nila Karmila, Sp.OG</option>
                <option value="dr. Rizqi Rokhmadhoni Pikir, Sp.A">dr. Rizqi Rokhmadhoni Pikir, Sp.A</option>
                <option value="dr. Arif Tunjungseto, Sp.OG">dr. Arif Tunjungseto, Sp.OG</option>
                <option value="Lainnya">Lainnya</option>
       </select>
     </div> -->
     <div class="col-md-6">
     <div class="autocomplete">
         <input id="myInput" type="text" name="myCountry" placeholder="Pilih Dokter">
      </div>
    </div>
</div>


  <div class="form-group row">
      <label for="HPHT" class="col-md-4 col-form-label text-md-right">{{ __('Hari Pertama Haid terakhir') }}</label>
      <div class="col-md-6">
          <input id="datepicker1" type="text" name="hpht" class="dates form-control">
      </div>
  </div>

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Tekanan Darah Atas') }}<br><small> (mmHg)</small></label>
    <div class="col-md-6">
        <input id="tekanan_darah_atas" type="text" class="form-control{{ $errors->has('tekanan_darah_atas') ? ' is-invalid' : '' }}" name="tekanan_darah_atas" value="{{ old('tekanan_darah_atas') }}" required autofocus>
    </div>
</div>
<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Tekanan Darah Bawah') }}<br><small> (mmHg)</small></label>
    <div class="col-md-6">
        <input id="name" type="text" class="form-control{{ $errors->has('tekanan_darah_bawah') ? ' is-invalid' : '' }}" name="tekanan_darah_bawah" value="{{ old('tekanan_darah_bawah') }}" required autofocus>
    </div>
</div>
<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Tinggi Badan') }}<br><small> (cm)</small></label></label>
    <div class="col-md-6">
      <input id="name" type="text" class="form-control{{ $errors->has('tinggi_badan') ? ' is-invalid' : '' }}" name="tinggi_badan" value="{{ old('tinggi_badan') }}" required autofocus>
    </div>
</div>
<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Berat Badan') }}<br><small> (Kg)</small></label>
    <div class="col-md-6">
        <input id="name" type="text" class="form-control{{ $errors->has('berat_badan') ? ' is-invalid' : '' }}" name="berat_badan" value="{{ old('berat_badan') }}" required autofocus>
    </div>
</div>
<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Riwayat Penyakit') }}</label>
    <div class="col-md-6">
      <textarea name="riwayat_penyakit" class="form-control" rows="3" placeholder="" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"></textarea>
    </div>
</div>

  <div class="form-group row">
      <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Riwayat Alergi') }}</label>
      <div class="col-md-6">
        <textarea name="riwayat_alergi" class="form-control" rows="3" placeholder="" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"></textarea>
      </div>
  </div>
  <div class="form-group row">
      <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Subjective') }}</label>
      <div class="col-md-6">
        <textarea name="subjective" class="form-control" rows="3" placeholder="" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"></textarea>
      </div>
  </div>
  <div class="form-group row">
      <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Objective') }}</label>
      <div class="col-md-6">
        <textarea name="objective" class="form-control" rows="3" placeholder="" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"></textarea>
      </div>
  </div>
  <div class="form-group row">
      <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Diagnosa') }}</label>
      <div class="col-md-6">
        <textarea name="diagnosa" class="form-control" rows="3" placeholder="" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"></textarea>
      </div>
  </div>
  <div class="form-group row">
      <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Planning') }}</label>
      <div class="col-md-6">
        <textarea name="planning" class="form-control" rows="3" placeholder="" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"></textarea>
      </div>
  </div>
  <div class="form-group row">
    <label for="jenis_kehamilan" class="col-md-4 col-form-label text-md-right">{{ __('Jenis kehamilan') }}</label>
        <div class="col-md-6">
          <select class="default-select" name="jenis_kehamilan" id="default-select">
                  <option value="Janin Tunggal">Janin Tunggal</option>
                  <option value="Gemeli">Gemeli</option>
         </select>
       </div>
  </div>
  <div class="form-group row">
    <label for="kondisi_janin" class="col-md-4 col-form-label text-md-right">{{ __('Kondisi Janin') }}</label>
        <div class="col-md-6">
          <select class="default-select" name="kondisi_janin" id="default-select">
                  <option value="Hidup">Hidup</option>
                  <option value="Mati">Mati</option>
         </select>
       </div>
  </div>
  <div class="form-group row">
    <label for="letak_kepala" class="col-md-4 col-form-label text-md-right">{{ __('Letak Kepala') }}</label>
        <div class="col-md-6">
          <select class="default-select" name="letak_kepala" id="default-select">
                  <option value="Sungsang">Sungsang</option>
                  <option value="Lintang">Lintang</option>
                  <option value="Kepala">Kepala</option>
         </select>
       </div>
  </div>
  <div class="form-group row">
      <label for="usia_kehamilan" class="col-md-4 col-form-label text-md-right">{{ __('Usia Kehamilan') }}<br><small> (minggu)</small></label>
      <div class="col-md-6">
          <input id="usia_kehamilan" type="text" class="form-control{{ $errors->has('usia_kehamilan') ? ' is-invalid' : '' }}" name="usia_kehamilan" value="{{ old('usia_kehamilan') }}" required autofocus>
      </div>
  </div>
  <div class="form-group row">
    <label for="suami ke-" class="col-md-4 col-form-label text-md-right">{{ __('Cairan Ketuban') }}</label>
        <div class="col-md-6">
          <select class="default-select" name="cairan_ketuban" id="default-select">
                  <option value="Kurang">Kurang</option>
                  <option value="Cukup">Cukup</option>
                  <option value="Banyak">Banyak</option>
         </select>
       </div>
  </div>
  <div class="form-group row">
      <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Letak Placenta') }}</label>
      <div class="col-md-6">
          <input id="name" type="text" class="form-control{{ $errors->has('placenta_di') ? ' is-invalid' : '' }}" name="placenta_di" value="{{ old('placenta_di') }}" required autofocus>
      </div>
  </div>
  <div class="form-group row">
      <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Grade') }}</label>
      <div class="col-md-6">
          <input id="name" type="text" class="form-control{{ $errors->has('grade') ? ' is-invalid' : '' }}" name="grade" value="{{ old('grade') }}" required autofocus>
      </div>
  </div>
  <div class="form-group row">
    <label for="sex" class="col-md-4 col-form-label text-md-right">{{ __('Kelamin Bayi') }}</label>
        <div class="col-md-6">
          <select class="default-select" name="sex" id="default-select">
                  <option value="L">Laki-laki</option>
                  <option value="P">Perempuan</option>
         </select>
       </div>
  </div>
  <div class="form-group row">
      <label for="taksiran_persalinan" class="col-md-4 col-form-label text-md-right">{{ __('Taksiran Persalinan') }}</label>
      <div class="col-md-6">
          <input id="datepicker1" type="text" name="taksiran_persalinan" class="dates form-control">
      </div>
  </div>
  <div class="form-group row">
      <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Taksiran Berat Janin') }}<br><small> (gram)</small></label>
      <div class="col-md-6">
          <input id="name" type="text" class="form-control{{ $errors->has('taksiran_berat_janin') ? ' is-invalid' : '' }}" name="taksiran_berat_janin" value="{{ old('taksiran_berat_janin') }}" required autofocus>
      </div>
  </div>
  <div class="form-group row">
      <label for="tgl_lahir" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Pemeriksaan Selanjutnya') }}</label>
      <div class="col-md-6">
          <input id="datepicker1" type="text" name="tgl_periksa_selanjutnya" class="dates form-control">
      </div>
  </div>
  <div class="form-group row">
      <label for="tgl_lahir" class="col-md-4 col-form-label text-md-right">{{ __('Foto 1') }}</label>
      <div class="col-md-6">
          <input id="foto1" name="foto1" type="file" class="form-control">
      </div>
  </div>
  <div class="form-group row">
      <label for="tgl_lahir" class="col-md-4 col-form-label text-md-right">{{ __('Foto 2') }}</label>
      <div class="col-md-6">
          <input id="foto2" name="foto2" type="file" class="form-control">
      </div>
  </div>
  <div class="form-group row">
      <label for="tgl_lahir" class="col-md-4 col-form-label text-md-right">{{ __('Foto 3') }}</label>
      <div class="col-md-6">
          <input id="foto3" name="foto3" type="file" class="form-control">
      </div>
  </div>
  <div class="form-group row">
      <label for="tgl_lahir" class="col-md-4 col-form-label text-md-right">{{ __('Foto 4') }}</label>
      <div class="col-md-6">
          <input id="foto4" name="foto4" type="file" class="form-control">
      </div>
  </div>
  <div class="form-group row">
      <label for="keterangan" class="col-md-4 col-form-label text-md-right">{{ __('Keterangan') }}</label>
      <div class="col-md-6">
        <textarea name="keterangan" class="form-control" rows="3" placeholder="" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Keterangan'"></textarea>
      </div>
  </div>

  <style>
  * {
    box-sizing: border-box;
  }

  body {
    font: 16px Arial;
  }

  /*the container must be positioned relative:*/
  .autocomplete {
    position: relative;
    display: inline-block;
  }

  input {
    border: 1px solid transparent;
    background-color: #f1f1f1;
    padding: 10px;
    font-size: 16px;
  }

  input[type=text] {
    background-color: #f1f1f1;
    width: 100%;
  }

  input[type=submit] {
    background-color: DodgerBlue;
    color: #fff;
    cursor: pointer;
  }

  .autocomplete-items {
    position: absolute;
    border: 1px solid #d4d4d4;
    border-bottom: none;
    border-top: none;
    z-index: 99;
    /*position the autocomplete items to be the same width as the container:*/
    top: 100%;
    left: 0;
    right: 0;
  }

  .autocomplete-items div {
    padding: 10px;
    cursor: pointer;
    background-color: #fff;
    border-bottom: 1px solid #d4d4d4;
  }

  /*when hovering an item:*/
  .autocomplete-items div:hover {
    background-color: #e9e9e9;
  }

  /*when navigating through the items using the arrow keys:*/
  .autocomplete-active {
    background-color: DodgerBlue !important;
    color: #ffffff;
  }
  </style>

  <script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/
var countries = ["dr. Salmon Charles.P.T.Siahaan, Sp.OG","dr. Hartatiek Nila Karmila, Sp.OG","dr. Rizqi Rokhmadhoni Pikir, Sp.A","dr. Arif Tunjungseto, Sp.OG"];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), countries);
</script>
