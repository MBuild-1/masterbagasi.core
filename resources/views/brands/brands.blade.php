@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="row pt-4">
            <div class="col-md-12" >
                <div class="jumbotron" style="height: 200px; background-image: url({{ asset('frontend/img/brand.jpg') }}); background-size: cover">
                    <div class="d-flex justify-content-start align-items-center gap-3 h-100 px-5">
                        <div style="width: 150px; height: 150px; background-color: #ff4200; border-radius: 50%"></div>
                        <div class="d-flex flex-column">
                            <div class="d-flex gap-1">
                                <div style="width: 30px; height: 30px; border-radius: 50%; background-color: #ff4200"></div>
                                <h3 class="text-white fw-bold">{{ $brands->name }}</h3>
                            </div>
                            <div class="d-flex gap-2">
                                <button class="btn btn-menu-keranjang px-5 py-0 fw-bold">Favorit</button>
                                <button class="btn btn-menu-keranjang"><i class="fa-solid fa-store fa-sm"></i></button>
                                <button class="btn btn-menu-keranjang"><i class="fa-solid fa-share-nodes fa-sm"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-md d-flex justify-content-center">
                <div class="card w-100">
                    <ul class="list-group list-group-flush shadow">
                        <li class="list-group-item">
                            <div class="wrap-breadcrumb pb-2">
                                <ul>
                                    <li class="item-link"><a href="{{ url('/') }}" class="link" style="font-size: 16px;">Home</a></li>
                                    <li class="item-link"><span style="font-size: 16px;">{{ $brands->name }}</span></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        {{-- Livewire --}}
        <livewire:frontend.brand.view :products="$products" :brands="$brands"/>

        <div class="row justify-content-end my-3">
            <div class="col">
                <section class="viral-wrap2 mt-3 brand-wrap" style="height: auto">
                    <div class="bg-cat">
                        <div class="row">
                            <div class="col-8 d-flex my-auto">
                                <p class="px-4 mb-0 section-title">Produk Terbaru di Merek Ini</p>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="bks-cat">
                            <div id="carousel-brand-terbaru" class="owl-carousel owl-theme">
                                @foreach ($latest as $product)
                                <a href="{{url('brands/'.$product->brands->slug.'/'.$product->slug)}}" style="text-decoration: none; color:black;">
                                    <div class="d-flex flex-wrap gap-4">
                                    <div class="card card-product card-nih">
                                        <img src="{{ asset('image/uploads/products/'.$product->_ProductImages->image) }}">
                                        <div class="card-body">
                                            <div class="container">
                                            <div class="row">
                                                <div class="col">
                                                <p class="product-name fz-16">{{$product->name}}</p>
                                                </div>
                                            </div>
                                            <div class="row d-flex justify-content-center align-items-center py-1">
                                                <div class="col-8 d-flex justify-content-start">
                                                <p class="price fz-16" >Rp{{number_format($product->selling_price,0,',','.');}}</p>
                                                </div>
                                                <div class="col ps-0">
                                                <div class="d-flex justify-content-end">
                                                    <p>
                                                    <strong style="font-size: 15px">{{$product->weight}}</strong>  
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
                                                        <p class="rating-text sold ms-2 fz-14" style="margin-bottom: 1rem"> terjual {{$product->sold}}</p>
                                                    </div>  
                                                </div>
                                            </div>
                                            <div class="row" >
                                                <livewire:frontend.c-t-a.wish-cart :product="$product">
    
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
        <div class="row justify-content-end my-3 brand-wrap">
            <div class="col">
                <section class="viral-wrap2 mt-3" style="height: auto">
                    <div class="bg-cat">
                        <div class="row">
                            <div class="col-8 d-flex my-auto">
                                <p class="px-4 mb-0 section-title">Produk Terlaris di Merek Ini</p>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="bks-cat">
                            <div id="carousel-brand-terlaris" class="owl-carousel owl-theme">
                                @foreach ($best_seller as $product)
                                <a href="{{url('brands/'.$product->brands->slug.'/'.$product->slug)}}" style="text-decoration: none; color:black;">
                                    <div class="d-flex flex-wrap gap-4">
                                    <div class="card card-product card-nih">
                                        <img src="{{ asset('image/uploads/products/'.$product->_ProductImages->image) }}">
                                        <div class="card-body">
                                            <div class="container">
                                            <div class="row">
                                                <div class="col">
                                                <p class="product-name fz-16">{{$product->name}}</p>
                                                </div>
                                            </div>
                                            <div class="row d-flex justify-content-center align-items-center py-1">
                                                <div class="col-8 d-flex justify-content-start">
                                                <p class="price fz-16" >Rp{{number_format($product->selling_price,0,',','.');}}</p>
                                                </div>
                                                <div class="col ps-0">
                                                <div class="d-flex justify-content-end">
                                                    <p>
                                                    <strong style="font-size: 15px">{{$product->weight}}</strong>  
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
                                                        <p class="rating-text sold ms-2 fz-14" style="margin-bottom: 1rem"> terjual {{$product->sold}}</p>
                                                    </div>  
                                                </div>
                                            </div>
                                            <div class="row" >
                                                <livewire:frontend.c-t-a.wish-cart :product="$product">
    
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
    $(document).on('contentChanged', function(e) {
        $(".show-more-link").parent().toggleClass('list--show-hidden list--show-all');
        $(".show-more-link").text("Tampilkan lebih banyak..." ? "Tampilkan lebih sedikit..." : "Tampilkan lebih banyak...");
        $(function () {
        $('.product-name').each(function () {
            len = $(this).text().length;
            if (len > 50) {
                $(this).text($(this).text().substring(0, 50) + "...");
            }
        });
        });
    })
</script>
@endsection
