{{-- 
<div class="row mt-5 pt-5">
    <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
        <h1>MY WISHLIST</h1>
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
                            <div class="py-2 text-uppercase">Status</div>
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
                    @forelse($wishlist as $item)
                    <tr>
                        <th scope="row" class="border-0">
                            <div class="p-2">
                                <img src="/image/uploads/products/{{ $item->product->_ProductImages->image }}" alt="" width="70"
                                    class="img-fluid rounded shadow-sm">
                                <div class="ml-3 d-inline-block align-middle">
                                    <h5 class="mb-0"> <a href="{{ url('category/'.$item->product->category->slug.'/'.$item->product->slug) }}" class="text-dark d-inline-block align-middle">{{$item->product->name}}</a></h5><span
                                        class="text-muted font-weight-normal font-italic d-block">Category:
                                        {{$item->product->category->name}}</span>
                                </div>
                            </div>
                        </th>
                        <td class="border-0 align-middle"><strong> Rp.{{ number_format($item->product->selling_price,2,',','.') }}</strong></td>
                        <td class="border-0 align-middle"><strong> {{$item->product->weight}} Kg</strong></td>
                        <td class="border-0 align-middle"><strong><label style="cursor: default;" class="label-stock btn btn-sm text-white bg-success">In
                            Stock</label></strong></td>
                        <td class="border-0 align-middle"><button class="round-black-btn small-btn"
                            wire:click='addToCart({{ $item->id }})'>Add to
                            Cart</button>
                        </td>
                        <td class="border-0 align-middle"> <a style="cursor: pointer" class="trash-icon" wire:click='deleteWishlist({{ $item->id }})'>
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
            </table>
        </div>
    </div>
</div> --}}

{{-- <div class="cart-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-heading mb-10"> {{ ucwords(Auth::user()->name) }} Wishlist</div>
<div class="table-wishlist">
<table class="table table-borderless" cellpadding="0" cellspacing="0" border="0" width="100%">
    <thead>
        <tr>
            <th width="45%">Product Name</th>
            <th width="15%">Unit Price</th>
            <th width="15%">Stock Status</th>
            <th width="15%"></th>
            <th width="10%"></th>
        </tr>
    </thead>
    <tbody>
        @forelse($wishlist as $item)
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
                </td>
                <td width="15%" class="price">
                    Rp.{{ number_format($item->product->selling_price,2,',','.') }}
                </td>
                @if($item->product->quantity > 0)
                    <td width="15%"><label class="label-stock btn btn-sm text-white bg-success">In
                            Stock</label></td>
                @else
                    <td width="15%"><label class="label-stock btn btn-sm text-white bg-danger">Out of
                            Stock</label></td>
                @endif
                <td width="15%"><button class="round-black-btn small-btn"
                        wire:click='addToCart({{ $item->id }})'>Add to
                        Cart</button>
                </td>
                <td width="10%" class="text-center">
                    <a class="trash-icon" wire:click='deleteWishlist({{ $item->id }})'>
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
</table>
</div>
</div>
</div>
</div>
</div>
</div> --}}



<div class="row mt-5 pt-5">
<div class="col-lg-12 py-5 px-0 bg-white mb-5">
    <h4 class="fw-bold mb-4">MY WISHLIST</h4>
    <p class="fw-bold" style="font-size: 16px">Filter</p>
    <div class="row">
        <div class="col-md-3">
            <div class="rounded shadow-sm side-dd">
                <button class="dropdown-btn pt-3" style="font-size: 14px; font-weight: 700">Penawaran 
                    <i class="fa fa-caret-down"></i>
                  </button>
                  <div class="dropdown-container py-2">
                    <a href="#">
                        <div class="d-flex">
                            <div class="px-2">
                                <div class="form-check cekbox-oren">
                                    <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckChecked" checked>
                                </div>
                            </div>
                            <p style="font-size: 16px; margin-bottom: 0">Cashback</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="d-flex">
                            <div class="px-2">
                                <div class="form-check cekbox-oren">
                                    <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckChecked" checked>
                                </div>
                            </div>
                            <p style="font-size: 16px; margin-bottom: 0">Diskon</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="d-flex">
                            <div class="px-2">
                                <div class="form-check cekbox-oren">
                                    <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckChecked" checked>
                                </div>
                            </div>
                            <p style="font-size: 16px; margin-bottom: 0">COD</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="d-flex">
                            <div class="px-2">
                                <div class="form-check cekbox-oren">
                                    <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckChecked" checked>
                                </div>
                            </div>
                            <p style="font-size: 16px; margin-bottom: 0">Grosir</p>
                        </div>
                    </a>
                  </div>
            </div>
            <div class="rounded shadow-sm side-dd">
                <button class="dropdown-btn pt-3" style="font-size: 14px; font-weight: 700">Stok 
                    <i class="fa fa-caret-down"></i>
                  </button>
                  <div class="dropdown-container py-2">
                    <a href="#">
                        <div class="d-flex">
                            <div class="px-2">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input radio-oren me-2">
                                </div>
                            </div>
                            <label class="custom-control-label" for="customRadio1">Preorder</label>
                        </div>
                    </a>
                    <a href="#">
                        <div class="d-flex">
                            <div class="px-2">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input radio-oren me-2">
                                </div>
                            </div>
                            <label class="custom-control-label" for="customRadio1">Tersedia</label>
                        </div>
                    </a>
                    <a href="#">
                        <div class="d-flex">
                            <div class="px-2">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input radio-oren me-2">
                                </div>
                            </div>
                            <label class="custom-control-label" for="customRadio1">Tidak Tersedia</label>
                        </div>
                    </a>
                  </div>
            </div>
            <div class="rounded shadow-sm side-dd">
                <button class="dropdown-btn pt-3" style="font-size: 14px; font-weight: 700">Kategori 
                    <i class="fa fa-caret-down"></i>
                  </button>
                  <div class="dropdown-container py-2">
                    <a href="#">Buku</a>
                    <a href="#">Dapur</a>
                    <a href="#">Elektronik</a>
                    <a href="#">Fashion Anak & Bayi</a>
                    <a href="#">Fashion Muslim</a>
                    <a href="#">Fashion Pria</a>
                    <a href="#">Fashion Wanita</a>
                    <a href="#">Film & Musik</a>
                    <a href="#">Gaming</a>
                  </div>
            </div>
        </div>
        <div class="col-md pe-0">
            <div class="d-flex flex-wrap gap-4">
              @forelse ($wishlist as $item)
              <a href="{{'category/'.$item->product->category->slug.'/'.$item->product->slug}}" style="color: black;text-decoration: none;">
                <div class="card card-product">
                    <img src="{{ asset('/image/uploads/products/'.$item->product->_ProductImages->image ) }}" class="card-img-top card-img-product" alt="product">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div class="">
                          <p class="card-title product-name">{{$item->product->name}}</p>
                          <p class="dlv-to text-muted">Dikirim ke United Kingdom</p>
                          <p class="price"> Rp.{{ number_format($item->product->selling_price,2,',','.') }}</p>
                          <div class="d-flex align-items-center discount">
                            <div class="discount-percentage">50%</div>
                            <div class="discount-price text-muted">Rp 15.000,-</div>
                          </div>
                          <div class="d-flex align-items-center conclusion-product">
                            <i class="bi bi-star-fill text-warning"></i>
                            <p class="rating-text text-muted">4.5</p>
                            <p class="rating-text text-muted sold">terjual 1260</p>
                          </div>
                        </div>

                        <div class="d-flex flex-column align-items-center justify-content-between">
                          <p class="weight-product">500g</p>
                          <div class="d-flex flex-column product-card-icon">
                            <div>
                              <img src="{{ asset('frontend/img/ico/addcart/addcart-off.svg') }}" wire:click.prevent='addToCart({{ $item->id }})' >
                              </td>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                </div>
              </a>
              @empty
                  <h3>No Product Found</h3>
              @endforelse
            </div>
        </div>
    </div>
</div>
</div>