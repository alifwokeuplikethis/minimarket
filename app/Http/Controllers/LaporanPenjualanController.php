<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanPenjualanController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $statistik = [
            'total_penjualan' => 150,
            'total_pendapatan' => 25000000,
            'produk_terjual' => 320,
        ];

        return view('laporan', compact('statistik'));
    }
}
