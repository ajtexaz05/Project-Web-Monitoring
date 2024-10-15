<?php

namespace App\Http\Controllers\Api;

use App\Models\Mmi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MmiController extends Controller
{

    // GET
    public function index()
    {
        // Ambil semua data dan tampilkan
        return response()->json(Mmi::all(), 200);
    }

    // POST
    public function store(Request $request)
    {
        // Validasi input sesuai dengan kolom 'mmi'
        $request->validate([
            'mmi' => 'required|string|max:255',
        ]);

        // Buat data baru di tabel MMI
        $mmi = Mmi::create([
            'mmi' => $request->input('mmi'),
        ]);

        // Kembalikan respons sukses dengan data yang baru dibuat
        return response()->json($mmi, 201);
    }

    // GET
    public function show(string $id)
    {
        // Untuk menampilkan/mencari data MMI berdasarkan ID
        $mmi = Mmi::find($id);

        // Jika data tidak ditemukan, kembalikan respon error
        if (!$mmi) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        // Kembalikan data yang ditemukan
        return response()->json($mmi, 200);
    }

    // PUT
    public function update(Request $request, string $id)
    {
        // Cari data MMI berdasarkan ID
        $mmi = Mmi::find($id);

        // Jika data tidak ditemukan, kembalikan respon error
        if (!$mmi) {
            return response()->json(['message' => 'Data Tidak Ditemukan'], 404);
        }

        // Validasi input
        $request->validate([
            'mmi' => 'required|string|max:255',
        ]);

        // Update data MMI
        $mmi->update([
            'mmi' => $request->input('mmi'),
        ]);

        // Kembalikan respons sukses dengan data yang diperbarui
        return response()->json($mmi, 200);
    }

    // DELETE
    public function destroy(string $id)
    {
        // Cari data MMI berdasarkan ID
        $mmi = Mmi::find($id);

        // Jika data tidak ditemukan, kembalikan respon error
        if (!$mmi) {
            return response()->json(['message' => 'Data Tidak Ditemukan'], 404);
        }

        // Hapus data MMI
        $mmi->delete();

        // Kembalikan respons sukses setelah data dihapus
        return response()->json(['message' => 'Data Sukses Dihapus'], 200);
    }
}
