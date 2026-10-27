@extends('layouts.main')

@section('content')
<div class="card shadow-sm p-4">
    <h2 class="mb-3 text-success">Tentang Sistem AgroClima Garut</h2>
    <p>AgroClima Garut dirancang untuk membantu Kelompok Tani Makmur dalam mengoptimalkan pemantauan kondisi lingkungan pertanian melalui simulasi prediksi mikroklimat tanaman.</p>
    
    <h4 class="mt-4">Tujuan Sistem</h4>
    <p>Membantu petani mengantisipasi perubahan kondisi lingkungan di sekitar tanaman secara akurat dan konsisten.</p>

    <h4 class="mt-4">Lokasi Pemantauan</h4>
    <ul>
        <li>Kecamatan Garut Kota</li>
        <li>Kecamatan Tarogong Kaler</li>
        <li>Kecamatan Samarang</li>
    </ul>

    <h4 class="mt-4">Parameter Mikroklimat yang Dicatat</h4>
    <ul>
        <li>Suhu Udara (&deg;C)</li>
        <li>Kelembapan Udara (%)</li>
        <li>Kelembapan Tanah (%)</li>
    </ul>

    <h4 class="mt-4">Model Prediksi</h4>
    <p>Model yang digunakan adalah <strong>Long Short-Term Memory (LSTM)</strong> berbasis Deep Learning untuk data deret waktu (time series).</p>
</div>
@endsection