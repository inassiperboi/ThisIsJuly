<!doctype html>
<html class="bg-black/5" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app" class="bg-black/5">
  
<nav class="bg-white shadow-xl py-3 grid items-center grid-cols-3 flex">
  <div class="span-col-1 mx-auto">
    <img src="https://thisisapril.com/wp-content/uploads/2022/09/cropped-LOGO-TIA-01-scaled-1-164x42.jpg" alt="" srcset=""></div> 
    <div class="span-col-1"></div>
<div class="span-col-1 flex items-center gap-3 mx-auto">
    <?php 
        $pesanan_utama = \App\Models\Pesanan::where('user_id',Auth::user()->id)->where('status',0)->first();
        if(!empty($pesanan_utama)){
            $jumlah_pesan=\App\Models\PesananDetail::where('pesanan_id',$pesanan_utama->id)->count();
        }

        
            
        ?>
    
    <h1 class="text-xl uppercase">User: {{ Auth::user()->name }}</h1>
    @can('admin')
    <a href="/dashboard" class="text-xl border p-1 rounded-xl border-black text-center px-2">Dashboard</a>
    @endcan
    
    @can('user')
    <a href="/checkout" class="text-xl border p-1 rounded-xl border-black text-center px-2" href="/checkout">Checkout: <?php
    if(!empty($pesanan_utama)){
           echo $jumlah_pesan;
        }
        else{
            echo 0;
        }
    ?></a>
    @endcan
    <div class=" border border-black text-xl px-2 py-1 rounded-xl">
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</div>
</nav>



        <main class="py-4">
            @yield('content')
        </main>
    </div>

    @include('sweetalert::alert')
</body>
</html>

{{-- <li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->name }}
    </a>

    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</li> --}}
