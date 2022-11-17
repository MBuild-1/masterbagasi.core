{{-- <div class="row mt-4">
    <div class="col">
        <div class="d-flex flex-wrap gap-3 justify-content-start">
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
                                        @if (isset($product->wishlist->product_id) == isset($product->id))
                                        <div>
                                            <img wire:click.prevent='addToWishlist({{ $product->id }})'
                                                src="{{ asset('frontend/img/ico/wishlist/wishlist-aktif.svg') }}">
                                        </div>
                                         @else
                                        <div>
                                            <img wire:click.prevent='addToWishlist({{ $product->id }})'
                                                src="{{ asset('frontend/img/ico/wishlist/wishlist-off.svg') }}">
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div> --}}

<div class="row">
    <div class="col-2 py-3">
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
    <div class="col-10 py-3 ps-5">
        <div class="d-flex flex-wrap gap-3">
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