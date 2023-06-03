<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use App\Models\Produk;
use Illuminate\Http\Request;
// panggil produk
class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('admin.produk.produk');

       // Mengambil semua data produk dan menggabungkannya dengan kategori produk terkait
       $produk = Produk::join('kategori_produk', 'produk.kategori_produk_id', '=', 'kategori_produk.id')
       ->select('produk.*', 'kategori_produk.nama as nama_kategori')
       ->get();

   // Mengirim data produk ke view 'admin.produk.produk'
   return view('admin.produk.produk', compact('produk'));
    }

    public function index2()
    {
        // return view('admin.produk.produk');

       // Mengambil semua data produk dan menggabungkannya dengan kategori produk terkait
       $kategori_produk = KategoriProduk::all();

   // Mengirim data produk ke view 'admin.produk.produk'
    return view('admin.kategori_produk.kategori_produk', compact('kategori_produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //arahkan ke view produk
		

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
