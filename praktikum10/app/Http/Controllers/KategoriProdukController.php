<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use Illuminate\Http\Request;

class KategoriProdukController extends Controller
{
    //
    public function index()
    {
        // return view('admin.produk.produk');

       // Mengambil semua data produk dan menggabungkannya dengan kategori produk terkait
       $kategori_produk = KategoriProduk::all();

   // Mengirim data produk ke view 'admin.produk.produk'
    return view('admin.kategori_produk.kategori_produk', compact('kategori_produk'));
    }
}

