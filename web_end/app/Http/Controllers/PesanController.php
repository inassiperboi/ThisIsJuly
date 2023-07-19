<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Barang;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use App\Models\PesananDetail;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class PesanController extends Controller
{
    public function __construct (){
        $this->middleware('auth');
    }

public function index ($id){
    Alert::alert('Title', 'Message', 'Type');
    $barang=Barang::where('id',$id)->first();
    return view('pesan',compact('barang'));
}

public function pesan (Request $request, $id){


    $barang=Barang::where('id',$id)->first();
    $tanggal=Carbon::now();

// validasi

if($request->jumlahb>$barang->stok){
    return redirect ('home/'.$id);
}

$cek_pesanan= Pesanan::where('user_id',Auth::user()->id)->where('status',0)->first();
if(empty($cek_pesanan)){
// simpan database
$pesanan=new Pesanan;
$pesanan->user_id=Auth::user()->id;
$pesanan->tanggal=$tanggal;
$pesanan->status=0;
$pesanan->jumlah_harga=0;
$pesanan->save();
}
    

    // pesanan detail
    $pesanan_baru=Pesanan::where('user_id',Auth::user()->id)->where('status',0)->first();
    $cek_pesanan_detail=PesananDetail::where('barang_id',$barang->id)->where('pesanan_id',$pesanan_baru->id)->first();
    if(empty($cek_pesanan_detail)){
       
        $pesanan_detail=new PesananDetail;
        $pesanan_detail->barang_id=$barang->id;
        $pesanan_detail->pesanan_id= $pesanan_baru->id;
        $pesanan_detail->jumlah=$request->jumlahbarang;
        $pesanan_detail->jumlah_harga=$barang->harga*$pesanan_detail->jumlah;
        $pesanan_detail->save();
    }else{
        $pesanan_detail=PesananDetail::where('barang_id',$barang->id)->where('pesanan_id',$pesanan_baru->id)->first();
        $pesanan_detail->jumlah=$request->jumlahbarang+$pesanan_detail->jumlah;
       
    //    harga sekarang
        $harga_pesanan_detail_baru=$barang->harga*$pesanan_detail->jumlah;
        $pesanan_detail->jumlah_harga=$pesanan_detail->jumlah_harga+$harga_pesanan_detail_baru;
        $pesanan_detail->update();
    }
    
    $pesanan=Pesanan::where('user_id',Auth::user()->id)->where('status',0)->first();
    $pesanan->jumlah_harga=$pesanan->jumlah_harga+$barang->harga*$pesanan_detail->jumlah;
$pesanan->update();

    return redirect('home');
}


public function checkout()
{
    $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
 $pesanan_details = [];
 $barangs=Barang::all();
    if(!empty($pesanan))
    {
        $pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->get();

    }
    
    return view('checkout', compact('pesanan', 'pesanan_details','barangs'));
}

public function delete($id)
{
    $pesanan_detail = PesananDetail::where('id', $id)->first();

    $pesanan = Pesanan::where('id', $pesanan_detail->pesanan_id)->first();
    $pesanan->jumlah_harga = $pesanan->jumlah_harga-$pesanan_detail->jumlah_harga;
    $pesanan->update();


    $pesanan_detail->delete();
    return redirect('checkout');
}


public function konfirmasi()
    {
        $user = User::where('id', Auth::user()->id)->first();

        // if(empty($user->alamat))
        // {
        //     Alert::error('Identitasi Harap dilengkapi', 'Error');
        //     return redirect('profile');
        // }

        // if(empty($user->nohp))
        // {
        //     Alert::error('Identitasi Harap dilengkapi', 'Error');
        //     return redirect('profile');
        // }

        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        $pesanan_id = $pesanan->id;
        $pesanan->status = 1;
        $pesanan->update();

        $pesanan_details = PesananDetail::where('pesanan_id', $pesanan_id)->get();
        foreach ($pesanan_details as $pesanan_detail) {
            $barang = Barang::where('id', $pesanan_detail->barang_id)->first();
            $barang->stok = $barang->stok - $pesanan_detail->jumlah;
            $barang->update();
        }



        Alert::success('Pesanan Sukses Check Out Silahkan Lanjutkan Proses Pembayaran', 'Success');
        return redirect('/home');

    }


}
