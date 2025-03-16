<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $ar = ['Aura', 'Budi', 'Citra', 'Dodi', 'Eka'];
        return view('home-index', compact('ar')); // Sesuaikan dengan nama view
    }
    
    public function create()
    {
        // form
        return view('home-create');
    }


    // public function store(Request $request)
    // {
    //    dd($request->var1);
    // }

    // public function show(String $id)
    // {
    //     // tabel
    //     dd($id);
    // }
    
    // public function edit($id)
    // {
    //     return "Ini adalah ig yang akan di edit " . $id;
    // }
}
