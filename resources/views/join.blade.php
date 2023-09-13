@extends('layouts.master')


@section('vite')
@vite(['resources/js/app.js', 'resources/js/join.js', 'resources/css/join.css'])
@endsection

@section('title', 'Form Pendaftaran')

@section('content')
<div class="section-title d-flex justify-content-start align-items-center px-3">
    <div class="container p-0">
        <div class="title-join">
            <div class="row pt-0 d-flex justify-content-start align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12 tulisan d-flex justify-content-start align-items-start">
                    <h4>INSTIKI DEVELOPER CLUB</h4>
                    <h1>Let's, Join with us!</h1>
                    <p class="title-divisi">Chase your dream of becoming a <span class="auto-type "
                            id="auto-type"></span></p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 gambar">
                    <img src="img/join/join.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container px-3">

    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control form-control-lg box-form rounded-0" id="exampleInputEmail1"
                placeholder="Enter your Email" style="color: white">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">NIM</label>
            <input type="text" class="form-control form-control-lg box-form rounded-0" id="exampleInputEmail1"
                placeholder="Enter your NIM" style="color: white">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control form-control-lg box-form rounded-0" id="exampleInputEmail1"
                placeholder="Enter your name" style="color: white">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Years</label>
            <select class="form-select form-control-lg box-select rounded-0">
                <option class="color-select" value="1">2019</option>
                <option class="color-select" value="2">2020</option>
                <option class="color-select" value="3">2021</option>
                <option class="color-select" value="4">2022</option>
                <option class="color-select" value="5">2023</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Major</label>
            <select class="form-select form-control-lg box-select rounded-0">
                <option class="color-select" value="1">TI-MDI</option>
                <option class="color-select" value="2">TI-KAB</option>
                <option class="color-select" value="3">TI-PAR</option>
                <option class="color-select" value="4">DKV</option>
                <option class="color-select" value="5">BD</option>
                <option class="color-select" value="6">SK</option>
            </select>
        </div>


        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Division</label>
            <select class="form-select form-control-lg box-select rounded-0">
                <option class="color-select" value="1">Web Development</option>
                <option class="color-select" value="2">Mobile Development</option>
                <option class="color-select" value="3">UI/UX</option>
                <option class="color-select" value="4">Data Science</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Address</label>
            <input type="text" class="form-control form-control-lg box-form rounded-0" id="exampleInputEmail1"
                placeholder="Enter your address" style="color: white">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">The reason you chose IDC</label>
            <input type="text" class="form-control form-control-lg box-form rounded-0" id="exampleInputEmail1"
                placeholder="Enter your reason" style="color: white">
        </div>

        <button type="submit" class="btn btn-danger px-5 mt-3">Submit</button>
    </form>

    <br><br>
</div>


<script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>


<script>
    var typed = new Typed('#auto-type', {
        strings: ['Web Development', 'Mobile Development', 'UI/UX', 'Data Science'],
        typeSpeed: 250,
        backSpeed: 100, // Kecepatan penghapusan teks
        loop: true
    });

</script>


@endsection
