<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index() {
        $karyawan = Karyawan::all();
        return view("form", [
            "karyawan" => $karyawan
        ]);
    }


     public function add() {
        return view("add");
     }

    public function submit(Request $request) {
      $nik = $request->nik;
      $nama = $request->nama;
      $departemen = $request->departemen;
      $jabatan = $request->jabatan;

      Karyawan::create([
        "nik" => $nik,
        "nama" => $nama,
        "departemen" => $departemen,
        "jabatan" => $jabatan,
      ]);

      return redirect('/');

    }
}