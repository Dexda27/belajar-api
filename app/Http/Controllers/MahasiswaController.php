<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Email;

class MahasiswaController extends Controller
{
   

    public function tambahdata(Request $request)
    {
        $validate = $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'jurusan' => ['required', 'string']
        ]);

        $mahasiswa = Mahasiswa::create($validate);
        return response()->json([
            'message' => 'Data mahasiswa berhasil disimpan',
            'data' => $mahasiswa
        ], 201);
    }


    public function getMahasiswa()
    {
        $mahasiswa = Mahasiswa::all();
        return response()->json($mahasiswa);
    }

    public function getByNama($nama)
    {
        $mahasiswa = Mahasiswa::where('nama', 'LIKE', '%' . $nama . '%')->get();

        if ($mahasiswa->isEmpty()) {
            return response()->json([
                'message' => 'Mahasiswa dengan nama tersebut tidak ditemukan'
            ], 404);
        }

        return response()->json($mahasiswa, 200);
    }



}
