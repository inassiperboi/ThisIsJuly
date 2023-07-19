<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FormController extends Controller
{

    public function showForm()
{
    return view('tambah');
}

public function processForm(Request $request)
{
 
    $validatedData = $request->validate([
        'nama' => 'required',
        'harga' => 'required',
        'stok' => 'required',
        'keterangan' => 'required',
        'image'     => 'required|image|mimes:png,jpg,jpeg',
    ],
[
'nama.required'=>'Nama barang wajib diisi',
'harga.required'=>'Harga barang wajib diisi',
'stok.required'=>'Stok barang wajib diisi',
'keterangan.required'=>'Keterangan barang wajib diisi'

]);

    
    $data = new Barang;
    $data->nama_barang = $request->nama;
    $data->harga = $request->harga;
    $data->stok = $request->stok;
    $data->keterangan = $request->keterangan;
    $image = $request->file('image');
    $image->storeAs('image', $image->hashName());
    $data->gambar=$image->hashName();
    $data->save();
    Alert::success('Selesai', 'Item Berhasil Ditambahkan');
    return redirect('/dashboard');
}
}
