@extends('app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Tambah Data Penyewaan Baru</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('rentals.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nama Pelanggan</label>
                        <input type="text" name="nama_pelanggan" class="form-control @error('nama_pelanggan') is-invalid @enderror" value="{{ old('nama_pelanggan') }}" placeholder="Contoh: Budi Santoso">
                        @error('nama_pelanggan') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jenis PlayStation</label>
                        <select name="jenis_ps" class="form-select @error('jenis_ps') is-invalid @enderror">
                            <option value="">-- Pilih Jenis PS --</option>
                            <option value="PS3">PS3 (Rp 5.000/jam)</option>
                            <option value="PS4">PS4 (Rp 10.000/jam)</option>
                            <option value="PS5">PS5 (Rp 15.000/jam)</option>
                        </select>
                        @error('jenis_ps') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nomor Unit</label>
                        <input type="text" name="nomor_unit" class="form-control @error('nomor_unit') is-invalid @enderror" value="{{ old('nomor_unit') }}" placeholder="Contoh: 01">
                        @error('nomor_unit') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Durasi (Jam)</label>
                        <input type="number" name="durasi_jam" class="form-control @error('durasi_jam') is-invalid @enderror" value="{{ old('durasi_jam') }}" placeholder="Contoh: 2">
                        @error('durasi_jam') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Total Biaya (Rp)</label>
                        <input type="number" name="total_biaya" class="form-control @error('total_biaya') is-invalid @enderror" value="{{ old('total_biaya') }}" placeholder="Contoh: 20000">
                        @error('total_biaya') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('rentals.index') }}" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-success">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection