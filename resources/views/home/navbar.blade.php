<nav class="navbar navbar-expand-lg navbar-light bg-light " style="z-index: 19;">
    <div class="container-fluid px-5">
        {{-- Logo --}}
        <a href="/" class="nav-logo">
            <img src="{{ asset('frontend/img/ico/default/logo.svg') }}" width="120px;">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            {{-- deliver --}}
            <div class="d-flex flex-row justify-content-center align-content-center mx-5 deliver"
                onclick="popUpDelivery()">
                <div>
                    <img src="{{ asset('frontend/img/ico/default/location-off.svg') }}"
                        class="pt-3" alt="">
                </div>
                <div id="deliver-hover" style="min-width: 110px;">
                    <p style="font-size:11px; margin-bottom:0">Deliver to
                        <span style="font-weight:bold; font-size:.8vw;" class="d-block">United Kindom</span></p>
                </div>
            </div>
            {{-- Search --}}
            <form class="d-flex my-0 mx-4" style="width: 60%;" action="{{ url('/search') }}"
                method="GET">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                    value="{{ Request::get('search') }}" name="search" autocomplete="off">
            </form>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item dropdown">
                    <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <div class="inbox-icon ic-size"></div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg-end chat_ul" aria-labelledby="navbarDropdown">
                        <li class="chat_li">
                            <div class="dropdown-item d-flex p-0" href="#">
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
                        </li>
                        <li class="chat_li">
                            <div class="dropdown-item d-flex p-0" href="#">
                                <div class="diskusi_icon"></div>
                                <div class="chat_data">
                                    <div class="chat_title">
                                        Diskusi
                                    </div>
                                    <div class="chat_subtit">
                                        Tanya jawab seputar produk
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="chat_li">
                            <div class="dropdown-item d-flex p-0" href="#">
                                <div class="ulasan_icon"></div>
                                <div class="chat_data">
                                    <div class="chat_title">
                                        Ulasan
                                    </div>
                                    <div class="chat_subtit">
                                        Berikan penilaian dan ulasan Produk
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="chat_li">
                            <div class="dropdown-item d-flex p-0" href="#">
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
                        </li>

                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <div class="notif-icon ic-size"></div>
                    </a>
                    {{-- nav-tabs => nav-link --}}
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
                </li>
                {{-- CART DROPDOWN LIVEWIRE --}}
                <livewire:frontend.cart-notif.view/>
               

            </ul>

            <div class="d-flex flex-row justify-content-center align-content-center loginAkun"
                style="text-decoration: none; color:#898989; cursor: pointer;" onclick="popUpLogin()" href="">

                @if(!Auth::user())
                    <div class="d-flex flex-row justify-content-center align-items-center">
                        <a class="nav-link" style="color: black;" href="/login">
                            <Span style="font-weight:bold; font-size:14px;" id="akun-span"
                                class="btn  btn-outline-primary btn-sm">Masuk </Span>
                        </a>
                        <a class="nav-link" style="color: black;" href="/register">
                            <Span style="font-weight:bold; font-size:14px;" id="akun-span"
                                class="btn btn-primary btn-sm">Daftar </Span>
                        </a>
                    </div>
                @else
                    <ul class="nav nav-tabs">
                        <img src="{{ asset(Auth::user()->avatar) }}" alt="" class="img-fluid rounded-circle" width="50px">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" style="color: black;" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <Span style="font-weight:bold; font-size:16.5px;" id="akun-span">Halo
                                    {{ Auth::user()->name }}</Span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('profile-edit') }}">User Settings</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ route('wishlist') }}">Wishlist</a></li>
                                <li>
                                    <form action="{{ url('/logout') }}" method="POST">
                                        @csrf
                                        <button class="dropdown-item" type="submit">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                @endif
            </div>
        </div>
    </div>
</nav>