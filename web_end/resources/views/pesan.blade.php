@extends('layouts.app')

@section('content')
<!-- Breadcrumb -->
<nav class="flex w-fit bg-white rounded-0 px-5 py-3 mt-[-10px] mb-[13px] text-gray-700 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-3">
      <li class="inline-flex items-center">
        <a href="/home" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
          <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
          </svg>
          Home
        </a>
      </li>
    
      <li aria-current="page">
        <div class="flex items-center">
          <svg class="w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
          </svg>
          <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">{{ $barang['nama_barang'] }}</span>
        </div>
      </li>
    </ol>
  </nav>
  

<div class="grid bg-white grid-cols-2 gap-5 mt-2 shadow-xl w-[90%] mx-auto pt-10 ">
    <div class="col-span-1">
        <img class="mx-auto w-[full] h-[80%]"  src="https://thisisapril.com/wp-content/uploads/2023/06/Lookbook-112.jpg" alt="">
    </div>
    <div class="col-span-1">
        <h1 class="font-extralight text-5xl uppercase">{{$barang['nama_barang']}}</h1>
        <h1 class="font-bold mt-3 text-3xl uppercase">RP {{$barang['harga']}}</h1>
        <h1 class="font-bold mt-3 text-3xl uppercase">Stok: {{$barang['stok']}}</h1>
        <div class=" w-full mt-2 mb-3">
            <form action="{{ url('home') }}/{{ $barang->id }}" method="post">
                @csrf
                <label class="block my-3 font-bold text-2xl"  for="jumlahbarang" name="jumlah">Jumlah Barang :
                    <input class="border border-black ml-3" id="jumlahbarang" name="jumlahbarang" type="number">
                </label>
                <div class="w-fit mx-auto mt-20 mb-14
                ">
                <button class="border cursor-pointer border-1 border-black p-1 text-xl mx-2 px-3">ADD TO CART</button>
                <button class="border cursor-pointer border-1 border-black p-1 text-xl mx-2 px-3">WhatsApp Chat</button>
            </div>
            </form>
        </div>
        <div class="bg-black h-[1px] mt-2"></div>
        <h1 class="mt-3 font-medium">Detail Size:</h1>
        <h1 class="mt-3">{!! $barang['keterangan'] !!}</h1>
    </div>
</div>
@include('footer')
@endsection