{{-- <div class="cart-wrap">
    <div class="row">
        <div class="main-heading mb-10 d-flex flex-row"> {{ ucwords(Auth::user()->name) }} Cart List</div>
<div class="col-md-12">
    <div class="table-wishlist">
        <table class="table" cellpadding="0" cellspacing="0" border="0" width="100%">
            <thead>
                <tr>
                    <th width="45%">Product Name</th>
                    <th width="15%">Price</th>
                    <th width="15%">Quantity</th>
                    <th width="15%">Total</th>
                </tr>
            </thead>
            <tbody>
                @forelse($cart as $item)
                    <tr>
                        <td width="45%">
                            <a href="{{ url('category/'.$item->product->category->slug.'/'.$item->product->slug) }}"
                                style="text-decoration: none; color:black;">
                                <div class="display-flex align-center">
                                    <div class="img-product">
                                        <img src="/image/uploads/products/{{ $item->product->_ProductImages->image }}"
                                            alt="" class="mCS_img_loaded">
                                    </div>
                                    <div class="name-product">
                                        {{ $item->product->name }}
                                    </div>
                                </div>
                            </a>
                        </td>

                        <td width="15%" class="price">
                            Rp.{{ number_format($item->product->selling_price,2,',','.') }}
                        </td>
                        <td width="15%" class="price">
                            <div class="input-group">
                                <span class="btn btn1" wire:click='decrementQuantity({{ $item->id }})'><i
                                        class="fa fa-minus"></i></span>
                                <input readonly type="text" value="{{ $item->quantity }}" class="input-quantity" />
                                <span class="btn btn1" wire:click='incrementQuantity({{ $item->id }})'><i
                                        class="fa fa-plus"></i></span>
                            </div>
                        </td>
                        <td width="15%" class="price">
                            Rp.{{ number_format($item->quantity * $item->product->selling_price,2,',','.') }}
                            @php
                                $total += $item->quantity * $item->product->selling_price;
                            @endphp
                        </td>
                        <td width="10%" class="text-center">
                            <a class="trash-icon" wire:click='deleteCart({{ $item->id }})'>
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Catatan</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                    readonly> {{ $item->note }}</textarea>
                            </div>
                        </td>
                    </tr>
                @empty
                    <td>
                        <h4>No Product in Wishlist</h4>
                    </td>
                @endforelse
            </tbody>
            <tfoot>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Rp.{{ number_format($total,2,',','.') }}
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="d-flex justify-content-end">
        <a href="{{ route('checkout') }}" class="btn btn-primary btn-lg">Checkout</a>
    </div>
</div>
</div>
</div> --}}


{{-- 
<div class="row mt-5 pt-5">
    <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
        <h1>MY CART</h1>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="border-0 bg-light">
                            <div class="p-2 px-3 text-uppercase">Product</div>
                        </th>
                        <th scope="col" class="border-0 bg-light">
                            <div class="py-2 text-uppercase">Price</div>
                        </th>
                        <th scope="col" class="border-0 bg-light">
                            <div class="py-2 text-uppercase">Weight</div>
                        </th>
                        <th scope="col" class="border-0 bg-light">
                            <div class="py-2 text-uppercase">Quantity</div>
                        </th>
                        <th scope="col" class="border-0 bg-light">
                            <div class="py-2 text-uppercase">Total Price</div>
                        </th>
                        <th scope="col" class="border-0 bg-light">
                            <div class="py-2 text-uppercase">Total Weight</div>
                        </th>
                        <th scope="col" class="border-0 bg-light">
                            <div class="py-2 text-uppercase"></div>
                        </th>
                        <th scope="col" class="border-0 bg-light">
                            <div class="py-2 text-uppercase"></div>
                        </th>
                        <th scope="col" class="border-0 bg-light">
                            <div class="py-2 text-uppercase"></div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($cart as $item)
                        <tr>
                            <th scope="row" class="border-0">
                                <div class="p-2">
                                    <img src="/image/uploads/products/{{ $item->product->_ProductImages->image }}"
                                        alt="" width="70" class="img-fluid rounded shadow-sm">
                                    <div class="ml-3 d-inline-block align-middle">
                                        <h5 class="mb-0"> <a
                                                href="{{ url('category/'.$item->product->category->slug.'/'.$item->product->slug) }}"
                                                class="text-dark d-inline-block align-middle">{{ $item->product->name }}</a>
                                        </h5><span class="text-muted font-weight-normal font-italic d-block">Category:
                                            {{ $item->product->category->name }}</span>
                                    </div>
                                </div>
                            </th>
                            <td class="border-0 align-middle">
                                Rp.{{ number_format($item->product->selling_price,2,',','.') }}
                            </td>
                            <td class="border-0 align-middle">{{ $item->product->weight }} Kg</td>
                            <td class="border-0 align-middle">
                                <div class="input-group">
                                    <span class="btn btn1" wire:click='decrementQuantity({{ $item->id }})'><i
                                            class="fa fa-minus"></i></span>
                                    <input readonly type="text" value="{{ $item->quantity }}"
                                        class="input-quantity" />
                                    <span class="btn btn1" wire:click='incrementQuantity({{ $item->id }})'><i
                                            class="fa fa-plus"></i></span>
                                </div>
                            </td>
                            <td class="border-0 align-middle">
                                <strong>
                                    Rp.{{ number_format($item->quantity * $item->product->selling_price,2,',','.') }}</strong>
                                @php
                                    $total += $item->quantity * $item->product->selling_price;
                                    $total_weight += $item->quantity * $item->product->weight;
                                @endphp
                            </td>
                            <td class="border-0 align-middle">
                                <strong> {{ $item->quantity * $item->product->weight }} Kg</strong>
                            </td>
                            <td class="border-0 align-middle"><button class="round-black-btn small-btn"
                                    wire:click='addToWishlist({{ $item->id }})'>Add to
                                    Wishlist</button>
                            </td>
                            <td class="border-0 align-middle"> <a style="cursor: pointer" class="trash-icon"
                                    wire:click='deleteCart({{ $item->id }})'>
                                    <i class="far fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <td>
                            <h4>No Product in Wishlist</h4>
                        </td>
                    @endforelse
                </tbody>
                <tfoot>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><strong>Total Amount :</strong> </td>
                        <td><strong>Rp.{{ number_format($total,2,',','.') }}</strong>
                        </td>
                        <td><strong>{{ $total_weight }} Kg</strong></td>
                    </tr>
                </tfoot>
            </table>
            <div class="d-flex justify-content-end">
                <a class="btn btn-primary" href="{{ url('/checkout') }}">Checkout</a>
            </div>
        </div>
    </div>
</div> --}}


{{-- <div class="cart-wrap">
    <div class="row">
        <div class="main-heading mb-10 d-flex flex-row"> {{ ucwords(Auth::user()->name) }} Cart List</div>
<div class="col-md-12">
    <div class="table-wishlist">
        <table class="table" cellpadding="0" cellspacing="0" border="0" width="100%">
            <thead>
                <tr>
                    <th width="45%">Product Name</th>
                    <th width="15%">Price</th>
                    <th width="15%">Quantity</th>
                    <th width="15%">Total</th>
                </tr>
            </thead>
            <tbody>
                @forelse($cart as $item)
                    <tr>
                        <td width="45%">
                            <a href="{{ url('category/'.$item->product->category->slug.'/'.$item->product->slug) }}"
                                style="text-decoration: none; color:black;">
                                <div class="display-flex align-center">
                                    <div class="img-product">
                                        <img src="/image/uploads/products/{{ $item->product->_ProductImages->image }}"
                                            alt="" class="mCS_img_loaded">
                                    </div>
                                    <div class="name-product">
                                        {{ $item->product->name }}
                                    </div>
                                </div>
                            </a>
                        </td>

                        <td width="15%" class="price">
                            Rp.{{ number_format($item->product->selling_price,2,',','.') }}
                        </td>
                        <td width="15%" class="price">
                            <div class="input-group">
                                <span class="btn btn1" wire:click='decrementQuantity({{ $item->id }})'><i
                                        class="fa fa-minus"></i></span>
                                <input readonly type="text" value="{{ $item->quantity }}" class="input-quantity" />
                                <span class="btn btn1" wire:click='incrementQuantity({{ $item->id }})'><i
                                        class="fa fa-plus"></i></span>
                            </div>
                        </td>
                        <td width="15%" class="price">
                            Rp.{{ number_format($item->quantity * $item->product->selling_price,2,',','.') }}
                            @php
                                $total += $item->quantity * $item->product->selling_price;
                            @endphp
                        </td>
                        <td width="10%" class="text-center">
                            <a class="trash-icon" wire:click='deleteCart({{ $item->id }})'>
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Catatan</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                    readonly> {{ $item->note }}</textarea>
                            </div>
                        </td>
                    </tr>
                @empty
                    <td>
                        <h4>No Product in Wishlist</h4>
                    </td>
                @endforelse
            </tbody>
            <tfoot>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Rp.{{ number_format($total,2,',','.') }}
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="d-flex justify-content-end">
        <a href="{{ route('checkout') }}" class="btn btn-primary btn-lg">Checkout</a>
    </div>
</div>
</div>
</div>
--}}

<div id="keranjg" style="padding: 120px" class="py-0 cekbox-oren">
    <div class="row mt-5 pt-5">
        <div class="col-lg-8 p-5 ps-0 mb-5">
            <h4 class="fw-bold mb-3" style="position: relative; left: -10px">Keranjang</h4>
            <div style="border-bottom: 5px solid rgba(197, 197, 197, 0.185)">
                <div class="row pb-3">
                    <div class="col-6">
                        <div class="form-check">
                            <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckChecked"  >
                            <span style="font-size: 16px">Pilih Semua</span>
                        </div>
                    </div>
                    <div class="col" style="position: relative">
                        <div class="btn fw-bold py-0" style="color: #ff4200; position: absolute; right: 0; top: 0">Hapus</div>
                    </div>
                </div>
            </div>
            @forelse ($cart as $item)
            <div style="border-bottom: 5px solid rgba(197, 197, 197, 0.185)">
                <div class="pt-3 d-flex">
                    <div class="px-2">
                        <div class="form-check">
                            <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckChecked" checked>
                        </div>
                    </div>
                    <div>
                        <p style="font-size: 16px; margin-bottom: 0">{{$item->product->brand}}</p>
                        <p style="font-size: 12px; color: rgb(163, 162, 162)">{{$item->product->category->name}}</p>
                    </div>
                </div>
                <div class="pt-0 d-flex">
                    <div class="px-2 py-4">
                        <div class="form-check">
                            <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckChecked" checked>
                        </div>
                    </div>
                    <div class="d-flex">
                        <img src="{{asset('/image/uploads/products/'.$item->product->_ProductImages->image)}}" width="70px" class="me-3">
                        <div>
                            <p class="mb-0 mt-2" style="font-size: 18px">{{$item->product->name}}</p>
                            <p style="font-size: 18px"> <strong> Rp.{{ number_format($item->product->selling_price,2,',','.') }}</strong></p>
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
        <div class="col-lg-4">
            <div id="sidebar-aksi" style="box-shadow: 0 0 10px rgb(230, 230, 230); height:300px; border-radius: 10px">
                <div class="p-3" style="border-bottom: 5px solid rgba(197, 197, 197, 0.185)">
                    <p class="mb-0 fw-bold py-1" style="font-size: 16px;">Pakai Promo</p>
                    <input class="form-control" type="text" placeholder="Masukkan Kode Promo">
                </div>
                <div class="p-3">
                    <div class="pb-3" style="border-bottom: 2px solid rgba(197, 197, 197, 0.185)">
                        <p class="mb-0 fw-bold" style="font-size: 16px;">Ringkasan belanja</p>
                        <div class="row">
                            <div class="col-7">
                                <p class="mb-0" style="font-size: 14px;">Total Harga (1 Barang)</p>
                            </div>
                            <div class="col" style="position: relative">
                                <p class="mb-0" style="font-size: 14px; position: absolute; right: 15px;">Rp.100.000</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-7">
                                <p class="mb-0" style="font-size: 14px;">Estimasi Pengiriman</p>
                            </div>
                            <div class="col" style="position: relative">
                                <p class="mb-0" style="font-size: 14px; position: absolute; right: 15px;">Rp.400.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="py-3">
                        <div class="row">
                            
                            <div class="col-7">
                                <p class="mb-0 fw-bold" style="font-size: 16px;">Total Harga</p>
                            </div>
                            <div class="col" style="position: relative">
                                <p class="mb-0 fw-bold" style="font-size: 16px; position: absolute; right: 15px;">Rp.{{ number_format($total,2,',','.') }}</p>
                            </div>
                        </div>
                        <div class="py-3">
                            <a class="btn" href="/checkout" style="background-color: #ff4200; color: white; width: 100%">Bayar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>