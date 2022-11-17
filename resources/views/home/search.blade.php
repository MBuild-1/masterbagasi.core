@extends('layouts.app')
@include('home.navbar')
@section('content')
    <div class="container">
        <div class="row pencarian" style="margin-top: 150px">
            <div class="col-md-3 p-3">
                <div class="card" style="width: 14rem;cursor:default;">
                    <div class="card-header fw-bold">
                        Filter
                    </div>
                    <ul class="list-group list-group-flush">
                        {{-- <p class="list-group-item">Brand</p> --}}
                        
                        <div style="border-bottom: 2px solid rgba(221, 221, 221, 0.466)" class="py-2 side-dd">
                            <button class="dropdown-btn" style="font-size: 14px; font-weight: 700">Pencarian Terakhir
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
                            <button class="dropdown-btn" style="font-size: 14px; font-weight: 700">Pencarian Populer
                              </button>
                              <div class="">
                                <a href="#">Menunggu Pembayaran</a>
                                <a href="#">Daftar Transaksi</a>
                              </div>
                        </div>
                        <div style="border-bottom: 2px solid rgba(221, 221, 221, 0.466)" class="py-2 side-dd">
                            <button class="dropdown-btn" style="font-size: 14px; font-weight: 700">Kategori Pilihan
                              </button>
                              <div class="">
                                <a href="#">Wishlist</a>
                                <a href="#">Toko Favorit</a>
                                <a href="#">Pengaturan</a>
                              </div>
                        </div>
                    </ul>
                </div>
                
            </div>
            <div class="col-md-9 py-3 px-0">
                <h3>Hasil pencarian : {{$request->search}}</h3>
                <div class="d-flex flex-wrap gap-2">
                    @forelse ($product_search as $item)
                    <a href="{{url('category/'.$item->category->slug.'/'.$item->slug)}}" style="text-decoration: none;color:black;">
                        <div class="card card-product">
                            <img src="{{ asset('image/uploads/products/'.$item->_ProductImages->image) }}" class="card-img-top card-img-product" alt="product">
                            <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="">
                                <p class="card-title product-name">{{$item->name}}</p>
                                <p class="dlv-to text-muted">Dikirim ke United Kingdom</p>
                                <p class="price">Rp 7.500,-</p>
                                <div class="d-flex align-items-center discount">
                                    <div class="discount-percentage">50%</div>
                                    <div class="discount-price text-muted">Rp 15.000,-</div>
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
                                    <img src="{{ asset('frontend/img/ico/wishlist/wishlist-off.svg') }}" alt=""
                                    onclick="toggleWishlist(this)"
                                    onmouseover="hoverWishlist(this)"
                                    onmouseout="outWishlist(this)"
                                    >
                                    </div>
                                    <div>
                                    <img src="{{ asset('frontend/img/ico/addcart/addcart-off.svg') }}" alt="" 
                                    onclick="toggleCart(this)"
                                    onmouseover="hoverCart(this)"
                                    onmouseout="outCart(this)"
                                    >
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                     </a>
                    @empty
                    <h3 class="mt-2 mb-4">Product tidak tersedia</h3>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection