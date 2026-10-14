<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use Illuminate\Http\Request;

class BusController extends Controller
{
    public function index()
    {
        $buses = Bus::all();
        return view('buses.index', compact('buses'));
    }

    // TAMBAHKAN FUNCTION INI UNTUK MENAMPILKAN DETAIL
    public function show($id)
    {
        // Mencari data bus berdasarkan ID, jika tidak ketemu akan otomatis error 404
        $bus = Bus::findOrFail($id);

        return view('buses.show', compact('bus'));
    }
}