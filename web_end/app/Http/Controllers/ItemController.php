<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;



class ItemController extends Controller
{
    public function destroy($id)
    {
       
        $item = Barang::where('id', $id)->first();
        Storage::delete("image/" . $item->gambar);
        $item->delete();
        Alert::success('Selesai', 'Item Berhasil Dihapus');
        return redirect()->back()->with('success', 'Item berhasil dihapus.');
    }

    public function edit($id){
    $barang=Barang::where('id',$id)->first();
    return view('editItem',compact('barang'));
    }

    public function update(Request $request, $id){
        $data = Barang::where('id',$id)->first();
        $data->nama_barang = $request->nama;
        $data->harga = $request->harga;
        $data->stok = $request->stok;
        $data->keterangan = $request->keterangan; 
        $data->save();
        Alert::success('Selesai', 'Item Berhasil Diubah');
        return redirect('/dashboard/edit/'.$id); 
    }
    

}
