<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{
    function index(){
        $barangs = Barang::all();
        return view('dashboard',compact('barangs'));
    }
}
