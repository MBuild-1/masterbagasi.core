<div class="container profile-tab" style="margin-top: 100px">
    <div class="row">
        @include('home.sidebar_profile')
        <div class="col-9 ">
            <h2>Wishlist</h2>
            <div class="row">
                <div class="d-flex flex-wrap gap-2 px-0">
                    @forelse ($wishlist as $item)
                    @if ($item->product->category)
                    <a href="{{'category/'.$item->product->category->slug.'/'.$item->product->slug}}" style="text-decoration: none; color:black;">
                        <div class="d-flex flex-wrap">
                            <div class="card card-product card-nih">
                                @if ($item->product->ProductImages->isEmpty())
                                <img src="{{ asset('frontend/img/default_product.png') }}">
                                @else
                                <img src="{{ asset('image/uploads/products/'.$item->product->_ProductImages->image) }}">
                                @endif
                                <div class="card-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <p class="product-name fz-16 hg-40">{{$item->product->name}}</p>
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-center align-items-center hg-30">
                                            <div class="col-7 d-flex justify-content-start">
                                                <p class="price fz-16 mb-0">Rp{{number_format($item->product->selling_price,0,',','.');}}</p>
                                            </div>
                                            <div class="col">
                                                <div class="d-flex justify-content-between">
                                                    <span class="border-kiri"></span>
                                                    <p class="mb-0">
                                                        <strong class="fz-15">{{$item->product->weight}}</strong>
                                                        <span class="fz-12">Kg</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col d-flex justify-content-start">
                                                <div class="d-flex justify-content-center align-content-center">
                                                    <i class="bi bi-star-fill text-warning me-1 fz-14"></i>
                                                    <p class="rating-text fz-14 border-kanan">4.5</p>
                                                </div>
                                                <div>
                                                    <p class="rating-text fz-14 sold ms-2"> terjual {{$item->product->sold}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col d-flex gap-2 hg-30">
                                                <img wire:click.prevent='deleteWishlist({{ $item->id }})' src="{{ asset('frontend/img/ico/wishlist/deletewishlist.png') }}" class="wd-30 hg-30">
                                                <button wire:click.prevent='addToCart({{$item->id}})' class="btn btn-cart-produk hg-30 p-0 fz-14">+ Keranjang</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    @else
                    <a href="{{'hastag/'.$item->product->_ProductHastags->hastag->slug.'/'.$item->product->slug}}" style="color: black;text-decoration: none;">
                        <div class="d-flex flex-wrap">
                            <div class="card card-product card-nih">
                                @if ($item->product->ProductImages->isEmpty())
                                <img src="{{ asset('frontend/img/default_product.png') }}">
                                @else
                                <img src="{{ asset('image/uploads/products/'.$item->product->_ProductImages->image) }}">
                                @endif
                                <div class="card-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <p class="product-name fz-16 hg-40">{{$item->product->name}}</p>
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-center align-items-center hg-30">
                                            <div class="col-8 d-flex justify-content-start">
                                                <p class="price fz-16 mb-0">Rp{{number_format($item->product->selling_price,0,',','.');}}</p>
                                            </div>
                                            <div class="col">
                                                <div class="d-flex justify-content-between">
                                                    <span class="border-kiri"></span>
                                                    <p class="mb-0">
                                                        <strong class="fz-15">{{$item->product->weight}}</strong>
                                                        <span class="fz-12">Kg</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col d-flex justify-content-start">
                                                <div class="d-flex justify-content-center align-content-center">
                                                    <i class="bi bi-star-fill text-warning me-1 fz-14"></i>
                                                    <p class="rating-text fz-14 border-kanan">4.5</p>
                                                </div>
                                                <div>
                                                    <p class="rating-text fz-14 sold ms-2"> terjual {{$item->product->sold}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col d-flex gap-2 hg-30">
                                                <img wire:click.prevent='deleteWishlist({{ $item->id }})' src="{{ asset('frontend/img/ico/wishlist/deletewishlist.png') }}" class="wd-30 hg-30">
                                                <button wire:click.prevent='addToCart({{$item->id}})' class="btn btn-cart-produk hg-30 p-0 fz-14">+ Keranjang</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endif
                    @empty
                    <h3>No Product Found</h3>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>