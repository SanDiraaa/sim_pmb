@include('include.header')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<section class="hero">
    <div class="hero-overlay"></div>
    <img src="{{ asset('img/campus.jpg') }}" alt="Foto Kampus" class="hero-img">
    <div class="hero-content">
        <h1>Wujudkan Impianmu<br>Bersama Kami</h1>
        <a href="{{ url('login') }}" class="btn">Login</a>
        <a href="{{ url('register') }}" class="btn">Daftar Sekarang</a>
    </div>
</section>

@include('include.footer')
