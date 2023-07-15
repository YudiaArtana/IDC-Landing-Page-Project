@extends('layouts.master')
@section('title', 'HOME')


@section('content')
<div id="main-hero">
  <div class="hero-text">
    <h1>TEMUKAN BERBAGAI TEMPAT MENARIK</h1>
    <p>Selamat datang, dapatkan kemudahan dan keuntungan menemukan berbagai hal di seputaran Desa Sangeh.</p>
    <form action="" class="form-control">
      <input class="form-input" type="text" placeholder="Cari tentang Berita Wisata, Berita Terkini, Kuli...">
      <div class="form-btn">
        <button><i class="fas fa-search"></i></button>
      </div>
    </form>
  </div>
</div>
@endsection