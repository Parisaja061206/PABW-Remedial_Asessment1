@extends('layouts.main')

@section('content')
<div class="card shadow-sm p-4 col-md-8 mx-auto">
    <h3 class="mb-4 text-center text-success">Form Input Prediksi Mikroklimat</h3>

    <form action="{{ route('prediksi.proses') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="lokasi" class="form-label">Lokasi Lahan</label>
            <select name="lokasi" id="lokasi" class="form-select" required>
                <option value="" disabled selected>-- Pilih Lokasi --</option>
                <option value="Garut Kota">Garut Kota</option>
                <option value="Tarogong Kaler">Tarogong Kaler</option>
                <option value="Samarang">Samarang</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="nama_tanaman" class="form-label">Nama Tanaman</label>
            <input type="text" name="nama_tanaman" id="nama_tanaman" class="form-control" placeholder="Contoh: Padi, Jagung, Cabai" required>
        </div>

        <div class="mb-3">
            <label for="suhu_udara" class="form-label">Prediksi Suhu Udara (&deg;C)</label>
            <input type="number" step="0.1" name="suhu_udara" id="suhu_udara" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="kelembapan_udara" class="form-label">Prediksi Kelembapan Udara (%)</label>
            <input type="number" name="kelembapan_udara" id="kelembapan_udara" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="kelembapan_tanah" class="form-label">Prediksi Kelembapan Tanah (%)</label>
            <input type="number" name="kelembapan_tanah" id="kelembapan_tanah" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success w-100">Proses & Simpan Data</button>
    </form>
</div>
@endsection