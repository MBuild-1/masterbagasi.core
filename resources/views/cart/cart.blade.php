@extends('layouts.app')
@section('content')
<div class="container container-cart">
    <livewire:frontend.cart.view />
    <div class="row">
        <div class="col">
            <section class="viral-wrap2 mt-3">
                <div class="bg-cat">
                    <div class="row">
                        <div class="col-8 d-flex my-auto">
                            <p class="px-4 mb-0 section-title">Wujudkan Wishlist Kamu</p>
                        </div>
                        <div class="col-4 d-flex justify-content-end my-auto">
                            <div class="p-2">
                                <a class="btn btn-lihat" href="{{url('wishlist')}}" style="text-decoration: none; color: black;">
                                Lihat semua
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container mb-5">
                    <div class="bks-cat">
                        <div id="carousel-cart-wishlist" class="owl-carousel owl-theme">
                            @forelse ($wishlist as $item)
                            @if ($item->product->category)
                            <a href="{{'category/'.$item->product->category->slug.'/'.$item->product->slug}}" style="text-decoration: none; color:black;">
                                <div class="d-flex flex-wrap gap-5">
                                    <div class="card card-product card-nih">
                                    @if ($item->product->ProductImages->isEmpty())
                                    <img src="{{ asset('frontend/img/default_product.png')  }}">
                                    @else
                                    <img src="{{ asset('image/uploads/products/'.$item->product->_ProductImages->image) }}">
                                    @endif
                                        <div class="card-body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col">
                                                    <p class="product-name fz-16" style="height: 40px;">{{$item->product->name}}</p>
                                                </div>
                                            </div>
                                            <div class="row d-flex justify-content-center align-items-center" style="height: 40px;">
                                                <div class="col-8 d-flex justify-content-start">
                                                    <p class="price fz-16" >Rp{{number_format($item->product->selling_price,0,',','.');}}</p>
                                                </div>
                                            <div class="col">
                                                <div class="d-flex justify-content-end">
                                                <p>
                                                    <strong style="font-size: 15px;">{{$item->product->weight}}</strong>  
                                                    <span style="font-size: 12px;">Kg</span> 
                                                </p>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="row" >
                                            <div class="col d-flex justify-content-start">
                                                <div class="d-flex justify-content-center align-content-center">
                                                <i class="bi bi-star-fill text-warning me-1 fz-14" style="margin-top: 2px;"></i>
                                                <p class="rating-text fz-14">4.5 |</p>
                                                </div>
                                                <div>
                                                <p class="rating-text sold ms-2 fz-14" style="margin-bottom: 1rem"> terjual {{$item->product->sold}}</p>
                                                </div>  
                                            </div>
                                            </div>
                                            <div class="row" >
                                            <div class="col d-flex gap-2" style="height: 40px">
                                                <img wire:click.prevent='deleteWishlist({{ $item->id }})' style="width: 40px" src="{{ asset('frontend/img/ico/wishlist/deletewishlist.png') }}" 
                                                
                                                >
                                                <button wire:click.prevent='addToCart({{$item->id}})' class="btn btn-cart-produk">+ Keranjang</button>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            @else
                            <a href="{{'hastag/'.$item->product->_ProductHastags->hastag->slug.'/'.$item->product->slug}}" style="color: black;text-decoration: none;">
                                <div class="d-flex flex-wrap gap-5">
                                    <div class="card card-product card-nih">
                                    <img src="{{ asset('image/uploads/products/'.$item->product->_ProductImages->image) }}">
                                        <div class="card-body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col">
                                                    <p class="product-name fz-16" style="height: 40px;">{{$item->product->name}}</p>
                                                </div>
                                            </div>
                                            <div class="row d-flex justify-content-center align-items-center" style="height: 40px;">
                                                <div class="col-8 d-flex justify-content-start">
                                                    <p class="price fz-16" >Rp{{number_format($item->product->selling_price,0,',','.');}}</p>
                                                </div>
                                            <div class="col">
                                                <div class="d-flex justify-content-end">
                                                <p>
                                                    <strong style="font-size: 15px;">{{$item->product->weight}}</strong>  
                                                    <span style="font-size: 12px;">Kg</span> 
                                                </p>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="row" >
                                            <div class="col d-flex justify-content-start">
                                                <div class="d-flex justify-content-center align-content-center">
                                                <i class="bi bi-star-fill text-warning me-1" style="margin-top: 2px;"></i>
                                                <p class="rating-text">4.5 |</p>
                                                </div>
                                                <div>
                                                <p class="rating-text sold ms-2" style="margin-bottom: 1rem"> terjual {{$item->product->sold}}</p>
                                                </div>  
                                            </div>
                                            </div>
                                            <div class="row" >
                                            <div class="col d-flex gap-2" style="height: 40px">
                                                <img wire:click.prevent='deleteWishlist({{ $item->id }})' style="width: 40px" src="{{ asset('frontend/img/ico/wishlist/deletewishlist.png') }}" 
                                                
                                                >
                                                <button wire:click.prevent='addToCart({{$item->id}})' class="btn btn-cart-produk">+ Keranjang</button>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            @endif
                            @empty

                            @endforelse
                        </div>
                    </div>
                </div>
            </section>

            <section class="viral-wrap2 mt-3">
                <div class="bg-cat">
                    <div class="row">
                        <div class="col-8 d-flex my-auto">
                            <p class="px-4 mb-0 section-title">Khusus Untuk Kamu</p>
                        </div>
                        <div class="col-4 d-flex justify-content-end my-auto">
                            <div class="p-2">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container mb-5">
                    <div class="bks-cat">
                        <div id="carousel-cart-rekomendasi" class="owl-carousel owl-theme">
                            @foreach ($rekomendasi as $product)
                            <a href="{{url('hastag/'.$product->hastag->slug.'/'.$product->product->slug)}}" style="text-decoration: none; color:black;">
                                <div class="d-flex flex-wrap gap-4">
                                <div class="card card-product card-nih">
                                    <img src="{{ asset('image/uploads/products/'.$product->product->_ProductImages->image) }}">
                                    <div class="card-body">
                                        <div class="container">
                                        <div class="row">
                                            <div class="col">
                                            <p class="product-name fz-16">{{$product->product->name}}</p>
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-center align-items-center py-1">
                                            <div class="col-8 d-flex justify-content-start">
                                            <p class="price fz-16" >Rp{{number_format($product->product->selling_price,0,',','.');}}</p>
                                            </div>
                                            <div class="col ps-0">
                                            <div class="d-flex justify-content-end">
                                                <p>
                                                <strong style="font-size: 15px">{{$product->product->weight}}</strong>  
                                                <span style="font-size: 12px">Kg</span> 
                                                </p>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="row" >
                                            <div class="col d-flex justify-content-start">
                                            <div class="d-flex justify-content-center align-content-center">
                                                <i class="bi bi-star-fill text-warning me-1 fz-14"></i>
                                                <p class="rating-text fz-14">4.5 |</p>
                                            </div>
                                                <div>
                                                    <p class="rating-text sold ms-2 fz-14" style="margin-bottom: 1rem"> terjual {{$product->product->sold}}</p>
                                                </div>  
                                            </div>
                                        </div>
                                        <div class="row" >
                                            <livewire:frontend.c-t-a.wish-cart :product="$product->product">

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
            </section>
        </div>
    </div>
</div>
@endsection

@section('script')

<script>
    $.fn.followTo = function (pos) {
        var $this = this,
            $window = $(window);

        $window.scroll(function (e) {
            if (
                $window.scrollTop() > $('#keranjg').height() - 440
            ) {
                $this.css({
                    position: "absolute",
                    top: $('#keranjg').height() - 450,
                    width: $('.col-3').width()
                });
            } else {
                $this.css({
                    position: "fixed",
                    top: 136,
                    width: $('.col-3').width()
                });
            }
        });
    };

    document.addEventListener('contentChanged', function(e) {
        var $this = $("#checkoutFixed"),
            $window = $(window);

        if (
            $window.scrollTop() > $('#keranjg').height() - 440
        ) {
            $this.css({
                position: "absolute",
                top: $('#keranjg').height() - 450,
                width: $('.col-3').width()
            });
        } else {
            $this.css({
                position: "fixed",
                top: 100,
                width: $('.col-3').width()
            });
        }
    })

    $("#checkoutFixed").followTo($(".detail-info").height());
</script>

@endsection
