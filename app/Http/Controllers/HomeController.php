<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        
        return view('home-index'); // Sesuaikan dengan nama view
    }
    
    public function create()
    {
        return view('home-create'); // Sesuaikan dengan nama view
    }

    public function store(Request $request)
    {
        // Ambil data yang dikirim dari form
        $nama = $request->input('nama');
        $nrp = $request->input('nrp');
        $kelas = $request->input('kelas');

        // Kirim data ke view store
        return view('store', compact('nama', 'nrp', 'kelas'));
    }


}
