<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\welcome;

class welcomeController extends Controller
{

    public function index()
    {
        $satu = welcome::find(1); // Mengambil isi tabel welcome pada id 1
        $dua = welcome::find(2);  // Mengambil isi tabel welcome pada id 2
        $tiga = welcome::find(3); // Mengambil isi tabel welcome pada id 3
        $empat = welcome::find(4); // Mengambil isi tabel welcome pada id 4

        // Setelah diambil, lalu kembali ke halaman welcome atau halaman utama
        // Sambil membawa isi tabel tadi

        return view('/beranda/welcome')
          -> with('satu', $satu) // Isi tabel Id 1
          -> with('dua', $dua)  // Isi tabel Id 2
          -> with('tiga', $tiga) // Isi tabel Id 3
          -> with('empat', $empat); // Isi tabel 4
    }


    public function update(Request $request, $id)
    {
        $ganti = welcome::find($id);
        $ganti->isi = $request->isi;
        $ganti->update();
        return redirect() -> route('welcome.index');
    }

    public function edit($id)
    {
        $ganti = welcome::find($id);
        return view('/beranda/update', compact('ganti', $ganti));
    }
}
