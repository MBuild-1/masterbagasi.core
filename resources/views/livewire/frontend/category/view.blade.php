

<div class="container d-flex flex-row">
    <div class="row mt-5" style="margin-right: 14px">
        <div class="col">
            <div class="card" style="width: 14rem;cursor:default;">
                <div class="card-header fw-bold">
                    Filter
                </div>
                <ul class="list-group list-group-flush">
                    <p class="list-group-item">Brand</p>
                    <li class="list-group-item">
                        <div class="form-check d-flex flex-column">
                            @foreach($categories->brand as $item)
                                <div class="my-1">
                                    <input class="form-check-input" wire:model="inputBrands" type="checkbox"
                                        value="{{ $item->name }}" id="{{ $item->name }}" style="cursor: pointer">
                                    <label class="form-check-label" for="{{ $item->name }}">
                                        {{ $item->name }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row mt-5 px-2" style="margin-left: 10px;">
        <div class="col-md category-product">
            <div class="d-flex gap-3 flex-wrap">
                @foreach($products as $product)
                    <a href="{{ url('category/'.$categories->slug.'/'.$product->slug) }}"
                        style="text-decoration: none; color:black">
                        <div class="card card-product">
                            <img src="{{ asset('image/uploads/products/'.$product->_ProductImages->image) }}"
                                class="card-img-top card-img-product" alt="product" width="50px">
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
</div>
</div>