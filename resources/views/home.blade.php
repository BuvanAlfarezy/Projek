@extends('layouts.app')
@section('title', 'Beranda')
@section('content')
    <h1>Selamat Datang Di laravel</h1>
    <p>Ini adalah Halaman Beranda</p>
    <a href="{{ route('products.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded">
    Lihat Daftar Produk
    </a>
@endsection