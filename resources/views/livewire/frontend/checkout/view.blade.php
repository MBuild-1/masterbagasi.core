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

<div class="pt-5 mt-5 container checkoutnew">
    <div class="row">
        <div class="col-md-8">
            <h2 class="fw-bold">Checkout</h2>
            <div class="alamat-pengiriman mt-3 py-3">
                <h5 class="fw-bold">Alamat Pengiriman</h5>
                <hr>
                <h5 class="fw-bold">dzulqurnain <span class="fw-normal"> (office address) </span> <span class="fw-normal badge bg-success">Utama</span></h5>
                <h6>081513191399</h6>
                <h6 class="text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam, cumque nulla vel explicabo itaque ipsam eaque animi, at quod saepe hic, corporis assumenda maxime dolore natus eum deleniti odio exercitationem!</h6>
                <hr>
                <div class="action-alamat d-flex gap-4">
                    <div class="btn btn-outline-secondary">Pilih Alamat Lain</div>
                    <div class="btn btn-outline-secondary">Kirim Ke Beberapa Alamat</div>
                </div>
            </div>
            <div class="checkout-items d-flex flex-column gap-1 py-5">
                <div class="info-toko">
                    <div class="d-flex gap-2">
                        <img src="{{ asset('image/uploads/products/2022111208283.jpg') }}" alt="tes" class="checkout-img-toko">
                        <h5 class="fw-bold">Bryan Toys Shop</h5>
                    </div>
                    <h6 class="text-muted mt-3">Kota Surabaya</h6>
                </div>
                <div class="checkout-item mt-5">
                    <div class="d-flex gap-3">
                        <img src="{{ asset('image/uploads/products/2022111208283.jpg') }}" alt="tes" class="checkout-img-product">
                        <div>
                            <h5>Lorem ipsum dolor sit amet consectetur.</h5>
                            <h6>1 barang (110 gr)</h6>
                            <h5 class="fw-bold">Rp 27.500</h5>
                        </div>
                    </div>
                    <div class="ganti-rugi d-flex align-items-center gap-3 mt-3">
                        <input type="checkbox" name="check-ganti">
                        <div>
                            <h6>Rusak total selama dipakai? Bisa ganti rugi!</h6>
                            <p class="text-muted">Proses claim mudah dan instan, berlaku 3 bulan</p>
                        </div>
                        <div>
                            <h6 class="fw-bold">Rp 27.500</h6>
                            <p class="text-muted">per barang</p>
                        </div>
                    </div>
                </div>
                <div class="checkout-item mt-5">
                    <div class="d-flex gap-3">
                        <img src="{{ asset('image/uploads/products/2022111208283.jpg') }}" alt="tes" class="checkout-img-product">
                        <div>
                            <h5>Lorem ipsum dolor sit amet consectetur.</h5>
                            <h6>1 barang (110 gr)</h6>
                            <h5 class="fw-bold">Rp 27.500</h5>
                        </div>
                    </div>
                    <div class="ganti-rugi d-flex align-items-center gap-3 mt-3">
                        <input type="checkbox" name="check-ganti">
                        <div>
                            <h6>Rusak total selama dipakai? Bisa ganti rugi!</h6>
                            <p class="text-muted">Proses claim mudah dan instan, berlaku 3 bulan</p>
                        </div>
                        <div>
                            <h6 class="fw-bold">Rp 27.500</h6>
                            <p class="text-muted">per barang</p>
                        </div>
                    </div>
                </div>
                <div class="checkout-item mt-5">
                    <div class="d-flex gap-3">
                        <img src="{{ asset('image/uploads/products/2022111208283.jpg') }}" alt="tes" class="checkout-img-product">
                        <div>
                            <h5>Lorem ipsum dolor sit amet consectetur.</h5>
                            <h6>1 barang (110 gr)</h6>
                            <h5 class="fw-bold">Rp 27.500</h5>
                        </div>
                    </div>
                    <div class="ganti-rugi d-flex align-items-center gap-3 mt-3">
                        <input type="checkbox" name="check-ganti">
                        <div>
                            <h6>Rusak total selama dipakai? Bisa ganti rugi!</h6>
                            <p class="text-muted">Proses claim mudah dan instan, berlaku 3 bulan</p>
                        </div>
                        <div>
                            <h6 class="fw-bold">Rp 27.500</h6>
                            <p class="text-muted">per barang</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 mt-5">
            <div class="px-3 py-2 " id="checkoutFixed">
                <div class="shadow bg-body rounded p-3">
                    <div class="border border-3 d-flex gap-4 p-2">
                        <img src="test" alt="test">
                        <h6 class="fw-bold">Makin hemat pakai promo</h6>
                        <div class="text-muted">></div>
                    </div>
                </div>
                <div class="shadow bg-body rounded p-3 mt-2">
                    <h6 class="fw-bold">Ringkasan belanja</h6>
                    <div class="d-flex justify-content-between mt-3">
                        <h6>Total harga (3 Produk)</h6>
                        <h6>Rp 104.800</h6>
                    </div>
                    <hr>
                    <h6 class="fw-bold">Total tagihan</h6>
                    <div class=" w-100 btn btn-outline-secondary text-center mt-3">
                        Pilih Pembayaran
                    </div>
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
@endpush