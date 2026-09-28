<?php

namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            'nama' => 'Husnul',
            'nim' => '251011700545',
            'email' => 'mhusnulmaruf@gmail.com',
            'prodi' => 'Sistem Informasi',
            'status' => 'Aktif'
        ];

        return view('mahasiswa', compact('mahasiswa'));
    }
}