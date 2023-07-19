@extends('layouts.app')

@section('content')

  <div class="bg-white p-4 shadow-xl mx-auto w-[90%]">
    <h1 class="text-5xl font-bold  ">Dashboard</h1>
    <a href="/dashboard/tambah" class="relative inline-flex items-center justify-center p-0.5 mt-5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600  hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800">
      <span class="relative px-5 py-2.5 transition-all ease-in duration-100 text-lg text-white hover:bg-gray-900 rounded-md">
          Tambah Barang
      </span>
    </a>
    <h1 class="text-lg -mt-6 text-right">Tanggal: <?php $date = date('Y-m-d H:i:s');
      echo $date;?></h1>

 
<div class="relative overflow-x-auto shadow-xl sm:rounded-lg">
  <table class="w-full text-sm text-left text-gray-500 ">
      <thead class="text-xs text-center text-white uppercase bg-black dark:bg-gray-700 dark:text-gray-400">
          <tr>
              <th scope="col" class="px-6 py-3">
                  Nama Produk
              </th>
              <th scope="col" class="px-6 py-3">
                  Stok
              </th>
              <th scope="col" class="px-6 py-3">
                  Harga
              </th>
              <th scope="col" class="px-6 py-3">
                  keterangan
              </th>
              <th scope="col" class="px-6 py-3">
                Aksi
            </th>
          </tr>
      </thead>
      <tbody>
       
        @foreach ($barangs as $item)
          <tr class="bg-white mx-auto text-center border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
              <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap dark:text-white">
                 {{ $item['nama_barang'] }}
              </th>
              <td class="px-6 py-4 text-black">
                {{ $item['stok'] }}
              </td>
              <td class="px-6 py-4 text-black">Rp
                {{ number_format($item['harga']) }}
              </td>
              <td class="px-6 py-4 text-black">
                {{$item['keterangan']}}
              </td>
              <td class="flex mx-auto justify-center item-center mt-3 gap-3">
                <form action="{{ url('dashboard', $item->id) }}" method='post'>
                  @csrf
                  {{ method_field('DELETE') }}
                  <button class="border  py-1 px-3 rounded-full bg-red-600 text-white">Delete</button>
                </form>
                <a href="/dashboard/edit/{{ $item->id }}" class="border  py-1 px-3 rounded-full bg-yellow-500 text-white">Edit</a>

              </td>
          </tr>
  @endforeach
      </tbody>
  </table>
</div>
</div>
  </div>
  @include('footer')
@endsection



                