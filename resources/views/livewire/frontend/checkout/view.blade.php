{{-- <div class="py-3 py-md-4 checkout">
    <div class="container">
        <h4>Checkout</h4>
        <hr>

        @if ($this->totalCartAmount != 0 )
        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="shadow bg-white p-3">
                    <h4 class="text-primary">
                        Item Total Amount :
                        <span class="float-end">Rp.{{ number_format($this->totalCartAmount,2,',','.') }} </span>
                    </h4>
                    <hr>
                    <small>* Items will be delivered in 3 - 5 days.</small>
                    <br/>
                    <small>* Tax and other charges are included ?</small>
                </div>
            </div>
            <div class="col-md-12">
                <div class="shadow bg-white p-3">
                    <h4 class="text-primary">
                        Customer Information
                    </h4>
                    <hr>

                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Full Name</label>
                                <input  type="text" wire:model="fullname" class="form-control" id="fullname" placeholder="Enter Full Name" />
                                @error('fullname') <small class="text-danger">{{$message}}</small>  @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Phone Number</label>
                                <input  type="number" wire:model="phone" class="form-control" id="phone" placeholder="Enter Phone Number" />
                                @error('phone') <small class="text-danger">{{$message}}</small>  @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Email Address</label>
                                <input  type="email" wire:model="email" class="form-control" id="email" placeholder="Enter Email Address" />
                                @error('email') <small class="text-danger">{{$message}}</small>  @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Pin-code (Zip-code)</label>
                                <input  type="number" wire:model="pincode" class="form-control" id="pincode" placeholder="Enter Pin-code" />
                                @error('pincode') <small class="text-danger">{{$message}}</small>  @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Full Address</label>
                                <textarea  wire:model="address" id="address" class="form-control" rows="5"></textarea>
                                @error('address') <small class="text-danger">{{$message}}</small>  @enderror
                            </div>
                            <small>*you can change this information from edit profile</small>
                        </div>
                    </form>
                    <div wire:ignore>
                       <button class="btn btn-primary " id="pay-button">Bayar</button>
                    </div>

                    <div>
                        
                    </div>
                </div>
            </div>
        </div>
        @else
            <h1>No Product to checkout</h1>
        @endif
       
    </div>
</div> --}}

<div class="pt-5 container checkoutnew">
    <div class="row mx-5" style="margin-top: 5.5rem">
        <div class="col-md-8">
            <div class="d-flex">
                <a href="https://masterbagasi.online/cart" class="me-2 mt-2">
                    <i class="fa-solid fa-arrow-left"></i>
                </a>
                <h2 class="fw-bold">Checkout</h2>
            </div>
            <div class="alamat-pengiriman mt-3 py-3">
                <h5 class="fw-bold">Alamat Pengiriman</h5>
                <hr>
                <h5 class="fw-bold">Amir Hamzah <span class="fw-normal"> (Kantor) </span></h5>
                <!-- <h6>081513191399</h6> -->
                <h6 class="mt-3" style="line-height: 20px">Pesona Depok Estate II Blok AY No.2 RW.2 Mekar Jaya Depok, Jawa Barat Kode Pos 16411 <br> Sukma Jaya, Kota Depok.</h6>
            </div>
            <div class="action-alamat mt-3 gap-3" data-bs-toggle="modal" data-bs-target="#pilihAlamatLain">
                <div class="btn btn-krk btn-warni" style="width: 12rem">Pilih Alamat Lain</div>
                <!-- <div class="btn btn-checkout-alamat">Kirim Ke Beberapa Alamat</div> -->
            </div>
            
            <!-- Popup Pilih Alamat -->
            <div  class="modal fade" id="pilihAlamatLain" tabindex="-1" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-modal="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="mt-2 fw-bold" style="margin-left: 7.5rem; line-height: 23px; letter-spacing: 0.05em">Pilih Alamat Pengiriman</h5>
                        </div>
                        <div class="modal-body">
                            <form class="d-flex my-0" action="">
                                <input type="text" class="mt-2 p-2 form-control" placeholder="Tulis Nama Alamat / Kota / Kecamatan tujuan pengiriman" style="background-color: #f4f4f4">
                            </form>
                            <div data-bs-toggle="modal" data-bs-target="#tambahAlamatBaru">
                                <div class="d-flex ms-2 mt-4 fs-5 fw-bold justify-content-center align-items-center btn" style="height: 3rem; color: #FF4200; background: rgba(255, 66, 0, 0.2); width: 95%">Tambah Alamat Baru</div>
                            </div>
                            <div>
                                <div class="mt-3" style="border: 1px solid black; border-radius: 10px">
                                    <div class="d-flex m-3 p-2 justify-content-between" style="background: #FF4200; border-radius: 10px">
                                        <div>
                                            <div class="d-flex">
                                                <h6 class="fw-bold mt-2" style="font-size: 14px; color: white">Amir Hamzah</h6>
                                                <h6 class="ms-1 mt-2" style="font-size: 14px; color: white">(kantor)</h6>
                                            </div>
                                            <h6 style="font-size: 14px; color: white">0858585858585</h6>
                                        </div>
                                        <div class="d-flex mt-2 justify-content-center align-items-center btn" style="font-size: 14px; background: #FF4200; border: 1px solid white; color: white; height: 2.5rem; width: 12rem">Alamat Pengiriman</div>
                                    </div>
                                    <div class="col-8 ms-3">
                                        <h6 style="font-size: 12px; text-align: justify">Pesona Depok Estate II Blok AY No.2 RW.2 Mekar Jaya Depok, Jawa Barat Kode Pos 16411 (MasterBagasi) Sukmajaya, Kota Depok, 16411 Jawa Barat Indonesia Raya</h6>
                                    </div>
                                    <div class="d-flex col-8 ms-3 justify-content-between">
                                        <p class="fw-bold" style="font-size: 14px; color: #FF4200">Ubah Alamat</p>
                                        <p>|</p>
                                        <p class="fw-bold" style="font-size: 14px; color: #FF4200">Jadikan Alamat Utama</p>
                                    </div>
                                </div>
                                <div class="mt-3" style="border: 1px solid black; border-radius: 10px">
                                    <div class="mx-3 mt-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="col-8">
                                                <div class="d-flex">
                                                    <h6 class="fw-bold mt-1" style="font-size: 14px">Amir Hamzah</h6>
                                                    <h6 class="ms-1 mt-1" style="font-size: 14px">(kantor)</h6>
                                                </div>
                                                <h6 style="font-size: 14px">0858585858585</h6>
                                                <hr>
                                                <h6 style="font-size: 12px; text-align: justify">Pesona Depok Estate II Blok AY No.2 RW.2 Mekar Jaya Depok, Jawa Barat Kode Pos 16411 (MasterBagasi) Sukmajaya, Kota Depok, 16411 Jawa Barat Indonesia Raya</h6>
                                            </div>
                                            <div class="d-flex mt-2 justify-content-center align-items-center btn" style="font-size: 14px; background: #FF4200; border: 1px solid white; color: white; height: 2.5rem; width: 8rem">Pilih Alamat</div>
                                        </div>
                                    </div>
                                    <div class="d-flex col-8 ms-3 justify-content-between">
                                        <p class="fw-bold" style="font-size: 14px; color: #FF4200">Ubah Alamat</p>
                                        <p>|</p>
                                        <p class="fw-bold" style="font-size: 14px; color: #FF4200">Jadikan Alamat Utama</p>
                                    </div>
                                </div>
                                <div class="mt-3" style="border: 1px solid black; border-radius: 10px">
                                    <div class="mx-3 mt-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="col-8">
                                                <div class="d-flex">
                                                    <h6 class="fw-bold mt-1" style="font-size: 14px">Amir Hamzah</h6>
                                                    <h6 class="ms-1 mt-1" style="font-size: 14px">(kantor)</h6>
                                                </div>
                                                <h6 style="font-size: 14px">0858585858585</h6>
                                                <hr>
                                                <h6 style="font-size: 12px; text-align: justify">Pesona Depok Estate II Blok AY No.2 RW.2 Mekar Jaya Depok, Jawa Barat Kode Pos 16411 (MasterBagasi) Sukmajaya, Kota Depok, 16411 Jawa Barat Indonesia Raya</h6>
                                            </div>
                                            <div class="d-flex mt-2 justify-content-center align-items-center btn" style="font-size: 14px; background: #FF4200; border: 1px solid white; color: white; height: 2.5rem; width: 8rem">Pilih Alamat</div>
                                        </div>
                                    </div>
                                    <div class="d-flex col-8 ms-3 justify-content-between">
                                        <p class="fw-bold" style="font-size: 14px; color: #FF4200">Ubah Alamat</p>
                                        <p>|</p>
                                        <p class="fw-bold" style="font-size: 14px; color: #FF4200">Jadikan Alamat Utama</p>
                                    </div>
                                </div>
                                <div class="mt-3" style="border: 1px solid black; border-radius: 10px">
                                    <div class="mx-3 mt-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="col-8">
                                                <div class="d-flex">
                                                    <h6 class="fw-bold mt-1" style="font-size: 14px">Amir Hamzah</h6>
                                                    <h6 class="ms-1 mt-1" style="font-size: 14px">(kantor)</h6>
                                                </div>
                                                <h6 style="font-size: 14px">0858585858585</h6>
                                                <hr>
                                                <h6 style="font-size: 12px; text-align: justify">Pesona Depok Estate II Blok AY No.2 RW.2 Mekar Jaya Depok, Jawa Barat Kode Pos 16411 (MasterBagasi) Sukmajaya, Kota Depok, 16411 Jawa Barat Indonesia Raya</h6>
                                            </div>
                                            <div class="d-flex mt-2 justify-content-center align-items-center btn" style="font-size: 14px; background: #FF4200; border: 1px solid white; color: white; height: 2.5rem; width: 8rem">Pilih Alamat</div>
                                        </div>
                                    </div>
                                    <div class="d-flex col-8 ms-3 justify-content-between">
                                        <p class="fw-bold" style="font-size: 14px; color: #FF4200">Ubah Alamat</p>
                                        <p>|</p>
                                        <p class="fw-bold" style="font-size: 14px; color: #FF4200">Jadikan Alamat Utama</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Popup Tambah Alamat Baru -->
            <div class="modal fade" id="tambahAlamatBaru" tabindex="-1" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="mt-2 fw-bold" style="margin-left: 7.5rem; line-height: 23px; letter-spacing: 0.05em">Tambah Alamat Baru</h5>
                        </div>
                        <div class="modal-body">
                            <div class="d-flex justify-content-between p-2 rounded" style="background: #FF420033; margin-bottom: 1rem">
                                <h5 style="color: #FF4200; font-size: 16px; font-weight: 500; line-height: 14px; letter-spacing: 0.03em; margin-top: 0.8rem">Safe time. Autofill your current location.</h5>
                                <div class="d-flex fw-bold justify-content-center align-items-center btn mt-1" style="font-size: 16px; background: white; border: 1px solid white; color: #FF4200; height: 2rem; width: 6rem">Autofill</div>
                            </div>
                            <form action="">
                                <input type="hidden">
                                <div class="my-2"> 
                                    <h6 class="d-flex align-items-end">Negara Tinggal</h6>
                                    <input type="text" class="p-2 form-control" placeholder="Negara Tinggal">
                                </div>
                                <div class="mb-2"> 
                                    <h6 class="d-flex align-items-end">Nama Lengkap (Depan dan belakang)</h6>
                                    <input type="text" class="p-2 form-control" placeholder="Nama Lengkap">
                                </div>
                                <div class="mb-2"> 
                                    <h6 class="d-flex align-items-end">Nomor Telepon</h6>
                                    <input type="text" class="p-2 form-control" placeholder="0123456789">
                                </div>
                                <div class="mb-2"> 
                                    <h6 class="d-flex align-items-end">Alamat</h6>
                                    <input type="text" class="p-2 form-control mb-1" placeholder="Nama jalan">
                                    <input type="text" class="p-2 form-control" placeholder="Gedung, unit, lantai, lainnya">
                                </div>
                                <div class="mb-2"> 
                                    <h6 class="d-flex align-items-end">Kota</h6>
                                    <input type="text" class="p-2 form-control" placeholder="Kota">
                                </div>
                                <div class="mb-2"> 
                                    <h6 class="d-flex align-items-end">Negara</h6>
                                    <input type="text" class="p-2 form-control" placeholder="Negara">
                                </div>
                                <div class="mb-2"> 
                                    <h6 class="d-flex align-items-end">Zip Code</h6>
                                    <input type="text" class="p-2 form-control" placeholder="Zip Code">
                                </div>
                                <div class="d-flex align-items-center p-2 mt-1">
                                    <input type="checkbox" class="me-2">
                                    <label for="" style="font-weight: 300; font-size: 14px; line-height: 13px;">jadikan sebagai alamat utama</label>
                                </div>
                                <h5 class="mt-3">Delivery instrustions (optional)</h5>
                                <h6 class="mt-3" style="font-weight: 300; font-size: 14px; line-height: 13px;">Add preferences, notes, access codes and more</h6>
                                <button class="btn mt-1" style="background: #FF4200; color: white; width: 12rem">Tambah Alamat</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div class="checkout-items d-flex gap-3 py-4">
                <div class="container">
                    <div class="row row-cols-3">
                        @foreach ($carts as $cart)
                        <div class="checkout-item col-md-6">
                            <div class="d-flex gap-3">
                                <img src="{{ asset('image/uploads/products/'.$cart->product->_ProductImages->image) }}" alt="tes" class="checkout-img-product rounded">
                                <div>
                                    <h5>{{$cart->product->name}}</h5>
                                    <div class="d-flex text-muted">
                                        <p class="me-2">#HashtagBrand</p>
                                        <p class="mx-2">|</p>
                                        <p class="mx-2">Hashtag Category Product #18</p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="fw-bold">Rp{{ number_format($cart->product->selling_price,0,',','.') }}</h5>
                                        <h6 class="fw-bold me-5">| {{$cart->product->weight}} Kg</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="align-items-center gap-3 mt-3 mb-5">
                                <p class="mb-0 ms-2 p-2 mt-2 rounded" style="background-color: #f4f4f4; font-size: 0.8rem; width: 90%">Catatan Tentang Barang ini <a href="#" class="d-flex justify-content-center"><i class="fa-solid fa-angle-down" style="color: #FF4200"></i></a></p>
                                
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 mt-3">
            <div class="px-3 py-2" id="checkoutFixed">
                <!-- <div class="shadow bg-body rounded p-3">
                    {{-- <div class="border border-3 d-flex gap-4 p-2">
                        <img src="test" alt="test">
                        <h6 class="fw-bold">Makin hemat pakai promo</h6>
                        <div class="text-muted">></div>
                    </div> --}}
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
                </div> -->
                <div class="shadow bg-body rounded p-4 mt-2">
                    <h5 class="fw-bold">Ringkasan belanja</h5>
                    <div class="d-flex justify-content-between mt-4">
                        <h6>Total Belanja ({{$carts->count()}} Barang)</h6>
                        <h6>Rp{{ number_format($this->totalCartAmount,2,',','.') }}</h6>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between mt-4">
                        <h5 class="fw-bold">Total Belanja</h5>
                        <h5 class="fw-bold">Rp{{ number_format($this->totalCartAmount,2,',','.') }}</h5>
                    </div>
                    <div wire:ignore class=" w-100 btn btn-checkout-pembayaran text-center mt-3" id="pay-button">
                        Pilih Pembayaran
                    </div>
                    <p class="mb-0 p-2 mt-2 rounded" style="background-color: #f4f4f4; font-size: 0.8rem">Lakukan pembayaran belanja untuk melanjutkan proses pengemasan kiriman</p>
                    <div class="d-flex justify-content-between mt-4">
                        <h5>Estimasi Biaya Kirim</h5>
                        <h5 class="fw-bold">Rp{{ number_format($this->totalCartAmount,2,',','.') }}</h5>
                    </div>
                    <hr>
                    <p class="mb-0 p-2 mt-2 rounded" style="background-color: #f4f4f4; font-size: 0.8rem">Akan ditagihkan ketika barang Anda sudah siap dikirim</p>
                </div>
            </div>
        </div>
    </div>

</div>

@push('scripts')
<script type="text/javascript">
    // For example trigger on button clicked, or any time you need
    var payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', function () {
      // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
    Livewire.emit('validation');
    
    window.snap.pay('{{$snapToken}}', {
            onSuccess: function(result){
            
            Livewire.emit('result',result);
            alert("payment success!"); console.log(result);
            },
            onPending: function(result){
            /* You may add your own implementation here */
            alert("wating your payment!"); console.log(result);
            },
            onError: function(result){
            /* You may add your own implementation here */
            alert("payment failed!"); console.log(result);
            },
            onClose: function(){
            /* You may add your own implementation here */
            alert('you closed the popup without finishing the payment');
            }
        })
        // customer will be redirected after completing payment pop-up
    });
</script>

<script>
    $.fn.followTo = function (pos) {
        var $this = this,
            $window = $(window);

        $window.scroll(function (e) {
            if (
                $window.scrollTop() > $('.col-md-8')
                // $(".short-desc").height() + $(".ulasan-pembeli").height() + 90
            ) {
                $this.css({
                    position: "absolute",
                    top: 130,
                });
            } else {
                $this.css({
                    position: "fixed",
                    top: 130,
                    width: $('.col-md-4').width()
                });
            }
        });
    };

    // document.addEventListener('contentChanged', function(e) {
    //     var $this = $("#checkoutFixed"),
    //         $window = $(window);

    //     if (
    //         $window.scrollTop() >
    //         $(".short-desc").height() + $(".ulasan-pembeli").height() + 90
    //     ) {
    //         $this.css({
    //             position: "absolute",
    //             top: $(".short-desc").height() +
    //                 $(".ulasan-pembeli").height() +
    //                 130,
    //         });
    //     } else {
    //         $this.css({
    //             position: "fixed",
    //             top: 130,
    //         });
    //     }
    // })

    $("#checkoutFixed").followTo($(".detail-info").height());
</script>
@endpush