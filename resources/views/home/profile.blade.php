@extends('layouts.app')
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
      {{-- livewire --}}
      <livewire:frontend.user.user-settings>
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


