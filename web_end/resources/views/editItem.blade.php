@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold mb-6 text-center">Edit Barang</h1>
    <form method="post" action="/dashboard/edit/{{ $barang->id }}" class="w-full max-w-sm mx-auto bg-white p-8 rounded-md shadow-md">
        @csrf
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="nama">Nama Barang</label>
        <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
          type="text" id="nama" name="nama" value="{{ $barang->nama_barang }}">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="harga">Harga</label>
        <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
          type="number" id="harga" name="harga" value="{{ $barang->harga }}">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="stok">Stok</label>
        <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
          type="number" id="stok" name="stok" value="{{ $barang->stok }}">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2"  for="keterangan">Keterangan</label>
        <input value="{{$barang->keterangan}}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
          type="text" id="keterangan" name="keterangan">
      </div>
      <button
        class="w-full bg-indigo-500 text-white text-sm font-bold py-2 px-4 rounded-md hover:bg-indigo-600 transition duration-300"
        type="submit">Ubah</button>
    </form>
  </div>
  @include('footer')
  @endsection