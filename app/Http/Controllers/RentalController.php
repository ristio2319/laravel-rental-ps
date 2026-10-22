<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    // Tampilkan semua data penyewaan
    public function index()
    {
        $rentals = Rental::latest()->get();
        return view('rentals.index', compact('rentals'));
    }

    // Tampilkan form tambah data
    public function create()
    {
        return view('rentals.create');
    }

    // Simpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_pelanggan' => 'required',
            'jenis_ps'       => 'required',
            'nomor_unit'     => 'required',
            'durasi_jam'     => 'required|numeric',
            'total_biaya'    => 'required|numeric',
        ]);

        Rental::create($request->all());

        return redirect()->route('rentals.index')->with('success', 'Data penyewaan berhasil ditambahkan!');
    }

    // Tampilkan form edit
    public function edit(Rental $rental)
    {
        return view('rentals.edit', compact('rental'));
    }

    // Perbarui data
    public function update(Request $request, Rental $rental)
    {
        $request->validate([
            'nama_pelanggan' => 'required',
            'jenis_ps'       => 'required',
            'nomor_unit'     => 'required',
            'durasi_jam'     => 'required|numeric',
            'total_biaya'    => 'required|numeric',
            'status'         => 'required',
        ]);

        $rental->update($request->all());

        return redirect()->route('rentals.index')->with('success', 'Data penyewaan berhasil diperbarui!');
    }

    // Hapus data
    public function destroy(Rental $rental)
    {
        $rental->delete();

        return redirect()->route('rentals.index')->with('success', 'Data penyewaan berhasil dihapus!');
    }
}