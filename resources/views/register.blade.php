@extends('layouts.sky_layout')

@push('library_css')
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
@endpush

@push('library_js')
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
@endpush

@section('content')
<form method="POST" action="{{ route('register_submit') }}" enctype="multipart/form-data" class="sky-form">
    @csrf
    <header>Registrasi Beasiswa Pelatihan Bahasa Jepang untuk jadi Caregiver di Jepang dengan Gaji Besar <br> <h4 class="noted">Formulir calon peserta magang Angkatan 3 LPK WIWITAN BARU SUKABUMI khusus SMK/D3/D4/S1 KEPERAWATAN dan KEBIDANAN</h4></header>

    <fieldset>

        @if ($errors->any())
            <section>
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            </section>
        @endif

        @if(Session::has('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
        @endif

        <section>
            <label class="label">Nama lengkap <span class="requirement">*</span></label>
            <label class="input">
                <input type="text" name="nama" id="nama" autocomplete="off" value="{{ old('nama') }}">
            </label>
        </section>

        <section>
            <label class="label">Tempat lahir <span class="requirement">*</span></label>
            <label class="input">
                <input type="text" name="tempat_lahir" id="tempat_lahir" autocomplete="off" value="{{ old('tempat_lahir') }}">
            </label>
        </section>

        <section>
            <label class="label">Tanggal lahir <span class="requirement">*</span></label>
            <label class="input">
                <input type="text" name="tanggal_lahir" id="tanggal_lahir" autocomplete="off" value="{{ old('tanggal_lahir') }}">
            </label>
        </section>

        <section>
            <label class="label">Golongan darah</label>
            <div class="row">
                <div class="col col-4">
                    <label class="radio"><input type="radio" name="golongan_darah" value="O" @if(old('golongan_darah') == 'O') checked @endif><i></i>O</label>
                    <label class="radio"><input type="radio" name="golongan_darah" value="A" @if(old('golongan_darah') == 'A') checked @endif><i></i>A</label>
                    <label class="radio"><input type="radio" name="golongan_darah" value="B" @if(old('golongan_darah') == 'B') checked @endif><i></i>B</label>
                    <label class="radio"><input type="radio" name="golongan_darah" value="AB" @if(old('golongan_darah') == 'AB') checked @endif><i></i>AB</label>
                </div>
            </div>
        </section>

        <section>
            <label class="label">Alamat lengkap <span class="requirement">*</span></label>
            <label class="textarea">
                <textarea rows="3" id="alamat" name="alamat">{{ old('alamat') }}</textarea>
            </label>
            <div class="note"><strong>Note:</strong> masukan alamat anda dengan lengkap.</div>
        </section>

        <section>
            <label class="label">Jurusan pendidikan <span class="requirement">*</span></label>
            <div class="row">
                <div class="col col-4">
                    <label class="radio"><input type="radio" name="jurusan_pendidikan" value="Perawat" @if(old('jurusan_pendidikan') == 'Perawat') checked @endif><i></i>Perawat</label>
                    <label class="radio"><input type="radio" name="jurusan_pendidikan" value="Bidan" @if(old('jurusan_pendidikan') == 'Bidan') checked @endif><i></i>Bidan</label>
                </div>
            </div>
        </section>

        <section>
            <label class="label">Pendidikan terakhir Keperawatan/Kebidanan <span class="requirement">*</span></label>
            <div class="row">
                <div class="col col-4">
                    <label class="radio"><input type="radio" name="pendidikan_terakhir" value="SMA/SMK" @if(old('pendidikan_terakhir') == 'SMA/SMK') checked @endif><i></i>SMA/SMK</label>
                    <label class="radio"><input type="radio" name="pendidikan_terakhir" value="D3/D4" @if(old('pendidikan_terakhir') == 'D3/D4') checked @endif><i></i>D3/D4</label>
                    <label class="radio"><input type="radio" name="pendidikan_terakhir" value="S1" @if(old('pendidikan_terakhir') == 'S1') checked @endif><i></i>S1</label>
                </div>
            </div>
        </section>

        <section>
            <label class="label">Nomor yang dapat dihubungi <span class="requirement">*</span></label>
            <label class="input">
                <input type="number" name="nomor_telp" id="nomor_telp" autocomplete="off" value="{{ old('nomor_telp') }}">
            </label>
        </section>

        <section>
            <label class="label">Alamat email aktif <span class="requirement">*</span></label>
            <label class="input">
                <input type="text" name="email" id="email" autocomplete="off" value="{{ old('email') }}">
            </label>
        </section>

        <section>
            <label class="label">Apakah anda bersedia mengikuti Pelatihan selama 6 bulan? <span class="requirement">*</span></label>
            <div class="row">
                <div class="col col-4">
                    <label class="radio"><input type="radio" name="konfirmasi" value="Ya" @if(old('konfirmasi') == 'Ya') checked @endif><i></i>Ya</label>
                    <label class="radio"><input type="radio" name="konfirmasi" value="Tidak" @if(old('konfirmasi') == 'Tidak') checked @endif><i></i>Tidak</label>
                </div>
            </div>
        </section>

        <section>
            <label class="label">Apakah anda membutuhkan bantuan secara finansial untuk mengikuti pelatihan? <span class="requirement">*</span></label>
            <div class="row">
                <div class="col col-4">
                    <label class="radio"><input type="radio" name="bantuan_finansial" value="Ya" @if(old('bantuan_finansial') == 'Ya') checked @endif><i></i>Ya</label>
                    <label class="radio"><input type="radio" name="bantuan_finansial" value="Tidak" @if(old('bantuan_finansial') == 'Tidak') checked @endif><i></i>Tidak</label>
                </div>
            </div>
        </section>

        <section>
            <p style="font-size: 14px; font-weight: bold;"><span class="requirement">*</span> Pendaftar akan dihubungi oleh admin untuk proses lebih lanjut</p>
        </section>

        {{-- <section>
            <label class="label">Unggah scan Raport/Ijazah <span class="requirement">*</span></label>
            <label for="file" class="input input-file">
                <div class="button"><input type="file" id="scan_ijazah" name="scan_ijazah" onchange="this.parentNode.nextSibling.value = this.value">Browse</div><input type="text" readonly>
            </label>
            <div class="note"><strong>Note:</strong> Kumpulkan berkas di 1 (satu) file PDF dengan ukuran tidak lebih dari 20 MB.</div>
        </section>

        <section>
            <label class="label">Tulis essay min. 700 kata di Ms. Word dengan font Calibri ukuran judul essay 14 (bold) dan isi essay 11 yang memuat tentang : <span class="requirement">*</span><br>1. Perkenalan diri (Latar belakang, Kelebihan dan kekurangan, Cita-cita) <br>2. Alasan kenapa ingin ke Jepang <br>3. Alasan kenapa anda harus diterima dalam Program Pemagangan ini</label>
            <label for="file" class="input input-file">
                <div class="button"><input type="file" id="essay" name="essay" onchange="this.parentNode.nextSibling.value = this.value">Browse</div><input type="text" readonly>
            </label>
            <div class="note"><strong>Note:</strong> Unggah essai dalam format Microsoft Word.</div>
        </section> --}}
    </fieldset>

    <footer>
        {{-- <span id="info" style="font-size: 14px;">Call Centre | Whatsapp Centre Wiwitan Baru : <a href="https://wa.me/6281322892158?text=Hai%2C%20saya%20ingin%20mengetahui%20tetang%20wiwitan%20baru" target="_blank">081322892158</a></span> --}}
        <span id="info" style="font-size: 14px;"></span>
        <span id="info" style="font-size: 14px;">Call Centre | Whatsapp Centre Wiwitan Baru : 081322892158</span>
        <input type="submit" value="Submit" class="button">
        <br><br>

        {{-- <div id="photo" style="text-align: left">
            <a href="https://www.instagram.com/wiwitanbaru/" target="_blank" style="text-decoration: none; color: #666;">
                <img style="vertical-align:middle" src="{{ asset('template/img/png-instagram-icon-0.png') }}" width="60" height="60" alt="">
                <span style="vertical-align:middle">@wiwitanbaru</span>
            </a>
        </div> --}}
        <div id="photo" style="text-align: left">
            <img style="vertical-align:middle" src="{{ asset('template/img/png-instagram-icon-0.png') }}" width="60" height="60" alt="">
            <span style="vertical-align:middle">@wiwitanbaru</span>
        </div>
    </footer>


</form>
@endsection

@push('page_css')
<style>
.noted {
    font-size: 14px;
    font-weight: 100;
}
.requirement {
    font-weight: bold;
    color: red;
}
</style>
@endpush

@push('page_js')
<script>
$(document).ready(function () {
    $("#tanggal_lahir").datepicker({
        dateFormat: 'dd-mm-yy',
        changeMonth: true,
        changeYear: true,
        showButtonPanel: true,
        yearRange: '1950:2021'
    });
})
</script>
@endpush