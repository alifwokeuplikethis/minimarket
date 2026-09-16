<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;

class PenjualanController extends Controller
{
    public function __construct() {
        // $this->middleware('auth');
    }

    public function index(Penjualan $penjualan) {

        return Penjualan->all();
    }

    public function create()
    {

    }

    public function store()
    {
        $penjualan = new Penjualan();
        
        $penjualan->nama = 'Laptop';
        $penjualan->harga = 150000;
        $penjualan->stok = 15;
        $penjualan->save();

        return "Berhasil menambahkan data!";
    }

    public function show($id)
    {
        $penjualan = new Penjualan();

        $penjualanAll = $penjualan::all();
        $penjualanFind = $penjualan::find($id);
        $penjualanWhere = $penjualan::where('harga', '>',  10000)->get();
        return "menampilkan buku dengan ID: " . $penjualanWhere;
    }

    public function edit($id)
    {
        $penjualan = new Penjualan();

        $penjualanEdit = $penjualan::find($id);
        $penjualanEdit->harga = 20000;
        $penjualanEdit->save();
        return "Form edit buku dengan id : " . $id . 'selesai!';
    }

    public function update(Request $request, $id)
    {
        return "Mengupdate buku dengan ID: " . $id;
    }

    public function destroy($id)
    {
        $penjualan = new Penjualan();

        $penjualanDestroy = $penjualan->find($id);
        $penjualanDestroy->delete();
        return "Menghapus buku dengan ID: " . $id;
    }
}
