<div id="keranjg" class="py-0 cekbox-oren">
    <div class="row pt-5 mx-5" style="margin-top: 5.5rem">
        <div class="col-9">
            <h4 class="fw-bold mb-3">Keranjang</h4>
            <div class="kotak1">
                <div class="d-flex justify-content-between">
                    <div class="form-check cekbox-oren d-flex">
                        <input class="form-check-input my-auto" type="checkbox" value="54" id="flexCheckChecked">
                        <label class="form-check-label my-auto ms-3" for="flexCheckChecked">Pilih semua</label>
                    </div>
                    <div class="btn fw-bold">Hapus</div>
                </div>
            </div>
            <div class="min-vh-100 px-2">
                @forelse ($cart as $item)
                <div class="kotak2">
                    <div class="d-flex align-items-center">
                        <div class="form-check cekbox-oren">
                            <input class="form-check-input my-auto" type="checkbox" value="" id="flexCheckChecked">
                        </div>
                        <div class="d-flex ms-3 w-100">
                            @if ($item->product->ProductImages->isEmpty())
                            <img src="{{asset('frontend/img/default_product.png')}}" width="70px">
                            @else
                            <img src="{{asset('/image/uploads/products/'.$item->product->_ProductImages->image)}}" width="70px">
                            @endif
                            <div class="cart-detail d-flex flex-column justify-content-center ms-3 w-50">
                                <p>{{$item->product->name}}</p>
                                <div>
                                    @if ($item->product->brand || $item->product->category || $item->product->province)
                                    <span>{{ $item->product->brand }}</span><span class="px-1">|</span><span>{{ $item->product->category->name }}</span><span class="px-1">|</span><span>{{$item->product->name}}</span>
                                    @else
                                        
                                    @endif
                                    {{-- <span>{{ $item->product->brand }}</span><span class="px-1">|</span><span>{{ $item->product->category->name }}</span><span class="px-1">|</span><span>{{$item->product->name}}</span> --}}
                                </div>
                                <div class="d-flex gap-2 mt-2">
                                    <div class="d-flex justify-content-between w-75">
                                        <p> <strong> Rp{{ number_format($item->product->selling_price,0,',','.') }}</strong></p>
                                        <p class="fw-bold ">|</p>
                                    </div>
                                    <p class="fw-bold "><strong>{{ $item->product->weight }} Kg</strong></p>
                                </div>
                                @php
                                $total += $item->quantity * $item->product->selling_price;
                                @endphp
                            </div>
                        </div>

                    </div>
                    <div class="row align-items-center pt-1 mt-4">
                        <div class="col flex-column">
                            <div class="btn mx-4" style="color: #ff4200; font-size: 12px; " onclick="$(this).next().toggleClass('d-none')"> 
                                <a>Tambah Catatan</a>
                            </div>
                            <textarea class="input-tambah-catatan mx-5 d-none" placeholder="Catatan" cols="10" rows="1" onfocus="auto_grow(this)" onkeypress="auto_grow(this)" onkeyup="auto_grow(this)" maxlength="144" style="resize:none; overflow: hidden;" spellcheck="false"></textarea>
                        </div>
                        <div class="col d-flex justify-content-end align-items-center ">
                            <div class="btn me-3" style="font-size: 12px; "> <a
                                wire:click='addToWishlist({{ $item->id }})'>Tambahkan ke
                                Wishlist</a>
                            </div>
                            <a class="trash-icon py-2 px-4 border-start border-2" wire:click='deleteCart({{ $item->id }})'>
                                <i class="far fa-trash-alt fa-lg"></i>
                            </a>
                            <span class="btn btn1 btn-circle mt-0" wire:click='decrementQuantity({{ $item->id }})'><i
                                class="fa fa-minus fa-lg"></i></span>
                            <input readonly type="text" value="{{ $item->quantity }}" class="input-quantity mt-0" style="border-bottom: 1px solid grey" />
                            <span class="btn btn1 btn-circle mt-0" wire:click='incrementQuantity({{ $item->id }})'><i
                                    class="fa fa-plus"></i></span>
                        </div>
                    </div>
                </div>
                @empty
                <h3>Opss... Keranjang Masih Kosong</h3>
                @endforelse
            </div>
        </div>
        <div class="col-3">
            <div id="checkoutFixed">
                <div class="px-3 shadow border rounded">
                    {{-- <div class="shadow bg-body rounded p-3">
                        <button type="button" class="border border-2 d-flex justify-content-between gap-2 p-3" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" style="background-color: transparent; width: 100%; border-color:#d7d7d7 !important;">
                            <img src="{{ asset('frontend/img/promo/icon-promo.svg') }}" alt="">
                            <h6 class="fw-bold my-auto">Makin hemat pakai promo</h6>
                            <i class="fa-solid fa-angle-right mt-2"></i>
                        </button>

                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <h4 class="ms-2 fw-bold" style="color: #ff4200">Pakai Promo</h4>
                                        <form action="">
                                            <input type="text" class="mt-2 p-3 form-control" placeholder="Masukkan kode promo">
                                            <input type="submit" hidden />
                                        </form>
                                        <div class="d-flex justify-content-end mt-3">
                                            <div class="btn btn-kode-promo px-4 py-0">
                                                Kode Promo Berjalan
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="bg-body rounded p-3">
                        <h6 class="fw-bold">Ringkasan belanja</h6>
                        <div class="d-flex justify-content-between my-3 border-bottom border-3">
                            <h6 style="font-size: 0.8rem">Total harga (5 Barang)</h6>
                            <h6 style="font-size: 0.8rem">Rp{{ number_format($total,2,',','.') }}</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="fw-bold">Total Belanja</h6>
                            <h6 class="fw-bold">Rp{{ number_format($total,2,',','.') }}</h6>
                        </div>
                        <a href="/checkout">
                            <div wire:ignore class=" w-100 btn btn-checkout-pembayaran text-center my-2" id="pay-button">
                                Bayar (5)
                            </div>
                        </a>
                        <p class="mb-0 p-2 rounded" style="background-color: #f4f4f4; font-size: 0.6rem">Lakukan pembayaran belanja untuk melanjutkan proses pengemasan kiriman</p>
                        <div class="d-flex justify-content-between mt-3 mb-1 border-bottom border-3">
                            <h6 style="font-size: 0.8rem">Estimasi biaya kirim</h6>
                            <h6 style="font-size: 0.8rem" class="fw-bold">Rp{{ number_format($total,2,',','.') }}</h6>
                        </div>
                        <p class="mb-0 p-2 rounded" style="background-color: #f4f4f4; font-size: 0.6rem">Akan ditagihkan ketika barang Anda sudah siap dikirim</p>
                    </div>
                </div>
                <div class="px-3 py-2 shadow border mt-3 rounded">
                    <div class="bg-body rounded mt-2">
                        <div data-bs-toggle="modal" data-bs-target="#discountBersama">
                            <a class="d-flex w-100 btn btn-krk btn-warni rounded" style="font-size: 18px; line-height: 23px; text-align: left; letter-spacing: 0.05em; align-items: center">
                                <img src="https://masterbagasi.online/frontend/img/ico/cart/cart-promo.svg" class="me-4">Makin hemat dengan keranjang bersama <i class="fa-solid fa-angle-right my-auto" aria-hidden="true"></i>
                            </a>
                        </div>
                        <p class="mb-0 p-2 rounded mt-3 ms-2" style="background-color: #f4f4f4; font-size: 0.6rem; width: 95%; text-align: justify">Kamu bisa mengundang teman-teman kamu untuk belanja dalam satu keranjang bersama untuk mendapatkan potongan harga pengiriman, atau gabung dengan keranjang teman kamu.
                        </p>

                        <!-- Popup button Promo Keranjang Bersama -->
                        <div class="modal fade" id="discountBersama" tabindex="-1" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-modal="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="container">
                                            <div class="row d-flex flex-row justify-content-center align-items-center mx-2 my-2">
                                                <div class="col">
                                                    <img src="https://masterbagasi.online/frontend/img/ico/cart/cart-mastah.svg" >
                                                </div>
                                                <div class="col">
                                                    <img src="https://masterbagasi.online/frontend/img/ico/cart/cart-bagas.svg" >
                                                </div>
                                            </div>
                                            <div class="row d-flex justify-content-center align-items-center mx-2 my-2">
                                                <div class="col btn btn-krk btn-warni rounded me-2" data-bs-toggle="modal" data-bs-target="#jadiTuanRumah">
                                                    <a>Jadi Tuan Rumah</a>
                                                </div>
                                                <div class="col btn btn-border btn-oren p-2 me-2" data-bs-toggle="modal" data-bs-target="#titipBelanja">
                                                    <a style="color: white">Titip Belanja</a>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Popup button Promo Keranjang Bersama Berakhir-->

                        <!-- Popup button Jadi Tuan Rumah -->
                        <div class="modal fade" id="jadiTuanRumah" tabindex="-1" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-modal="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="container">
                                            <div class="d-flex my-2 py-2 justify-content-center align-items-center rounded" style="color: #FF4200; font-size: 20px; line-height: 16px; letter-spacing: 0.05em; border: 3px solid transparent; background: linear-gradient(#fff,#fff) padding-box, conic-gradient(from -90deg, #FF4200 0deg, #FF4200 180deg, #25258C 150deg, #25258C 270deg, #00A9EA 90deg, #00A9EA 90deg) border-box;">
                                                <h5 class="fw-bold mt-1">Keranjang Tuan Rumah</h5>
                                            </div>
                                            <form action="">
                                                <div class="mt-4">
                                                    <h6 class="fw-bold">Buat ID Keranjang Bersama</h6>
                                                    <input type="text" class="px-3 py-2 form-control" placeholder="ID Keranjang Bersama">
                                                </div>
                                                <div class="mt-3">
                                                    <h6 class="fw-bold">Buat Password Keranjang</h6>
                                                    <input type="text" class="px-3 py-2 form-control" placeholder="Password Keranjang Bersama">
                                                </div>
                                                <div class="mt-4 w-100 btn btn-checkout-pembayaran text-center my-2"><a href="#" class="text-white fs-5 fw-bold" style="letter-spacing: 0.03em;">Selesai</a></div>
                                            </form>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Popup button Jadi Tuan Rumah Berakhir -->

                        <!-- Popup button Titip Belanja -->
                        <div class="modal fade" id="titipBelanja" tabindex="-1" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-modal="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="container">
                                            <div class="d-flex my-2 py-2 justify-content-center align-items-center rounded" style="color: #FF4200; font-size: 20px; line-height: 16px; letter-spacing: 0.05em; border: 3px solid transparent; background: rgba(255, 66, 0, 0.2);">
                                                <h5 class="fw-bold mt-1">Titip Keranjang Teman</h5>
                                            </div>
                                            <form action="">
                                                <div class="mt-4">
                                                    <h6 class="fw-bold">Cari ID Keranjang</h6>
                                                    <input type="text" class="px-3 py-2 form-control" placeholder="Tulis ID Keranjang">
                                                </div>
                                                <div class="mt-3">
                                                    <h6 class="fw-bold">Password Keranjang</h6>
                                                    <input type="text" class="px-3 py-2 form-control" placeholder="Ketik Password">
                                                </div>
                                                <div class="mt-4 w-100 btn btn-checkout-pembayaran text-center my-2"><a href="#" class="text-white fs-5 fw-bold" style="letter-spacing: 0.03em;">Bergabung</a></div>
                                            </form>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Popup button Titip Belanja Berakhir -->
                    </div>
                </div>
            </div>
        </div>   
    </div>
</div>




{{-- <div id="keranjg" class="py-0 cekbox-oren">
    <div class="row mt-5 pt-5">
        <div class="col-8">
            <h4 class="fw-bold mb-3">Keranjang</h4>
            <div class="kotak1">
                <div class="d-flex justify-content-between">
                    <div class="form-check cekbox-oren d-flex">
                        <input class="form-check-input my-auto" type="checkbox" value="54" id="flexCheckChecked">
                        <label class="form-check-label my-auto ms-3" for="flexCheckChecked">Pilih semua</label>
                    </div>
                    <div class="btn fw-bold">Hapus</div>
                </div>
            </div>
            @forelse ($cart as $item)
            <div class="kotak2"> --}}
                {{-- <div class="d-flex">
                    <div class="px-2">
                        <div class="form-check">
                            <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckChecked" checked>
                        </div>
                    </div>
                    <div>
                        @if ($item->product->brand || $item->product->category)
                        <p style="font-size: 16px; margin-bottom: 0">{{$item->product->brand}}</p>
                        <p style="font-size: 12px; color: rgb(163, 162, 162)">{{$item->product->category->name}}</p>
                        @else
                            
                        @endif
                    </div>
                </div> --}}
                {{-- <div class="d-flex align-items-center">
                    <div class="form-check cekbox-oren">
                        <input class="form-check-input my-auto" type="checkbox" value="" id="flexCheckChecked">
                    </div>
                    <div class="d-flex ms-3">
                        <img src="{{asset('/image/uploads/products/'.$item->product->_ProductImages->image)}}" width="70px">
                        <div class="cart-detail d-flex flex-column justify-content-center ms-3">
                            <p>{{$item->product->name}}</p>
                            <span>Hastag Bran <span>|</span><span>Hastag Category Product #18</span></span>
                            <p> <strong> Rp{{ number_format($item->product->selling_price,0,',','.') }}</strong></p>
                            @php
                            $total += $item->quantity * $item->product->selling_price;
                        @endphp
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col">
      
                    </div>
                    <div class="col" style="position: relative">
                        <div class="btn" style="color: #ff4200; font-size: 12px; position: absolute; right: 0;"> <button class="round-black-btn small-btn"
                            wire:click='addToWishlist({{ $item->id }})'>Add to
                            Wishlist</button>
                        </div>
                    </div>
                    <div class="col  d-flex">
                        <a class="trash-icon pt-3 px-3" wire:click='deleteCart({{ $item->id }})'>
                            <i class="far fa-trash-alt"></i>
                        </a>
                        <span class="btn btn1" wire:click='decrementQuantity({{ $item->id }})'><i
                            class="fa fa-minus"></i></span>
                    <input readonly type="text" value="{{ $item->quantity }}" class="input-quantity" />
                    <span class="btn btn1" wire:click='incrementQuantity({{ $item->id }})'><i
                            class="fa fa-plus"></i></span>
                    </div>
                </div>
            </div>
            @empty
                
            @endforelse
        </div>
        <div class="col-lg-4 ps-5">
            <div class="px-3 py-2 " id="checkoutFixed">
                <div class="shadow bg-body rounded p-3">
                    <button type="button" class="border border-3 d-flex justify-content-between gap-4 py-3 px-5" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" style="background-color: transparent; width: 100%; border-color:#505050 !important;">
                        <i class="fa-solid fa-percent my-auto rounded-circle p-1"></i>
                        <h6 class="fw-bold my-auto">Makin hemat pakai promo</h6>
                        <i class="fa-solid fa-angle-right my-auto"></i>
                    </button>

                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <h4 class="ms-2 fw-bold" style="color: #ff4200">Pakai Promo</h4>
                                    <form action="">
                                        <input type="text" class="mt-2 p-3 form-control" placeholder="Masukkan kode promo">
                                        <input type="submit" hidden />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shadow bg-body rounded p-2 my-2">
                    <h6 class="fw-bold">Ringkasan belanja</h6>
                    <div class="d-flex justify-content-between mt-3">
                        <h6>Total harga (5 Produk)</h6>
                        <h6>Rp{{ number_format($total,2,',','.') }}</h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6>Estimasi Pengiriman</h6>
                        <h6>Rp{{ number_format($total,2,',','.') }}</h6>
                    </div>
                    <hr>
                    <h6 class="fw-bold">Total tagihan</h6>
                    <h6>{{ number_format($total,2,',','.') }}</h6>
                    <a href="/checkout">
                        <div wire:ignore class=" w-100 btn btn-checkout-pembayaran text-center mt-3" id="pay-button">
                            Bayar
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div> --}}