@extends('app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm">
            <div class="card-header bg-warning text-dark">
                <h4 class="mb-0">Edit Data Penyewaan</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('rentals.update', $rental->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Nama Pelanggan</label>
                        <input type="text" name="nama_pelanggan" class="form-control" value="{{ old('nama_pelanggan', $rental->nama_pelanggan) }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jenis PlayStation</label>
                        <select name="jenis_ps" class="form-select">
                            <option value="PS3" {{ $rental->jenis_ps == 'PS3' ? 'selected' : '' }}>PS3</option>
                            <option value="PS4" {{ $rental->jenis_ps == 'PS4' ? 'selected' : '' }}>PS4</option>
                            <option value="PS5" {{ $rental->jenis_ps == 'PS5' ? 'selected' : '' }}>PS5</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nomor Unit</label>
                        <input type="text" name="nomor_unit" class="form-control" value="{{ old('nomor_unit', $rental->nomor_unit) }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Durasi (Jam)</label>
                        <input type="number" name="durasi_jam" class="form-control" value="{{ old('durasi_jam', $rental->durasi_jam) }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Total Biaya (Rp)</label>
                        <input type="number" name="total_biaya" class="form-control" value="{{ old('total_biaya', $rental->total_biaya) }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Status Penyewaan</label>
                        <select name="status" class="form-select">
                            <option value="Aktif" {{ $rental->status == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                            <option value="Selesai" {{ $rental->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                        </select>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('rentals.index') }}" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary">Perbarui Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
