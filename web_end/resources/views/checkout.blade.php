@extends('layouts.app')

@section('content')
<!-- Breadcrumb -->
<nav class="flex shadow-xl w-fit  rounded-0 px-5 py-3 mt-[-10px] mb-[13px] text-gray-700 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700" aria-label="Breadcrumb">
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
          <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Checkout</span>
        </div>
      </li>
    </ol>
  </nav>

  <div class="bg-white p-4 shadow-xl mx-auto w-[90%]">
    <h1 class="text-4xl font-bold  ">Checkout</h1>

    @if(!empty($pesanan))
    <h1 class="text-lg text-right">Tanggal Pemesanan: {{ $pesanan->tanggal }}</h1>

 
<div class="relative overflow-x-auto shadow-xl mt-3 sm:rounded-lg">
  <table class="w-full text-sm text-left text-gray-500 ">
      <thead class="text-xs text-center text-white uppercase bg-black dark:bg-gray-700 dark:text-gray-400">
          <tr>
              <th scope="col" class="px-6 py-3">
                  Nama Produk
              </th>
              <th scope="col" class="px-6 py-3">
                  Jumlah
              </th>
              <th scope="col" class="px-6 py-3">
                  Harga
              </th>
              <th scope="col" class="px-6 py-3">
                  Total Harga
              </th>
              <th scope="col" class="px-6 py-3">
                Aksi
            </th>
            
          </tr>
      </thead>
      <tbody>
        <?php $i = 0?>
        @foreach ($pesanan_details as $item)
          <tr class="bg-white mx-auto text-center border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
              <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap dark:text-white">
                 {{ $barangs[$i]['nama_barang'] }}
              </th>
              <td class="px-6 py-4 text-black">
                {{ $item['jumlah'] }}
              </td>
              <td class="px-6 py-4 text-black">Rp
                {{ number_format($barangs[$i]['harga']) }}
              </td>
              <td class="px-6 py-4 text-black">Rp
                {{ number_format($item['jumlah_harga']) }}
              </td>
              <td>
                <form action="{{ url('checkout') }}/{{ $item->id }}" method='post'>
                  @csrf
                  {{ method_field('DELETE') }}
                  <button class="border  py-1 px-3 rounded-lg bg-red-600 text-white">Delete</button>
                </form>
              </td>
          </tr>
          <?php $i++ ?>
  @endforeach
      </tbody>
  </table>
 @endif
</div>
<div class="mt-3 text-xl font-bold w-full relative text-right">
  <h1 class="mr-5">Total Harga: Rp <?php 
    if(!empty($pesanan)){
      echo number_format($pesanan['jumlah_harga']);
    }
    ?></h1>
  <a href="/konfirmasi-check-out" class="btn btn-success mt-2 mr-2">
    Check Out
</a>
</div>
  </div>
  @include('footer')
@endsection
