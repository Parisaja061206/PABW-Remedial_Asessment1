@extends('layouts.main')

@section('content')
<div class="card shadow-sm p-4">
    <h3 class="mb-4 text-center text-success">Riwayat Prediksi Mikroklimat</h3>

    <div class="table-responsive">
        <table class="table table-striped table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Lokasi</th>
                    <th>Tanaman</th>
                    <th>Suhu Udara</th>
                    <th>Kelembapan Udara</th>
                    <th>Kelembapan Tanah</th>
                    <th>Status</th>
                    <th>Tanggal Waktu</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($riwayat as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->lokasi }}</td>
                        <td>{{ $item->nama_tanaman }}</td>
                        <td>{{ $item->suhu_udara }} &deg;C</td>
                        <td>{{ $item->kelembapan_udara }}%</td>
                        <td>{{ $item->kelembapan_tanah }}%</td>
                        <td>
                            @if($item->status_mikroklimat == 'Kering')
                                <span class="badge bg-danger">Kering</span>
                            @elseif($item->status_mikroklimat == 'Optimal')
                                <span class="badge bg-success">Optimal</span>
                            @else
                                <span class="badge bg-warning text-dark">Terlalu Lembap</span>
                            @endif
                        </td>
                        <td>{{ $item->created_at->format('d-m-Y H:i') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center">Belum ada data riwayat prediksi.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection