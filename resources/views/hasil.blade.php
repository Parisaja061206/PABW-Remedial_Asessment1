@extends('layouts.main')

@section('content')
<div class="card shadow-sm p-4 col-md-8 mx-auto">
    <h3 class="mb-4 text-center text-success">Hasil Prediksi Mikroklimat</h3>

    <table class="table table-bordered">
        <tr>
            <th>Lokasi Lahan</th>
            <td>{{ $data->lokasi }}</td>
        </tr>
        <tr>
            <th>Nama Tanaman</th>
            <td>{{ $data->nama_tanaman }}</td>
        </tr>
        <tr>
            <th>Prediksi Suhu Udara</th>
            <td>{{ $data->suhu_udara }} &deg;C</td>
        </tr>
        <tr>
            <th>Prediksi Kelembapan Udara</th>
            <td>{{ $data->kelembapan_udara }} %</td>
        </tr>
        <tr>
            <th>Prediksi Kelembapan Tanah</th>
            <td>{{ $data->kelembapan_tanah }} %</td>
        </tr>
        <tr>
            <th>Status Mikroklimat</th>
            <td>
                @if($data->status_mikroklimat == 'Kering')
                    <span class="badge bg-danger fs-6">Kering</span>
                @elseif($data->status_mikroklimat == 'Optimal')
                    <span class="badge bg-success fs-6">Optimal</span>
                @else
                    <span class="badge bg-warning text-dark fs-6">Terlalu Lembap</span>
                @endif
            </td>
        </tr>
        <tr>
            <th>Rekomendasi Perawatan</th>
            <td class="fw-bold">{{ $rekomendasi }}</td>
        </tr>
    </table>

    <div class="text-center mt-3">
        <a href="{{ route('prediksi.form') }}" class="btn btn-primary">Input Prediksi Lagi</a>
        <a href="{{ route('prediksi.riwayat') }}" class="btn btn-secondary">Lihat Riwayat</a>
    </div>
</div>
@endsection