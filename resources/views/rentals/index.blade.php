@extends('app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Data Penyewaan PlayStation</h2>
            <a href="{{ route('rentals.create') }}" class="btn btn-primary">+ Tambah Rental Baru</a>
        </div>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama Pelanggan</th>
                            <th>Jenis PS</th>
                            <th>No. Unit</th>
                            <th>Durasi (Jam)</th>
                            <th>Total Biaya</th>
                            <th>Status</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($rentals as $index => $rental)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $rental->nama_pelanggan }}</td>
                            <td><span class="badge bg-info text-dark">{{ $rental->jenis_ps }}</span></td>
                            <td>Unit {{ $rental->nomor_unit }}</td>
                            <td>{{ $rental->durasi_jam }} Jam</td>
                            <td>Rp {{ number_format($rental->total_biaya, 0, ',', '.') }}</td>
                            <td>
                                @if($rental->status == 'Aktif')
                                    <span class="badge bg-warning text-dark">Aktif</span>
                                @else
                                    <span class="badge bg-success">Selesai</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <form action="{{ route('rentals.destroy', $rental->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                    <a href="{{ route('rentals.edit', $rental->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8" class="text-center text-muted py-4">Belum ada data penyewaan PlayStation.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection