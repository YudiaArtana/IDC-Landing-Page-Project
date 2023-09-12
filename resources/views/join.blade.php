@extends('layouts.master')


@section('vite')
@vite(['resources/js/app.js', 'resources/js/join.js', 'resources/css/join.css'])
@endsection

@section('title', 'Form Pendaftaran')

@section('content')
    <div class="section-title d-flex justify-content-start align-items-center">
        <div class="container p-0">
            <div class="title">
                <h1>BERGABUNG BERSAMA KAMI</h1>
                <p>anjay mabar</p>
            </div>
        </div> 
    </div>
    <div class="container">
        
        <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="email" class="form-control form-control-lg box-form rounded-0" id="exampleInputEmail1" placeholder="Masukan Email" style="color: white">
            </div>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">NIM</label>
              <input type="text" class="form-control form-control-lg box-form rounded-0" id="exampleInputEmail1" placeholder="Masukan NIM" style="color: white">
            </div>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control form-control-lg box-form rounded-0" id="exampleInputEmail1" placeholder="Masukkan Nama Lengkap" style="color: white">
            </div>

            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Angkatan</label>
                <select class="form-select form-control-lg box-select rounded-0">
                    <option class="color-select" value="1">2019</option>
                    <option class="color-select" value="2">2020</option>
                    <option class="color-select" value="3">2021</option>
                    <option class="color-select" value="3">2022</option>
                    <option class="color-select" value="3">2023</option>
                </select>
            </div>

            <div class="mb-3 panas-anjing">
                <label for="exampleInputEmail1" class="form-label">Jurusan</label>
                <select class="form-select form-control-lg box-select rounded-0">
                    <option class="color-select" value="1">TI-MDI</option>
                    <option class="color-select" value="2">TI-KAB</option>
                    <option class="color-select" value="3">TI-PAR</option>
                    <option class="color-select" value="3">DKV</option>
                    <option class="color-select" value="3">BD</option>
                    <option class="color-select" value="1">SK</option>
                </select>
            </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                <input type="text" class="form-control form-control-lg box-form rounded-0" id="exampleInputEmail1" placeholder="Masukan Alamat" style="color: white">
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Alasan Memilih UKM IDC</label>
                <input type="text" class="form-control form-control-lg box-form rounded-0" id="exampleInputEmail1" placeholder="Masukkan Alasan" style="color: white">
              </div>

            <button type="submit" class="btn btn-danger px-5 mt-3">KIRIM</button>
          </form>

          <br><br>
    </div>
@endsection
