@extends('layouts.app')

@section('content')
<div class=" mx-auto grid gap-3 grid-cols-2 lg:grid-cols-4">
    @foreach ($barangs as $barang)
    <div class="relative m-10 w-fit col-span-1 mx-auto  overflow-hidden rounded-lg border border-gray-100 bg-white  shadow-md">
        <a class="relative mx-3 mt-3 flex h-60 overflow-hidden rounded-xl" href="#">
          <img class="object-cover mx-auto" src="{{ asset('storage/image') }}/{{ $barang['gambar'] }}" alt="product image" />
        </a>
        <div class="mt-4 px-5 pb-5">
          <a href="#">
            <h5 class="text-4xl tracking-tight text-center text-slate-900">{{ $barang["nama_barang"] }}</h5>
          </a>
          <div class="mt-2 mb-5 mx-auto">
            <p class="text-center text-2xl font-semibold">
            Rp {{ number_format($barang['harga']) }}
            </p>
     
            <p class="mt-2 text-center text-xl">Tersedia: {{ $barang['stok'] }}
            </p>
          </div>
          <a href="/home/{{ $barang['id'] }}" class="flex items-center justify-center rounded-md bg-slate-900 mt-[-15px] px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
            </a
          >
        </div>
      </div>
    @endforeach
</div>
@include('footer')
@endsection
