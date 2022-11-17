@extends('layouts.app')
@section('content')
<div class="jumbotron" style="background-color: #FF4200; height: 700px; padding-top: 100px;">
    <div class="container">
        <div class="row">
            <div class="col-md-5 p-0">
                <div style="width: 100%; height: 500px; background-color: #ddd;" class="d-flex flex-column gap-5 p-4">
                    <img class="mx-auto img-brand" src="{{asset('frontend/img/product/Rempah1.jpg')}}" width="300px">
                    <div class="tahukah d-flex gap-5">
                        <h3 class="fw-bold">Tahukah Kamu?</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis voluptatum alias eligendi sint ipsam ullam maxime at iste accusantium, fuga nostrum eum, ducimus veniam asperiores? Voluptates vero exercitationem id omnis.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="p-4" style="width: 100%; height: 500px; background-color: #ddd">
                    <div class="section-title">
                        <h4>Video Brand</h4>
                    </div>
                    <div id="carouselYutup" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner width-80-percent mx-auto">
                          <div class="carousel-item active">
                            <div class="ratio ratio-16x9">
                                <iframe class="img-edit" src="https://www.youtube.com/embed/21-1dn1CPTs?controls=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <div class="ratio ratio-16x9">
                                <iframe class="img-edit" src="https://www.youtube.com/embed/21-1dn1CPTs?controls=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselYutup" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselYutup" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <p class="mt-3">Dibuat dari bahan-bahan pilihan untuk menghasilkan produk cemilan yang penuh nutrisi untuk mensuplai kebahagiaanmu</p>
                    <p>Dibuat dari bahan-bahan pilihan untuk menghasilkan produk cemilan yang penuh nutrisi untuk mensuplai kebahagiaanmu</p>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

<div class="container min-height-510" style="margin-top:-80px;">
    <div class="row">
        <div class="col">
            <h1 class="text-white">{{ $brands->name }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md d-flex justify-content-center">
            <div class="card w-100">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="wrap-breadcrumb pb-2">
                            <ul>
                                <li class="item-link"><a href="{{ url('/') }}" class="link">Home</a>
                                </li>
                                <li class="item-link"><span>{{ $brands->name }}</span></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
  {{-- Livewire --}}
<livewire:frontend.brand.view :products="$products" :brands="$brands"/>
</div>

@endsection





{{-- 
<div class="container min-height-510 mt-5">
    <div class="row pt-5">
        <div class="col-md p-3">
            <div class="d-flex flex-wrap gap-4 justify-content-center">
                @foreach($products as $product)
                    <a href="{{ url('brands/'.$brands->slug.'/'.$product->slug) }}"
                        style="text-decoration: none; color:black">
                        <div class="card card-product">
                            <img src="{{ asset('image/uploads/products/'.$product->_ProductImages->image) }}"
                                class="card-img-top card-img-product" alt="product">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div class="">
                                        <p class="card-title product-name">{{ $product->name }}</p>
                                        <p class="dlv-to text-muted">Dikirim ke United Kingdom</p>
                                        <p class="price">Rp.
                                            {{ number_format($product->original_price,2,',','.'); }},-
                                        </p>
                                        <div class="d-flex align-items-center discount">
                                            <div class="discount-percentage">50%</div>
                                            <div class="discount-price text-muted">Rp.
                                                {{ number_format($product->selling_price,2,',','.'); }},-
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center conclusion-product">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <p class="rating-text text-muted">4.5</p>
                                            |
                                            <p class="rating-text text-muted sold">terjual 1260</p>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-column align-items-center justify-content-between">
                                        <p class="weight-product">500g</p>
                                        <div class="d-flex flex-column product-card-icon">
                                            <div>
                                                <img src="{{ asset('frontend/img/ico/wishlist/wishlist-off.svg') }}"
                                                    alt="" onclick="toggleWishlist(this)"
                                                    onmouseover="hoverWishlist(this)" onmouseout="outWishlist(this)">
                                            </div>
                                            <div>
                                                <img src="{{ asset('frontend/img/ico/addcart/addcart-off.svg') }}"
                                                    alt="" onclick="toggleCart(this)" onmouseover="hoverCart(this)"
                                                    onmouseout="outCart(this)">
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
</div> --}}