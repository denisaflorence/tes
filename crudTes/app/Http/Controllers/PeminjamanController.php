<?php

namespace App\Http\Controllers;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index(){
        $data_pinjam = Peminjaman::all();
        // dd($data_pinjam);
        return view('datapinjam', compact('data_pinjam'));
    }
}
