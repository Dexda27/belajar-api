<?php

namespace App\Http\Controllers;

use App\Models\nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function getNilai()
    {
        $nilai = nilai::all();
        return response()->json($nilai);
    }

    public function tambahdata(Request $request)
    {
        $validated = $request->validate([
            'nim' => 'required|integer',
            'idmk' => 'required|integer',
            'nilai' => 'required|integer|min:0|max:100',
        ]);

        $nilai = Nilai::create($validated);
        return response()->json([
            'message' => 'Record created successfully',
            'data' => $nilai
        ], 201);
    }



    public function updateData(Request $request, $nim)
    {
        $validated = $request->validate([
            'nim' => 'required|integer',
            'idmk' => 'required|integer',
            'nilai' => ['sometimes', 'required', 'integer', 'min:0', 'max:100'],
        ]);

        $nilai = Nilai::where('nim', $nim)->first();

        if (!$nilai) {
            return response()->json(['message' => 'Data dengan NIM tersebut tidak ditemukan'], 404);
        }

        $nilai->update($validated);

        return response()->json([
            'message' => 'Data nilai berhasil diupdate',
            'data' => $nilai
        ]);
    }

    public function deleteData(Request $request, $nim)
    {
        $nilai = Nilai::where('nim', $nim)->first();
        if (!$nilai) {
            return response()->json(['message' => 'Data dengan NIM tersebut tidak ditemukan'], 404);
        }
        $nilai->delete();
        return response()->json([
            'message' => 'Data nilai berhasil dihapus',
        ], 201);
    }


}
