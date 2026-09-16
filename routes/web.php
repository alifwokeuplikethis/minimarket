<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\LaporanPenjualanController;

Route::get('/laporan', LaporanPenjualanController::class);

// Route::get('/login', [AuthController::class, 'loginPage']);
// Route::post('/login', [AuthController::class, 'login']);


// Route::prefix('dashboard')->group(function () {
//     Route::get('/admin', function () {
//         return view('admin');
//     });

//     Route::get('/user', function () {
//         return view('dashboard');
//     });
// });

// Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');



// //langkah 1-4

// // Group Route untuk Fitur Admin (Manajemen Data)
// Route::prefix('admin')->group(function () {
//     Route::get('/produk', function () {
//         return 'Halaman Kelola Produk (Hanya Admin)';
//     })->name('admin.produk');

//     Route::get('/kategori', function () {
//         return 'Halaman Kelola Kategori Produk (Hanya Admin)';
//     })->name('admin.kategori');
// });

// // Group Route untuk Fitur Kasir (Transaksi)
// Route::prefix('kasir')->group(function () {
//     Route::get('/transaksi', function () {
//         return 'Halaman Input Transaksi Penjualan (Kasir)';
//     })->name('kasir.transaksi');
// });

// Route::get('/', function () {
//     return view('dashboard_pos', [
//     'nama_pegawai' => 'Budi Santoso',
//     'shift' => 'Pagi (08:00-10:00)' ]);
// });

// Route::get('/penjualan', [PenjualanController::class, 'index']);
// Route::get('/penjualan/{$id}', [PenjualanController::class, 'show']);


// Route::resource('/penjualan', PenjualanController::class);


// Route::get('/produk-toko', function () {

//     $produk = [
//         [
//             'nama' => 'Beras',
//             'sku' => 'BR001',
//             'harga' => 15000,
//             'stok' => 20,
//             'gambar' => 'images/beras.png'
//         ],
//         [
//             'nama' => 'Minyak Goreng',
//             'sku' => 'MG001',
//             'harga' => 18000,
//             'stok' => 15,
//             'gambar' => 'images/minyak.png'
//         ],
//         [
//             'nama' => 'Gula',
//             'sku' => 'GL001',
//             'harga' => 17000,
//             'stok' => 25,
//             'gambar' => 'images/gula.png'
//         ]
//     ];

//     return view('daftar_produk', [
//         'produk' => $produk
//     ]);
// });