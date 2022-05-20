<!-- menghubungkan dengan view template utama -->
@extends('utama')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Home')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<p>ini adalah halaman home</p>
<p>selamat datang!</p>

@endsection