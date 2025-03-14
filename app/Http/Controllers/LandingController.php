<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class LandingController extends Controller
{
    public function index(){
        $barang = Barang::get();
        return view('index', compact('barang'));
    }

    public function create(){
        return view('create');
    }
    public function store(Request $request){
        $barang = new Barang;
        $barang = $request->kode_barang;
        $barang = $request->nama_barang;
        $barang = $request->kategori;
        $barang = $request->harga;
        $barang->save();

        return redirect()->back();
    }


}
