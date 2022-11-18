{@extends('layouts.app')
@include('home.navbar')
@section('content')
@if (Session()->has('success'))
<div class="alert alert-success mt-4" role="alert">
    {{Session()->get('success')}}
</div>
@endif

@if (Session()->has('failed'))
<div class="alert alert-danger mt-4" role="alert">
    {{Session()->get('failed')}}
</div>

@endif
@if ($errors->any())
<div class="alert alert-danger">
    <div>
        <p>Something wrong...</p>
    </div>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="container profile-tab" style="margin-top: 100px">
    <div class="row d-flex">
        <div class="col-2">
            <div style="height: auto; border: 1px solid rgba(221, 221, 221, 0.466); border-radius: 10px; width: 245px">
                <div style="border-bottom: 2px solid rgba(221, 221, 221, 0.466)" class="d-flex p-2">
                    <div class="px-2">
                        <img src="{{asset('frontend/img/ico/default/profile-default.svg')}}" alt="Avatar" class="avatar rounded-circle pl-5">
                    </div>
                    <div>
                        <p class="mb-1">Subhan</p>
                        <p class="mb-1">Member Gold</p>
                    </div>
                </div>

                <div class="d-flex pt-3" style="border-bottom: 2px solid rgba(221, 221, 221, 0.466)">
                    <div class="px-2">  
                        <img src="{{asset('frontend/img/ico/default/profile-default.svg')}}" width="25px" alt="Avatar" class="avatar rounded-circle pl-5">
                    </div>
                    <div>
                        <p class="mb-1">MbPay</p>
                        <p class="mb-1">MbPay Points</p>
                    </div>
                </div>
                
                <div style="border-bottom: 2px solid rgba(221, 221, 221, 0.466)" class="py-2 side-dd">
                    <button class="dropdown-btn" style="font-size: 14px; font-weight: 700">Kotak Masuk
                      </button>
                      <div class="dropdown-container">
                        <a href="{{ url('/profile/chat') }}">Chat</a>
                        <a href="{{ url('/profile/diskusiProduk') }}">Diskusi Produk</a>
                        <a href="{{ url('/profile/ulasan') }}">Ulasan</a>
                        <a href="{{ url('/profile/pesanBantuan') }}">Pesan Bantuan</a>
                        <a href="{{ url('/profile/pesanDikomplain') }}">Pesan Dikomplain</a>
                        <a href="{{ url('/profile/profileUpdate') }}">Update</a>
                      </div>
                </div>
                <div style="border-bottom: 2px solid rgba(221, 221, 221, 0.466)" class="py-2 side-dd">
                    <button class="dropdown-btn" style="font-size: 14px; font-weight: 700">Pembelian
                      </button>
                      <div class="dropdown-container">
                        <a href="{{ url('/profile/menungguPembayaran') }}">Menunggu Pembayaran</a>
                        <a href="{{ url('/profile/daftarTransaksi') }}">Daftar Transaksi</a>
                      </div>
                </div>
                <div style="border-bottom: 2px solid rgba(221, 221, 221, 0.466)" class="py-2 side-dd">
                    <button class="dropdown-btn" style="font-size: 14px; font-weight: 700">Profil Saya
                      </button>
                      <div class="dropdown-container">
                        <a href="{{ url('/profile/wishlist') }}">Wishlist</a>
                        <a href="{{ url('/profile/tokofavorit') }}">Toko Favorit</a>
                        <a href="{{ url('/profile/edit') }}">Pengaturan</a>
                      </div>
                </div>
                <div style="border-bottom: 2px solid rgba(221, 221, 221, 0.466)" class="p-3">
                    <div style="background-color: #ff4200; width: 100%; height: 80px; border:1px solid rgba(221, 221, 221, 0.466); border-radius: 10px">
                       <p>Banner</p>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-10">
            <div class="container nav-tabs px-0" style="width: 1000px; border: 1px solid rgba(221, 221, 221, 0.466); border-radius: 10px;">
                <ul class="nav nav-tabs row" id="myTab2" role="tablist">
                    <li class="nav-item col" role="presentation">
                        <button class="nav-link active" id="biodata-tab" data-bs-toggle="tab"
                            data-bs-target="#biodata-diri" type="button" role="tab" aria-controls="biodata-diri"
                            aria-selected="true" style="font-size: 16px">Biodata Diri</button>
                    </li>
                    <li class="nav-item col" role="presentation">
                        <button class="nav-link" id="alamat-tab" data-bs-toggle="tab" data-bs-target="#alamat"
                            type="button" role="tab" aria-controls="alamat"
                            aria-selected="false" style="font-size: 16px">Alamat</button>
                    </li>
                    <li class="nav-item col" role="presentation">
                        <button class="nav-link" id="pembayaran-tab" data-bs-toggle="tab"
                            data-bs-target="#pembayaran" type="button" role="tab" aria-controls="pembayaran"
                            aria-selected="false" style="font-size: 16px">Pembayaran</button>
                    </li>
                    <li class="nav-item col" role="presentation">
                        <button class="nav-link" id="notifikasi-tab" data-bs-toggle="tab" data-bs-target="#notifikasi"
                            type="button" role="tab" aria-controls="notifikasi"
                            aria-selected="false" style="font-size: 16px">Notifikasi</button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="biodata-diri" class="tab-pane fade in active show">
                     {{-- livewire biodata --}}
                     <livewire:frontend.user.biodata>
                    </div>
                    <div id="alamat" class="tab-pane fade">
                        <div class="p-3 pt-5">
                            <div class="row">
                                <div class="col-6">
                                    <div class="search">
                                        <form class="form-inline my-2 my-lg-0 d-flex">
                                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="width: 60%">
                                            <button class="btn my-2 my-sm-0" style="background-color: #ff4200;" type="submit"><i style="color: white" class="fa fa-search" aria-hidden="true"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col" style="position: relative">
                                    <button class="btn" style="background-color: #ff4200; color:white; position: absolute; right: 0;">Tambah Alamat Baru</button>
                                </div>
                            </div>

                            <div class="mt-3 p-4 alamat" style="background-color: #ff440010; width: 100%; border: 1px solid rgba(221, 221, 221, 0.466); border-radius: 10px">
                                <p class="m-0" style="font-weight: 700; font-family: inter; font-size: 16;">Rumah</p>
                                <p class="m-0" style="font-family: inter; font-size: 16;">+6287088630874</p>
                                <p class="m-0" style="font-family: inter; font-size: 16;">Kober, Kec. Beji, Kota Depok, Jawa Bara..</p>
                                <p class="my-3" style="font-family: inter; font-size: 16;"><span><img src="{{asset('frontend/img/ico/default/location-on.svg')}}" alt=""></span> Sudah Pinpoint</p>
                                <div class="m-0 p-0 btn" onclick="popUpAlamat()" style="font-family: inter; font-size: 16;color: #ff4200">ubah alamat</div>
                            </div>

                            <div class="mt-3 p-4 alamat" style="width: 100%; border: 1px solid rgba(221, 221, 221, 0.466); border-radius: 10px">
                                <p class="m-0" style="font-weight: 700; font-family: inter; font-size: 16;">Rumah</p>
                                <p class="m-0" style="font-family: inter; font-size: 16;">+6287088630874</p>
                                <p class="m-0" style="font-family: inter; font-size: 16;">Kober, Kec. Beji, Kota Depok, Jawa Bara..</p>
                                <p class="my-3" style="font-family: inter; font-size: 16;"><span><img src="{{asset('frontend/img/ico/default/location-on.svg')}}" alt=""></span> Sudah Pinpoint</p>
                                <button class="m-0 p-0 btn" onclick="popUpAlamat()" style="font-family: inter; font-size: 16;color: #ff4200">ubah alamat</button>
                            </div>

                            <div class="mt-3 p-4 alamat" style="width: 100%; border: 1px solid rgba(221, 221, 221, 0.466); border-radius: 10px">
                                <p class="m-0" style="font-weight: 700; font-family: inter; font-size: 16;">Rumah</p>
                                <p class="m-0" style="font-family: inter; font-size: 16;">+6287088630874</p>
                                <p class="m-0" style="font-family: inter; font-size: 16;">Kober, Kec. Beji, Kota Depok, Jawa Bara..</p>
                                <p class="my-3" style="font-family: inter; font-size: 16;"><span><img src="{{asset('frontend/img/ico/default/location-on.svg')}}" alt=""></span> Sudah Pinpoint</p>
                                <button class="m-0 p-0 btn" onclick="popUpAlamat()" style="font-family: inter; font-size: 16;color: #ff4200">ubah alamat</button>
                            </div>

                            <div class="mt-3 p-4 alamat" style="width: 100%; border: 1px solid rgba(221, 221, 221, 0.466); border-radius: 10px">
                                <p class="m-0" style="font-weight: 700; font-family: inter; font-size: 16;">Rumah</p>
                                <p class="m-0" style="font-family: inter; font-size: 16;">+6287088630874</p>
                                <p class="m-0" style="font-family: inter; font-size: 16;">Kober, Kec. Beji, Kota Depok, Jawa Bara..</p>
                                <p class="my-3" style="font-family: inter; font-size: 16;"><span><img src="{{asset('frontend/img/ico/default/location-on.svg')}}" alt=""></span> Sudah Pinpoint</p>
                                <button class="m-0 p-0 btn" onclick="popUpAlamat()" style="font-family: inter; font-size: 16;color: #ff4200">ubah alamat</button>
                            </div>
                        </div>
                    </div>
                    <div id="pembayaran" class="tab-pane fade">
                        <div class="p-4 pt-5">
                            <div class="row">
                                <div class="col-6">
                                    <div class="pe-3">
                                        <div class="p-1">
                                            <h4>Hai Subhan,</h4>
                                            <h4>selamat datang dihalaman</h4>
                                            <h4 class="fw-bold">Pengaturan Pembayaran</h4>
        
                                            <p style="color: rgb(161, 161, 161)">Atur pembayaran Anda untuk meningkatkan keamanan dan kemudahan berbelanja Anda di Tokopedia.</p>
                                            <div style="border-bottom: 1px solid #ddd">
                                                <p class="btn p-0 fw-bold pt-3" href="" style="color: #ff4200;">MbPay</p>
                                            </div>
                                            <div style="border-bottom: 1px solid #ddd">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <p class="btn p-0 fw-bold pt-3" href="">Kartu Kredit / Debit</p>
                                                    </div>
                                                    <div class="col-6" style="position: relative">
                                                        <div style="position: absolute; right: 0">
                                                            <p class="btn p-0 fw-bold pt-3" href="">0 / 4 Tersimpan</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="border-bottom: 1px solid #ddd">
                                                <p class="btn p-0 fw-bold pt-3" href="">Kredivo Express</p>
                                            </div>
                                            <div style="border-bottom: 1px solid #ddd">
                                                <p class="btn p-0 fw-bold pt-3" href="">Debit Instan</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div style="border: 1px solid #ddd; height:500px">
                                        <div style="border-bottom: 2px solid #ddd" class="p-2 pembayaran">
                                            <p>MbPay</p>
                                        </div>
                                        <div class="p-4">
                                            <div class="px-2">
                                                <div style="color: white; background: linear-gradient(#ff4400ad, #ff4200); height: 230px; border-radius: 20px" class="p-3">
                                                    <div class="mb-5 pb-3">
                                                        <img src="{{ asset('frontend/img/ico/default/logo2.svg') }}" width="120px;">
                                                    </div>
                                                    <p style="font-size: 22px; margin-bottom: 0">**** **** **23 6</p>
                                                    <p style="font-size: 16px">Saldo: Rp0</p>
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <p class="fw-bold" style="font-size: 16px">Akun Tokopedia yang terhubung</p>
                                                <div class="d-flex">
                                                    <div class="pe-3">
                                                        <img src="{{asset('frontend/img/ico/default/profile-default.svg')}}" alt="Avatar" class="avatar rounded-circle pl-5">
                                                    </div>
                                                    <div class="my-2">
                                                        <p class="mb-1 fw-bold" style="font-size: 14px">belthandavara.abd@gmail.com</p>
                                                        <p class="mb-1" style="font-size: 12px; color: rgb(112, 112, 112)">Terhubung sejak 29 Oct 2021 13:06 WIB</p>
                                                    </div>    
                                                </div>
                                                <div>
                                                    <p style="font-size: 14px; color: rgb(112, 112, 112)"> <span><i style="color: rgb(107, 107, 107); font-size: 15px;" class="fa fa-exclamation-circle fa-2x pe-2" aria-hidden="true"></i>
                                                    </span> Kamu hanya bisa menyambungkan 1 nomor GoPay ke Tokopedia.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="notifikasi" class="tab-pane fade p-4">
                        <h3 class="fw-bold mb-0">Notifikasi</h3>
                        <p style="color: rgb(161, 161, 161)">Atur notifikasi yang ingin kamu terima disini.</p>
                        
                        <div class="px-3 my-3" style="background-color: #eee; border-radius: 10px; height:40px">
                            <div class="row notif-text fw-bold">
                                <div class="col-10">
                                    <p>Transaksi</p>
                                </div>
                                <div class="col d-flex justify-content-center">
                                    <p class="">E-mail</p>
                                </div>
                            </div>
                        </div>
                        <div class="px-3 my-2" style="height:40px">
                            <div class="row notif-text fw-bold" style="border-bottom: 2px solid rgba(221, 221, 221, 0.466);">
                                <p> <span><i style="color: rgb(107, 107, 107); font-size: 17px;" class="fa fa-shopping-cart pe-2" aria-hidden="true"></i>
                                </span> Transaksi Pembelian</p>
                            </div>
                        </div>
                        <div class="px-3 my-2" style="height:40px">
                            <div class="row notif-text" style="border-bottom: 2px solid rgba(221, 221, 221, 0.466);">
                                <div class="col-10">
                                    <p>Menunggu Pembayaran</p>
                                </div>
                                <div class="col d-flex justify-content-center">
                                    <div style="padding: 10px 0;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-3 my-2" style="height:40px">
                            <div class="row notif-text" style="border-bottom: 2px solid rgba(221, 221, 221, 0.466);">
                                <div class="col-10">
                                    <p>Menunggu Konfirmasi</p>
                                </div>
                                <div class="col d-flex justify-content-center">
                                    <div style="padding: 10px 0;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-3 my-2" style="height:40px">
                            <div class="row notif-text" style="border-bottom: 2px solid rgba(221, 221, 221, 0.466);">
                                <div class="col-10">
                                    <p>Pesanan Diproses</p>
                                </div>
                                <div class="col d-flex justify-content-center">
                                    <div style="padding: 10px 0;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-3 my-2" style="height:40px">
                            <div class="row notif-text" style="border-bottom: 2px solid rgba(221, 221, 221, 0.466);">
                                <div class="col-10">
                                    <p>Pesanan Dikirim</p>
                                </div>
                                <div class="col d-flex justify-content-center">
                                    <div style="padding: 10px 0;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-3 my-2" style="height:40px">
                            <div class="row notif-text" style="border-bottom: 2px solid rgba(221, 221, 221, 0.466);">
                                <div class="col-10">
                                    <p>Pesanan Tiba</p>
                                </div>
                                <div class="col d-flex justify-content-center">
                                    <div style="padding: 10px 0;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-3 my-2" style="height:40px">
                            <div class="row notif-text" style="border-bottom: 2px solid rgba(221, 221, 221, 0.466);">
                                <div class="col-10">
                                    <p>Pengingat</p>
                                </div>
                                <div class="col d-flex justify-content-center">
                                    <div style="padding: 10px 0;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-3 my-2" style="height:40px">
                            <div class="row notif-text fw-bold" style="border-bottom: 2px solid rgba(221, 221, 221, 0.466);">
                                <p> <span><i style="color: rgb(107, 107, 107); font-size: 17px;" class="fa fa-exclamation-circle pe-2" aria-hidden="true"></i>
                                </span> Promo</p>
                            </div>
                        </div>
                        <div class="px-3 my-2" style="height:40px">
                            <div class="row notif-text" style="border-bottom: 2px solid rgba(221, 221, 221, 0.466);">
                                <div class="col-10">
                                    <p>Newsletter Master Bagasi</p>
                                </div>
                                <div class="col d-flex justify-content-center">
                                    <div style="padding: 10px 0;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
            </div>
        </div>
    </div>
</div>

@endsection


{{-- <form action="" enctype="multipart/form-data" method="POST">

    <div class="rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                        width="150px" src="{{Auth::user()->avatar}}"><span
                        class="font-weight-bold">{{Auth::user()->name}}</span><span
                        class="text-black-50">{{Auth::user()->email}}</span><span> </span></div>
            </div>
            @if (!Auth::user()->id_google)
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Edit</h4>
                    </div>
                    @csrf
                    @method('PUT')
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Name</label><input type="text" class="form-control"
                                placeholder="Place your name.." value="{{Auth::user()->name}}" name="name"
                                autocomplete="off"></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Email</label><input type="email"
                                class="form-control" placeholder="Place your email.." value="{{Auth::user()->email}}"
                                name="email" autocomplete="off"></div>
                    </div>
                    <div class="password"></div>
                    <a class="btn btn-primary btn-sm my-4 changepw">Change Password</a>
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <label class="labels">Upload Avatar</label>
                            <input type="file" class="form-control" id="image" name="avatar">
                        </div>
                    </div>
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save
                            Profile</button></div>
                </div>
            </div>
            @else
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Edit</h4>
                    </div>
                    <form action="" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row mt-2">
                            <div class="col-md-12"><label class="labels">Nama</label><input type="text"
                                    class="form-control" placeholder="Place your name.." value="{{Auth::user()->name}}"
                                    name="name" autocomplete="off"></div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label class="labels">Upload Avatar</label>
                                <input type="file" class="form-control" id="image" name="avatar">
                            </div>
                        </div>
                        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save
                                Profile</button></div>
                    </form>
                </div>
            </div>
            @endif
            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience"><span>Personal
                            Data</span></div>
                    <br>
                    <div class="col-md-12"><label class="labels">Jenis Kelamin</label>
                        <select class="form-select" aria-label="Default select example" name="gender">
                            @if (!Auth::user()->gender)
                            <option selected>Pilih jenis kelamin</option>
                            <option value="Pria">Pria</option>
                            <option value="Perempuan">Perempuan</option>
                            @else
                            <option {{Auth::user()->gender == 'Pria' ?'selected':''}} value="Pria">Pria</option>
                            <option {{Auth::user()->gender == 'Perempuan' ?'selected':''}} value="Perempuan">Perempuan
                            </option>
                            @endif
                        </select>
                    </div>
                    <br>
                    <div class="col-md-12"><label class="labels">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="birthday" value="{{Auth::user()->birthday}}">
                    </div>
                    <br>
                    <div class="col-md-12"><label class="labels">Handphone</label>
                        <input type="text" class="form-control" placeholder="Phone Number" name="handphone"
                            value="{{Auth::user()->handphone}}">
                    </div>
                    <br>
                    <div class="col-md-12"><label class="labels">Zipcode</label>
                        <input type="text" class="form-control" placeholder="Zipcode" name="zipcode"
                            value="{{Auth::user()->zipcode}}">
                    </div>
                    <br>
                    <div class="col-md-12"><label class="labels">Alamat</label>
                        <div class="mb-3">
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="address"
                                rows="5">{{Auth::user()->address}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form> --}}

    
{{--     --}}
{{-- <div class="container profile-tab" style="margin-top: 100px">
    <div class="row d-flex">
        <div class="col-2">
            <div style="height: auto; border: 1px solid rgba(221, 221, 221, 0.466); border-radius: 10px; width: 245px">
                <div style="border-bottom: 2px solid rgba(221, 221, 221, 0.466)" class="d-flex p-2">
                    <div class="px-2">
                        <img src="{{asset('frontend/img/ico/default/profile-default.svg')}}" alt="Avatar" class="avatar rounded-circle pl-5">
                    </div>
                    <div>
                        <p class="mb-1">Subhan</p>
                        <p class="mb-1">Member Gold</p>
                    </div>
                </div>

                <div class="d-flex pt-3" style="border-bottom: 2px solid rgba(221, 221, 221, 0.466)">
                    <div class="px-2">  
                        <img src="{{asset('frontend/img/ico/default/profile-default.svg')}}" width="25px" alt="Avatar" class="avatar rounded-circle pl-5">
                    </div>
                    <div>
                        <p class="mb-1">MbPay</p>
                        <p class="mb-1">MbPay Points</p>
                    </div>
                </div>
                
                <div style="border-bottom: 2px solid rgba(221, 221, 221, 0.466)" class="py-2 side-dd">
                    <button class="dropdown-btn" style="font-size: 14px; font-weight: 700">Kotak Masuk
                      </button>
                      <div class="">
                        <a href="#">Chat</a>
                        <a href="#">Diskusi Produk</a>
                        <a href="#">Ulasan</a>
                        <a href="#">Pesan Bantuan</a>
                        <a href="#">Pesan Dikomplain</a>
                        <a href="#">Update</a>
                      </div>
                </div>
                <div style="border-bottom: 2px solid rgba(221, 221, 221, 0.466)" class="py-2 side-dd">
                    <button class="dropdown-btn" style="font-size: 14px; font-weight: 700">Pembelian
                      </button>
                      <div class="">
                        <a href="#">Menunggu Pembayaran</a>
                        <a href="#">Daftar Transaksi</a>
                      </div>
                </div>
                <div style="border-bottom: 2px solid rgba(221, 221, 221, 0.466)" class="py-2 side-dd">
                    <button class="dropdown-btn" style="font-size: 14px; font-weight: 700">Profil Saya
                      </button>
                      <div class="">
                        <a href="#">Wishlist</a>
                        <a href="#">Toko Favorit</a>
                        <a href="#">Pengaturan</a>
                      </div>
                </div>
                <div style="border-bottom: 2px solid rgba(221, 221, 221, 0.466)" class="p-3">
                    <div style="background-color: #ff4200; width: 100%; height: 80px; border:1px solid rgba(221, 221, 221, 0.466); border-radius: 10px">
                       <p>Banner</p>
                    </div>

                </div>
            </div>
        </div> 
        <div class="col-10">
            <div class="container nav-tabs px-0"
                style="width: 1000px; border: 1px solid rgba(221, 221, 221, 0.466); border-radius: 10px;">
                <ul class="nav nav-tabs row" id="myTab2" role="tablist">
                    <li wire:ignore class="nav-item col" role="presentation">
                        <button class="nav-link active" id="biodata-tab" data-bs-toggle="tab" data-bs-target="#biodata-diri"
                            type="button" role="tab" aria-controls="biodata-diri" aria-selected="true"
                            style="font-size: 16px">Biodata Diri</button>
                    </li>
                    <li wire:ignore class="nav-item col" role="presentation">
                        <button class="nav-link" id="alamat-tab" data-bs-toggle="tab" data-bs-target="#alamat" type="button"
                            role="tab" aria-controls="alamat" aria-selected="false" style="font-size: 16px">Alamat</button>
                    </li>
                    <li wire:ignore class="nav-item col" role="presentation">
                        <button class="nav-link" id="pembayaran-tab" data-bs-toggle="tab" data-bs-target="#pembayaran"
                            type="button" role="tab" aria-controls="pembayaran" aria-selected="false"
                            style="font-size: 16px">Pembayaran</button>
                    </li>
                    <li wire:ignore class="nav-item col" role="presentation">
                        <button class="nav-link" id="notifikasi-tab" data-bs-toggle="tab" data-bs-target="#notifikasi"
                            type="button" role="tab" aria-controls="notifikasi" aria-selected="false"
                            style="font-size: 16px">Notifikasi</button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div wire:ignore.self  id="biodata-diri" class="tab-pane fade in active show">
                        <div class="">
                            <div class="row">
                                <div class="col-md-4 border-right">
                                    <div class="d-flex flex-column align-items-center text-center p-3 py-1">
                                        <div class="row mt-5">
                                            <div class="card" style="width: 18rem; border-radius: 10px">
                                                <img class="card-image-top p-3" width="350px"
                                                    src="{{ asset(Auth::user()->avatar) }}">
        
                                                <div class="card-body">
                                                    <div class="col-md-12">
                                                        <form wire:submit.prevent ='updateImage'>
                                                         <input type="file" class="form-control" wire:model="avatar">
                                                         <button type="submit" class="btn btn-primary btn-sm">Upload</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 d-flex justify-content-center"
                                                style="padding-right: 10px !important;">
                                                <div class="btn fw-bold"
                                                    style="font-size: 14px; width: 100%; border: 1px solid #ccc; border-radius: 8px" data-bs-toggle="modal" data-bs-target="#password">
                                                    Ubah Sata Sandi</div>
                                                   
                                            </div>
                                            <div class="mt-3 d-flex justify-content-center"
                                                style="padding-right: 10px !important;">
                                                <div class="btn fw-bold"
                                                    style="position: relative; font-size: 14px; width: 100%; border: 1px solid #ccc; border-radius: 8px">
                                                    <span class="btn-icon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                                    Pin Master Bagasi
                                                </div>
                                            </div>
        
                                        </div>
                                    </div>
                                </div>
                                @if(!Auth::user()->id_google)
                                    <div class="col-md border-right">
                                        <div class="p-3 pt-5">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <p style="font-weight: 700; font-family: inter; font-size: 16; "
                                                    class="text-right">Ubah Biodata Diri</p>
                                            </div>
                                            @csrf
                                            @method('PUT')
                                            <div class="row">
                                                <div class="col-3">
                                                    <p style="font-family: inter; font-size: 16;">Nama</p>
                                                    <p style="font-family: inter; font-size: 16;">Tanggal Lahir</p>
                                                    <p style="font-family: inter; font-size: 16;">Jenis Kelamin</p>
                                                </div>
                                                <div class="col">
                                                    <p style="font-family: inter; font-size: 16;">{{ Auth::user()->name }}
                                                        <span style="padding-left: 10px"><a href=""
                                                                data-bs-toggle="modal" data-bs-target="#name">Ubah</a></span>
                                                    </p>
                                                    <!-- Name -->
                                                    <div wire:ignore.self class="modal fade" id="name" tabindex="-1"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Ganti Nama
                                                                    </h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form wire:submit.prevent='updateName'>
                                                                        <div class="mb-3">
                                                                            <label for="name" class="form-label">Name</label>
                                                                            <input type="text" class="form-control" id="name"
                                                                                wire:model='name'
                                                                                autocomplete="off">
                                                                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                                                        </div>
                                                                        <div>
                                                                            <button
                                                                                type="submit" class="btn btn-sm btn-primary">Disimpan</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p style="font-family: inter; font-size: 16;">{{Auth::user()->place_birth}}, {{date('d M Y', strtotime(Auth::user()->birthday))}} <span
                                                            style="padding-left: 10px"> <a href="" wire:click.prevent
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#birthday">ubah</a></span></p>
                                                                <div wire:ignore.self class="modal fade" id="birthday" tabindex="-1"
                                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Ganti Tanggal Lahir
                                                                            </h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form wire:submit.prevent='updateBirthday'>
                                                                                <div class="mb-3">
                                                                                    <label for="place_birth" class="form-label">Tempat Lahir</label>
                                                                                    <input type="text" class="form-control" name="place_birth" wire:model='place_birth'>
                                                                                        @error('place_birth') <span class="text-danger">{{ $message }}</span> @enderror
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="birthday" class="form-label">Tanggal Lahir</label>
                                                                                    <input type="date" class="form-control" name="birthday" wire:model='birthday'>
                                                                                        @error('birthday') <span class="text-danger">{{ $message }}</span> @enderror
                                                                                </div>
                                                                                <div>
                                                                                    <button
                                                                                        type="submit" class="btn btn-sm btn-primary">Disimpan</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    <p style="font-family: inter; font-size: 16;">{{ Auth::user()->gender }}
                                                        <span style="padding-left: 10px"> <a href="" wire:click.prevent
                                                                data-bs-toggle="modal" data-bs-target="#gender">ubah</a></span>
                                                    </p>
                                           
                                                    <div wire:ignore.self class="modal fade" id="gender" tabindex="-1"
                                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Ubah Jenis Kelamin
                                                                            </h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form wire:submit.prevent='updateGender'>
                                                                                <div class="mb-3">
                                                                                    <label for="gender" class="form-label">Pilih Gender</label>
                                                                                    <select  class="form-select" aria-label="Default select example" wire:model="gender">
                                                                                        <option selected>Pilih jenis kelamin</option>
                                                                                        <option value="Pria">Pria</option>
                                                                                        <option value="Perempuan">Perempuan</option>
                                                                                    </select>
                                                                                        @error('gender') <span class="text-danger">{{ $message }}</span> @enderror
                                                                                </div>
                                                                                <div>
                                                                                    <button
                                                                                        type="submit" class="btn btn-sm btn-primary">Disimpan</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center mb-3 pt-5">
                                                <p style="font-weight: 700; font-family: inter; font-size: 16; "
                                                    class="text-right">Ubah Kontak</p>
                                            </div>
                                            @csrf
                                            @method('PUT')
                                            <div class="row">
                                                <div class="col-3">
                                                    <p style="font-family: inter; font-size: 16;">Email</p>
                                                    <p style="font-family: inter; font-size: 16;">Nomor HP</p>
                                                </div>
                                                <div class="col">
                                                    <p style="font-family: inter; font-size: 16;">
                                                        {{ Auth::user()->email }}<span style="padding-left: 10px"> <a
                                                                href="" wire:click.prevent data-bs-toggle="modal"
                                                                data-bs-target="#email">ubah</a></span></p>
                                                                <div wire:ignore.self class="modal fade" id="email" tabindex="-1"
                                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Ubah Email
                                                                            </h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form wire:submit.prevent='updateEmail'>
                                                                                <div class="mb-3">
                                                                                    <label for="email" class="form-label">Ubah Email</label>
                                                                                    <input type="text" class="form-control" name="email" wire:model='email'>
                                                                                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                                                                </div>
                                                                                <div>
                                                                                    <button
                                                                                        type="submit" class="btn btn-sm btn-primary">Disimpan</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                </div>
                                                    <p style="font-family: inter; font-size: 16;">
                                                        {{ Auth::user()->handphone }} <span style="padding-left: 10px"> <a
                                                                href="" wire:click.prevent data-bs-toggle="modal"
                                                                data-bs-target="#handphone">ubah</a></span></p>
                                                                <div wire:ignore.self class="modal fade" id="handphone" tabindex="-1"
                                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Ubah Nomor Hp
                                                                            </h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form wire:submit.prevent='updateHandphone'>
                                                                                <div class="mb-3">
                                                                                    <label for="handphone" class="form-label">Ubah Nomor Hp</label>
                                                                                    <input type="text" class="form-control" name="handphone" wire:model='handphone'>
                                                                                        @error('handphone') <span class="text-danger">{{ $message }}</span> @enderror
                                                                                </div>
                                                                                <div>
                                                                                    <button
                                                                                        type="submit" class="btn btn-sm btn-primary">Disimpan</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-md-5 border-right">
                                        <div class="p-3 py-5">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <h4 class="text-right">Profile Edit</h4>
                                            </div>
                                            <form action="" enctype="multipart/form-data" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="row mt-2">
                                                    <div class="col-md-12"><label class="labels">Nama</label><input type="text"
                                                            class="form-control" placeholder="Place your name.."
                                                            value="{{ Auth::user()->name }}" name="name" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-md-12">
                                                        <label class="labels">Upload Avatar</label>
                                                        <input type="file" class="form-control" id="image" name="avatar">
                                                    </div>
                                                </div>
                                                <div class="mt-5 text-center"><button class="btn btn-primary profile-button"
                                                        type="submit">Save
                                                        Profile</button></div>
                                            </form>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div wire:ignore.self  id="alamat" class="tab-pane fade">
                        <div class="p-3 pt-5">
                            <div class="row">
                                <div class="col-6">
                                    <div class="search">
                                        <form class="form-inline my-2 my-lg-0 d-flex">
                                            <input class="form-control mr-sm-2" type="search" placeholder="Search"
                                                aria-label="Search" style="width: 60%">
                                            <button class="btn my-2 my-sm-0" style="background-color: #ff4200;" type="submit"><i
                                                    style="color: white" class="fa fa-search" aria-hidden="true"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col" style="position: relative">
                                    <button class="btn"
                                        style="background-color: #ff4200; color:white; position: absolute; right: 0;">Tambah
                                        Alamat Baru</button>
                                </div>
                            </div>
        
                            <div class="mt-3 p-4 alamat"
                                style="background-color: #ff440010; width: 100%; border: 1px solid rgba(221, 221, 221, 0.466); border-radius: 10px">
                                <p class="m-0" style="font-weight: 700; font-family: inter; font-size: 16;">Rumah</p>
                                <p class="m-0" style="font-family: inter; font-size: 16;">+6287088630874</p>
                                <p class="m-0" style="font-family: inter; font-size: 16;">Kober, Kec. Beji, Kota Depok, Jawa
                                    Bara..</p>
                                <p class="my-3" style="font-family: inter; font-size: 16;"><span><img
                                            src="{{ asset('frontend/img/ico/default/location-on.svg') }}"
                                            alt=""></span> Sudah Pinpoint</p>
                                <div class="m-0 p-0 btn" onclick="popUpAlamat()"
                                    style="font-family: inter; font-size: 16;color: #ff4200">ubah alamat</div>
                            </div>
        
                            <div class="mt-3 p-4 alamat"
                                style="width: 100%; border: 1px solid rgba(221, 221, 221, 0.466); border-radius: 10px">
                                <p class="m-0" style="font-weight: 700; font-family: inter; font-size: 16;">Rumah</p>
                                <p class="m-0" style="font-family: inter; font-size: 16;">+6287088630874</p>
                                <p class="m-0" style="font-family: inter; font-size: 16;">Kober, Kec. Beji, Kota Depok, Jawa
                                    Bara..</p>
                                <p class="my-3" style="font-family: inter; font-size: 16;"><span><img
                                            src="{{ asset('frontend/img/ico/default/location-on.svg') }}"
                                            alt=""></span> Sudah Pinpoint</p>
                                <button class="m-0 p-0 btn" onclick="popUpAlamat()"
                                    style="font-family: inter; font-size: 16;color: #ff4200">ubah alamat</button>
                            </div>
        
                            <div class="mt-3 p-4 alamat"
                                style="width: 100%; border: 1px solid rgba(221, 221, 221, 0.466); border-radius: 10px">
                                <p class="m-0" style="font-weight: 700; font-family: inter; font-size: 16;">Rumah</p>
                                <p class="m-0" style="font-family: inter; font-size: 16;">+6287088630874</p>
                                <p class="m-0" style="font-family: inter; font-size: 16;">Kober, Kec. Beji, Kota Depok, Jawa
                                    Bara..</p>
                                <p class="my-3" style="font-family: inter; font-size: 16;"><span><img
                                            src="{{ asset('frontend/img/ico/default/location-on.svg') }}"
                                            alt=""></span> Sudah Pinpoint</p>
                                <button class="m-0 p-0 btn" onclick="popUpAlamat()"
                                    style="font-family: inter; font-size: 16;color: #ff4200">ubah alamat</button>
                            </div>
        
                            <div class="mt-3 p-4 alamat"
                                style="width: 100%; border: 1px solid rgba(221, 221, 221, 0.466); border-radius: 10px">
                                <p class="m-0" style="font-weight: 700; font-family: inter; font-size: 16;">Rumah</p>
                                <p class="m-0" style="font-family: inter; font-size: 16;">+6287088630874</p>
                                <p class="m-0" style="font-family: inter; font-size: 16;">Kober, Kec. Beji, Kota Depok, Jawa
                                    Bara..</p>
                                <p class="my-3" style="font-family: inter; font-size: 16;"><span><img
                                            src="{{ asset('frontend/img/ico/default/location-on.svg') }}"
                                            alt=""></span> Sudah Pinpoint</p>
                                <button class="m-0 p-0 btn" onclick="popUpAlamat()"
                                    style="font-family: inter; font-size: 16;color: #ff4200">ubah alamat</button>
                            </div>
                        </div>
                    </div>
                    <div wire:ignore.self  id="pembayaran" class="tab-pane fade">
                        <div class="p-4 pt-5">
                            <div class="row">
                                <div class="col-6">
                                    <div class="pe-3">
                                        <div class="p-1">
                                            <h4>Hai Subhan,</h4>
                                            <h4>selamat datang dihalaman</h4>
                                            <h4 class="fw-bold">Pengaturan Pembayaran</h4>
        
                                            <p style="color: rgb(161, 161, 161)">Atur pembayaran Anda untuk meningkatkan
                                                keamanan dan kemudahan berbelanja Anda di Tokopedia.</p>
                                            <div style="border-bottom: 1px solid #ddd">
                                                <p class="btn p-0 fw-bold pt-3" href="" style="color: #ff4200;">MbPay</p>
                                            </div>
                                            <div style="border-bottom: 1px solid #ddd">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <p class="btn p-0 fw-bold pt-3" href="">Kartu Kredit / Debit</p>
                                                    </div>
                                                    <div class="col-6" style="position: relative">
                                                        <div style="position: absolute; right: 0">
                                                            <p class="btn p-0 fw-bold pt-3" href="">0 / 4 Tersimpan</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="border-bottom: 1px solid #ddd">
                                                <p class="btn p-0 fw-bold pt-3" href="">Kredivo Express</p>
                                            </div>
                                            <div style="border-bottom: 1px solid #ddd">
                                                <p class="btn p-0 fw-bold pt-3" href="">Debit Instan</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div style="border: 1px solid #ddd; height:500px">
                                        <div style="border-bottom: 2px solid #ddd" class="p-2 pembayaran">
                                            <p>MbPay</p>
                                        </div>
                                        <div class="p-4">
                                            <div class="px-2">
                                                <div style="color: white; background: linear-gradient(#ff4400ad, #ff4200); height: 230px; border-radius: 20px"
                                                    class="p-3">
                                                    <div class="mb-5 pb-3">
                                                        <img src="{{ asset('frontend/img/ico/default/logo2.svg') }}"
                                                            width="120px;">
                                                    </div>
                                                    <p style="font-size: 22px; margin-bottom: 0">**** **** **23 6</p>
                                                    <p style="font-size: 16px">Saldo: Rp0</p>
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <p class="fw-bold" style="font-size: 16px">Akun Tokopedia yang terhubung</p>
                                                <div class="d-flex">
                                                    <div class="pe-3">
                                                        <img src="{{ asset('frontend/img/ico/default/profile-default.svg') }}"
                                                            alt="Avatar" class="avatar rounded-circle pl-5">
                                                    </div>
                                                    <div class="my-2">
                                                        <p class="mb-1 fw-bold" style="font-size: 14px">
                                                            belthandavara.abd@gmail.com</p>
                                                        <p class="mb-1" style="font-size: 12px; color: rgb(112, 112, 112)">
                                                            Terhubung sejak 29 Oct 2021 13:06 WIB</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <p style="font-size: 14px; color: rgb(112, 112, 112)"> <span><i
                                                                style="color: rgb(107, 107, 107); font-size: 15px;"
                                                                class="fa fa-exclamation-circle fa-2x pe-2"
                                                                aria-hidden="true"></i>
                                                        </span> Kamu hanya bisa menyambungkan 1 nomor GoPay ke Tokopedia.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div wire:ignore.self  id="notifikasi" class="tab-pane fade p-4">
                        <h3 class="fw-bold mb-0">Notifikasi</h3>
                        <p style="color: rgb(161, 161, 161)">Atur notifikasi yang ingin kamu terima disini.</p>
        
                        <div class="px-3 my-3" style="background-color: #eee; border-radius: 10px; height:40px">
                            <div class="row notif-text fw-bold">
                                <div class="col-10">
                                    <p>Transaksi</p>
                                </div>
                                <div class="col d-flex justify-content-center">
                                    <p class="">E-mail</p>
                                </div>
                            </div>
                        </div>
                        <div class="px-3 my-2" style="height:40px">
                            <div class="row notif-text fw-bold" style="border-bottom: 2px solid rgba(221, 221, 221, 0.466);">
                                <p> <span><i style="color: rgb(107, 107, 107); font-size: 17px;"
                                            class="fa fa-shopping-cart pe-2" aria-hidden="true"></i>
                                    </span> Transaksi Pembelian</p>
                            </div>
                        </div>
                        <div class="px-3 my-2" style="height:40px">
                            <div class="row notif-text" style="border-bottom: 2px solid rgba(221, 221, 221, 0.466);">
                                <div class="col-10">
                                    <p>Menunggu Pembayaran</p>
                                </div>
                                <div class="col d-flex justify-content-center">
                                    <div style="padding: 10px 0;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                                checked>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-3 my-2" style="height:40px">
                            <div class="row notif-text" style="border-bottom: 2px solid rgba(221, 221, 221, 0.466);">
                                <div class="col-10">
                                    <p>Menunggu Konfirmasi</p>
                                </div>
                                <div class="col d-flex justify-content-center">
                                    <div style="padding: 10px 0;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                                checked>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-3 my-2" style="height:40px">
                            <div class="row notif-text" style="border-bottom: 2px solid rgba(221, 221, 221, 0.466);">
                                <div class="col-10">
                                    <p>Pesanan Diproses</p>
                                </div>
                                <div class="col d-flex justify-content-center">
                                    <div style="padding: 10px 0;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                                checked>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-3 my-2" style="height:40px">
                            <div class="row notif-text" style="border-bottom: 2px solid rgba(221, 221, 221, 0.466);">
                                <div class="col-10">
                                    <p>Pesanan Dikirim</p>
                                </div>
                                <div class="col d-flex justify-content-center">
                                    <div style="padding: 10px 0;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                                checked>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-3 my-2" style="height:40px">
                            <div class="row notif-text" style="border-bottom: 2px solid rgba(221, 221, 221, 0.466);">
                                <div class="col-10">
                                    <p>Pesanan Tiba</p>
                                </div>
                                <div class="col d-flex justify-content-center">
                                    <div style="padding: 10px 0;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                                checked>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-3 my-2" style="height:40px">
                            <div class="row notif-text" style="border-bottom: 2px solid rgba(221, 221, 221, 0.466);">
                                <div class="col-10">
                                    <p>Pengingat</p>
                                </div>
                                <div class="col d-flex justify-content-center">
                                    <div style="padding: 10px 0;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                                checked>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="px-3 my-2" style="height:40px">
                            <div class="row notif-text fw-bold" style="border-bottom: 2px solid rgba(221, 221, 221, 0.466);">
                                <p> <span><i style="color: rgb(107, 107, 107); font-size: 17px;"
                                            class="fa fa-exclamation-circle pe-2" aria-hidden="true"></i>
                                    </span> Promo</p>
                            </div>
                        </div>
                        <div class="px-3 my-2" style="height:40px">
                            <div class="row notif-text" style="border-bottom: 2px solid rgba(221, 221, 221, 0.466);">
                                <div class="col-10">
                                    <p>Newsletter Master Bagasi</p>
                                </div>
                                <div class="col d-flex justify-content-center">
                                    <div style="padding: 10px 0;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                                checked>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div wire:ignore.self class="modal fad text-lefte" id="password" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Password
                    </h5>
                    <button type="button" class="btn-close"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent='updatePassword'>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" wire:model='password'>
                                @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="d-flex justify-content-end" >
                            <button
                                type="submit" class="btn btn-sm btn-primary" style="color: #fff">Disimpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

@endsection --}}


{{-- <form action="" enctype="multipart/form-data" method="POST">

    <div class="rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                        width="150px" src="{{Auth::user()->avatar}}"><span
                        class="font-weight-bold">{{Auth::user()->name}}</span><span
                        class="text-black-50">{{Auth::user()->email}}</span><span> </span></div>
            </div>
            @if (!Auth::user()->id_google)
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Edit</h4>
                    </div>
                    @csrf
                    @method('PUT')
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Name</label><input type="text" class="form-control"
                                placeholder="Place your name.." value="{{Auth::user()->name}}" name="name"
                                autocomplete="off"></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Email</label><input type="email"
                                class="form-control" placeholder="Place your email.." value="{{Auth::user()->email}}"
                                name="email" autocomplete="off"></div>
                    </div>
                    <div class="password"></div>
                    <a class="btn btn-primary btn-sm my-4 changepw">Change Password</a>
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <label class="labels">Upload Avatar</label>
                            <input type="file" class="form-control" id="image" name="avatar">
                        </div>
                    </div>
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save
                            Profile</button></div>
                </div>
            </div>
            @else
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Edit</h4>
                    </div>
                    <form action="" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row mt-2">
                            <div class="col-md-12"><label class="labels">Nama</label><input type="text"
                                    class="form-control" placeholder="Place your name.." value="{{Auth::user()->name}}"
                                    name="name" autocomplete="off"></div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label class="labels">Upload Avatar</label>
                                <input type="file" class="form-control" id="image" name="avatar">
                            </div>
                        </div>
                        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save
                                Profile</button></div>
                    </form>
                </div>
            </div>
            @endif
            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience"><span>Personal
                            Data</span></div>
                    <br>
                    <div class="col-md-12"><label class="labels">Jenis Kelamin</label>
                        <select class="form-select" aria-label="Default select example" name="gender">
                            @if (!Auth::user()->gender)
                            <option selected>Pilih jenis kelamin</option>
                            <option value="Pria">Pria</option>
                            <option value="Perempuan">Perempuan</option>
                            @else
                            <option {{Auth::user()->gender == 'Pria' ?'selected':''}} value="Pria">Pria</option>
                            <option {{Auth::user()->gender == 'Perempuan' ?'selected':''}} value="Perempuan">Perempuan
                            </option>
                            @endif
                        </select>
                    </div>
                    <br>
                    <div class="col-md-12"><label class="labels">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="birthday" value="{{Auth::user()->birthday}}">
                    </div>
                    <br>
                    <div class="col-md-12"><label class="labels">Handphone</label>
                        <input type="text" class="form-control" placeholder="Phone Number" name="handphone"
                            value="{{Auth::user()->handphone}}">
                    </div>
                    <br>
                    <div class="col-md-12"><label class="labels">Zipcode</label>
                        <input type="text" class="form-control" placeholder="Zipcode" name="zipcode"
                            value="{{Auth::user()->zipcode}}">
                    </div>
                    <br>
                    <div class="col-md-12"><label class="labels">Alamat</label>
                        <div class="mb-3">
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="address"
                                rows="5">{{Auth::user()->address}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form> --}}


