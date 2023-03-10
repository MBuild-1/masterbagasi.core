{{-- navbar awal --}}
<nav class="navbar navbar-expand-lg navbar-light bg-light " style="z-index: 19;">
    <div class="container-fluid ps-4">
        {{-- Logo --}}
        <a href="/" class="nav-logo">
            <img src="{{ asset('frontend/img/ico/default/logo.svg') }}" width="140px;">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
            {{-- deliver --}}
            <div class="d-flex flex-row justify-content-center align-content-center deliver"
            data-bs-toggle="modal" data-bs-target="#deliverto">
                <div>
                    <img src="{{ asset('frontend/img/ico/default/location-off.svg') }}"
                        style="padding-top: 12px;" alt="">
                </div>
               {{-- <livewire:frontend.cargo.change-country> --}}
               <div id="deliver-hover" style="min-width: 96px;">
                <p style="font-size:11px; margin-bottom:0; line-height: 1.4">Dikirim ke
                    @empty(!$user)
                        @if ($user)
                        <span style="font-weight:bold; font-size:16px;" class="d-block">{{$country?? 'Pilih Negara'}}</span></p>
                        @else
                        <span style="font-weight:bold; font-size:16px;" class="d-block">Pilih Negara</span></p>
                        @endif
                    @else
                    <span style="font-weight: bold;font-size: 16.5px;" class="d-block"><a href="/login" style="text-decoration: none;color:black">Pilih Negara</a></span></p>
                    @endempty
                    
            </div>
            </div>
             {{-- <livewire:frontend.cargo.deliverto> --}}
                {{-- @dd($countries) --}}
                <div wire:ignore.self class="modal fade" id="deliverto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: #25258C">
                                    <h3 class="mb-0 text-white">Daftar Alamat Pengiriman</h3>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style=" background-color:#fff;color:#fff"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <div class="row d-flex flex-row justify-content-center align-items-center mx-4 my-4">
                                            <div class="col">
                                                <div class="popup-bagas"></div>
                                            </div>
                                            <div class="col">
                                                <div class="popup-mastah"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <form action=" {{route('country.handle-select')}} " method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col">
                                                <select class="form-select" aria-label="Default select example" name='country'>
                                                    <option disabled >Pilih Negara Tujuan</option>
                                                    @foreach ($countries as $item)
                                                        <option value="{{$item->name}}">{{$item->name}}</option>
                                                    @endforeach
                                                </select>
                                                <div class="d-flex justify-content-end mt-2">
                                                    <button class="btn btn-primary btn-sm">Tambah Daftar Alamat</button>
                                                </div>
                                            </div>
                                        </div>
                                     </form>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary btn-sm">Selesai</button>
                                </div>
                            </div>
                    </div>
                </div>
                
            {{-- Search --}}
            <form class="d-flex my-0 ms-2" style="width: 62%;" action="{{ url('/search') }}"
                method="GET">
                <input class="form-control me-2" type="search" placeholder="Cari barang disini" aria-label="Search"
                    value="{{ Request::get('search') }}" name="search" autocomplete="off">
            </form>
            <ul class="navbar-nav me-4 mb-2 mb-lg-0 nav-lis-custom">

                <li class="nav-item dropdown">
                    <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <div class="inbox-icon ic-size responsive"></div>
                    </a>

                    @empty(!$user)
                    <ul class="dropdown-menu dropdown-menu-lg-end chat_ul" aria-labelledby="navbarDropdown">
                        <li class="chat_li">
                            <a href="/profile/chat">
                                <div class="d-flex p-0" href="#">
                                    <div class="chat_icon"></div>
                                    <div class="chat_data">
                                        <div class="chat_title">
                                            Chat
                                        </div>
                                        <div class="chat_subtit">
                                            Percakapan pribadi Anda
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="chat_li">
                            <a href="/profile/diskusi_produk">
                                <div class="d-flex p-0" href="#">
                                    <div class="diskusi_icon"></div>
                                    <div class="chat_data">
                                        <div class="chat_title">
                                            Diskusi Produk
                                        </div>
                                        <div class="chat_subtit">
                                            Tanya jawab seputar produk
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="chat_li">
                            <a href="/profile/ulasan">
                                <div class="d-flex p-0" href="#">
                                    <div class="ulasan_icon"></div>
                                    <div class="chat_data">
                                        <div class="chat_title">
                                            Ulasan Pengiriman
                                        </div>
                                        <div class="chat_subtit">
                                            Berikan penilaian dan ulasan Pengiriman
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="chat_li">
                            <a href="#">
                                <div class="d-flex p-0" href="#">
                                    <div class="bantuan_icon"></div>
                                    <div class="chat_data">
                                        <div class="chat_title">
                                            Pesan Bantuan
                                        </div>
                                        <div class="chat_subtit">
                                            Pantau status bantuan dari Master bagasi
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    @endempty
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <div class="notif-icon ic-size"></div>
                    </a>
                    {{-- nav-tabs => nav-link --}}
                    
                  @empty(!$user)
                  <div class="dropdown-menu dropdown-menu-lg-end nav-tabs my-0" style="
                    border-top-left-radius: 0;
                    border-top-right-radius: 0;
                  ">
                        <div class="container px-0" style="width: 500px">
                            <ul class="nav nav-tabs row" id="myTab" role="tablist">
                                <li class="nav-item col-6" role="presentation">
                                    <button class="nav-link active" id="transaksi-tab" data-bs-toggle="tab"
                                        data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                        aria-selected="true">Transaksi</button>
                                </li>
                                <li class="nav-item col" role="presentation">
                                    <button class="nav-link" id="update-tab" data-bs-toggle="tab"
                                        data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                                        aria-selected="false">Update</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                    aria-labelledby="transaksi-tab">
                                    <div style="width: 100%; height: 200px; background-color: #ffffff; padding-left: 40px;"
                                        class="container mt-2 proses">
                                        <p>Pembelian</p>

                                        <p>Menunggu Pembayaran</p>
                                        <div class="container p-0">
                                            <div class="row">
                                                <div class="col">
                                                    <div type="button" class="btn btn-default btnn-circle mb-4">
                                                        <img class="ml-1"
                                                            src="{{ asset('frontend/img/ico/proses/waktu.svg') }}">
                                                    </div>
                                                    <p style="font-size: 12px">Menunggu Konfirmasi</p>
                                                </div>
                                                <div class="col">
                                                    <button type="button" class="btn btn-default btnn-circle mb-4">
                                                        <img
                                                            src="{{ asset('frontend/img/ico/proses/proses.svg') }}">
                                                    </button>
                                                    <p style="font-size: 12px">Sedang Proses</p>
                                                </div>
                                                <div class="col">
                                                    <button type="button" class="btn btn-default btnn-circle mb-4">
                                                        <img
                                                            src="{{ asset('frontend/img/ico/proses/ceklis.svg') }}">
                                                    </button>
                                                    <p style="font-size: 12px">Siap Dikirim</p>
                                                </div>
                                                <div class="col">
                                                    <button type="button" class="btn btn-default btnn-circle mb-4">
                                                        <img
                                                            src="{{ asset('frontend/img/ico/proses/pesawat.svg') }}">
                                                    </button>
                                                    <p style="font-size: 12px">Sedang Dikirim</p>
                                                </div>
                                                <div class="col">
                                                    <button type="button" class="btn btn-default btnn-circle mb-4">
                                                        <img
                                                            src="{{ asset('frontend/img/ico/proses/lokasi.svg') }}">
                                                    </button>
                                                    <p style="font-size: 12px">Sampai Tujuan</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div style="background-color:  #ffffff"
                                        class="container mt-2 d-flex justify-content-center ">
                                        <div class="bg-notif">
                                            <div class="mb_maskot d-flex">
                                                <div class="sleepymasta"></div>
                                                <div class="sleepybagas"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="update-tab">
                                </div>
                            </div>
                        </div>
                    </div>
                  @endempty
                </li>
                {{-- CART DROPDOWN LIVEWIRE --}}
                <livewire:frontend.cart-notif.view :user="$user">
            </ul>


            <div class="d-flex flex-row justify-content-center align-content-center loginAkun"
                style="text-decoration: none; color:#898989; cursor: pointer;">
                @empty($user)
                    <div class="d-flex flex-row justify-content-center align-items-center">
                        {{-- Livewire Popup Login --}}
                        <livewire:frontend.popup.login>
                        <a class="nav-link px-0" style="color: black; width: 100px" href="/register">
                            <Span style="font-weight:bold; font-size:14px; width: 100px;" id="akun-span"
                                class="btn btn-border btn-oren btn-sm">Daftar </Span>
                        </a>
                    </div>
                @else
                    <a href="">
                    <ul class="nav nav-tabs" >
                                <li class="nav-item">
                                    <a href="{{ route('profile-edit') }}">
                                    <img src="{{ $user['avatar'] ? $user['avatar'] : 'https://ui-avatars.com/api/?name='.Str::slug($user['name']).'&background=0D8ABC&color=fff'  }}" alt="" class="img-fluid" width="40px">
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle px" style="color: black;" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <Span style="font-weight:bold; font-size:16.5px;" id="akun-span">
                                            {{ Str::length($user['name']) >= 8 ? Str::substr($user['name'], 0, 8). '...' : $user['name'] }}</Span>
                                    </a>
                                    <ul class="dropdown-menu profile-dd">
                                        <div class="profile-dd-con">
                                            <div class="profile-dd-head">
                                                <div class="profile-dd-head-img"><img src="{{ $user['avatar'] ? $user['avatar'] : 'https://ui-avatars.com/api/?name='.Str::slug($user['name']).'&background=0D8ABC&color=fff' }}" alt=""></div>
                                                <div class="profile-dd-head-ket">
                                                    <div> {{ $user['name'] }}</div>
                                                    <div class="d-flex"> 
                                                        <img src="{{asset('frontend/img/ico/profile/bronze.svg')}}" alt="" class="my-auto me-2">
                                                        Member Silver
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="profile-dd-body">
                                                <div class="profile-dd-body-left">
                                                    <div class="body-premium">
                                                        <a class="dropdown-item" href="#">
                                                            <div class="wrapp">
                                                                <img src="{{asset('frontend/img/dummy/MBpay.svg')}}" alt="">
                                                                <p>Saldo</p>
                                                                <p>Koin</p>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="pt-1">
                                                        <a class="dropdown-item" href="{{ route('profile-edit') }}">Kumpulkan Koin</a>
                                                        <a class="dropdown-item" href="{{ route('profile-edit') }}">Kupon Promo Saya</a>
                                                        <a class="dropdown-item" href="{{ route('profile-edit') }}">MB Afiliasi</a>
                                                        <a class="dropdown-item" href="{{ route('profile-edit') }}">MB Mitra</a>
                                                    </div>
                                                </div>
                                                <div class="profile-dd-body-right">
                                                    <a class="dropdown-item" href="{{ route('profile-edit') }}">Pembelian</a>
                                                    <a class="dropdown-item" href="{{ route('wishlist') }}">Wishlist</a>
                                                    <a class="dropdown-item" href="{{ route('profile-edit') }}">Merek Favorit</a>
                                                    <a class="dropdown-item" href="{{ route('profile-edit') }}">Pengaturan</a> <div class="garis"></div>
                                                    <a class="dropdown-item" href="{{ route('menusharingcart') }}">Keranjang Bersama</a>

                                                    <div class="profile-dd-body-right-out">
                                                        <form action="{{ route('auth.logout') }}" method="POST">
                                                            @csrf
                                                            <button class="dropdown-item d-flex" type="submit">
                                                                Keluar
                                                                <img src="{{asset('frontend/img/ico/logout/logout.svg')}}" alt="" class="logo-out my-auto">
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                                {{-- <div class="col">
                                                    <div class="d-flex">
                                                        <div>
                                                            <div class="card" style="width: 18rem;">
                                                                <ul class="list-group list-group-flush">
                                                                    <li class="list-group-item">MB Pay</li>
                                                                    <li class="list-group-item">Saldo</li>
                                                                    <li class="list-group-item">Koin</li>
                                                                </ul>
                                                            </div>
                                                            <li><a class="dropdown-item" href="{{ route('profile-edit') }}">Kumpulkan Koin</a></li>
                                                            <li><a class="dropdown-item" href="{{ route('profile-edit') }}">Kupon Promo Saya</a></li>
                                                            <li><a class="dropdown-item" href="{{ route('profile-edit') }}">MB Afiliasi</a></li>
                                                            <li><a class="dropdown-item" href="{{ route('profile-edit') }}">MB Mitra</a></li>
                                                        </div>
                                                        <div>
                                                            <li><a class="dropdown-item" href="{{ route('profile-edit') }}">Pembelian</a></li>
                                                            <li><a class="dropdown-item"
                                                                    href="{{ route('wishlist') }}">Wishlist</a>
                                                            </li>
                                                            
                                                            <li><a class="dropdown-item" href="{{ route('profile-edit') }}">Merek Favorit</a></li>
                                                            <li><a class="dropdown-item" href="{{ route('profile-edit') }}">Pengaturan</a></li>
                                                            <br>
                                                            <br>
                                                            <br>
                                                            <br>
                                                            <li>
                                                                <form action="{{ url('/logout') }}" method="POST">
                                                                    @csrf
                                                                    <button class="dropdown-item" type="submit">Keluar</button>
                                                                </form>
                                                            </li>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </ul>
                                </li>
                        </ul>
                    </a>
                @endempty
            </div>
        </div>
    </div>
</nav>
{{-- navbar end --}}