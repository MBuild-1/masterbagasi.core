<div class="row">
    <div class="col-3">
        <div class="card shadow">
            <div class="card-header fw-bold ">
                <h3 style="font-size: 20px;" class="mt-2">Filter</h3>
            </div>
            <ul class="list-group list-group-flush">
                <div style="border-bottom: 2px solid rgba(221, 221, 221, 0.466)" class="py-2 side-dd">
                    <div class="list-filter row">
                        <div class="col">
                            <div class="rounded shadow-sm side-dd">
                                <button class="dropdown-btn pt-3" style="font-size: 16px; font-weight: 700">Kategori <i
                                        class="fa fa-caret-down"></i></button>
                                <div class="list--hideable list--show-hidden py-2">
                                    <ul>
                                        @foreach($categories as $category)
                                            <li>
                                                <a href="#">
                                                    <div class="form-check cekbox-oren d-flex">
                                                        <input class="form-check-input my-auto"
                                                            wire:model='inputCategories' type="checkbox"
                                                            value="{{ $category->id }}"
                                                            id="flexCheckChecked{{ $category->id }}">
                                                        <label class="form-check-label my-auto ps-3"
                                                            for="flexCheckChecked{{ $category->id }}">
                                                            {{ $category->name }}
                                                        </label>
                                                    </div>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <a id="show-more-link" class="show-more-link text-black-50">Tampilkan lebih banyak...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </ul>
        </div>
    </div>
    <div class="col">
        <div class="row">
            <div class="d-flex flex-wrap gap-2 px-0">
                @foreach($products as $product)
                    <a href="{{ url('daerah/'.$province->slug.'/'.$product->slug) }}" style="text-decoration: none; color:black;">
                        <div class="d-flex flex-wrap">
                        <div class="card card-product card-nih">
                            @if ($product->ProductImages->isEmpty())
                            <img src="{{ asset('frontend/img/default_product.png') }}">
                            @else
                            <img src="{{ asset('image/uploads/products/'.$product->_ProductImages->image) }}">
                            @endif
                            <div class="card-body pt-0">
                                <div class="container">
                                    <div class="row pb-2">
                                        <div class="d-flex" style="height: 1.7rem">
                                        <div class="position-absolute label-product px-3 py-1">
                                            Terviral
                                        </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p class="product-name fz-16 hg-40">{{$product->name}}</p>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-center align-items-center hg-30">
                                        <div class="col-7 d-flex justify-content-start pe-0">
                                            <p class="price fz-16 mb-0" >Rp{{number_format($product->selling_price,0,',','.')}}</p>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex justify-content-between">
                                                <span class="border-kiri"></span>
                                                <p class="mb-0">
                                                    <strong class="fz-15">{{$product->weight}}</strong>  
                                                    <span class="fz-12">Kg</span> 
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" >
                                        <div class="col d-flex justify-content-start">
                                        <div class="d-flex justify-content-center align-content-center">
                                            <i class="bi bi-star-fill text-warning me-1 fz-14"></i>
                                            <p class="rating-text fz-14 border-kanan">4.5</p>
                                        </div>
                                        <div>
                                            <p class="rating-text fz-14 sold ms-2"> terjual {{$product->sold}}</p>
                                        </div>  
                                        </div>
                                    </div>
                                    <div class="row" >
                                        @php
                                        if(Auth::check()){
                                        $wishlistCheck = App\Models\Wishlists::where('product_id',
                                        $product->id)->where('user_id', Auth::user()->id)->exists();
                                        }
                                    @endphp
                                    <div class="col" style="height: 46px; width: 216px">
                                        <div class="row">
                                            <div class="col-3 pe-0">
                                                @if(Auth::check())
                                                    @if($wishlistCheck)
                                                        <img wire:click.prevent='addToWishlist({{ $product->id }})'
                                                            src="{{ asset('frontend/img/ico/wishlist/cta/wishlist-aktif.svg') }}"
                                                            style="box-sizing: border-box;width: 50px;">
                                                    @else
                                                        <img class="keranjang-hov"
                                                            wire:click.prevent='addToWishlist({{ $product->id }})'
                                                            src="{{ asset('frontend/img/ico/wishlist/cta/wishlist-off.svg') }}"
                                                            style="box-sizing: border-box">
                                                    @endif
                                                @else
                                                    <img class="keranjang-hov"
                                                        wire:click.prevent='addToWishlist({{ $product->id }})'
                                                        src="{{ asset('frontend/img/ico/wishlist/cta/wishlist-off.svg') }}"
                                                        style="box-sizing: border-box">
                                                @endif
                                            </div>
                                            <div class="col-9 pe-3 d-flex my-auto">
                                                <button wire:click.prevent='addToCart({{ $product->id }})'
                                                    class="btn btn-cart-produk">+
                                                    Keranjang</button>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>