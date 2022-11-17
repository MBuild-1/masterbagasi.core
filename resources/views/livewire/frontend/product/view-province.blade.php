<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
    <div class="detail-info border px-3 py-2" id="theFixed">
        <p class="fw-bold h6 m-0 ">Atur Jumlah dan Catatan</p>
        <div class="d-flex flex-row justify-content-center">
            <label class="label-stock p-2 text-center text-white my-4 w-100" style="background-color: #ff4200;border-radius: 5px; height:45px;">In Stock</label>
        </div>
        <div class="quantity d-flex flex-row justify-content-center">
            <div class="quantity-input">
                <a class="btn btn-reduce" wire:click='decrementQuantity'></a>
                <input readonly type="text" name="product-quatity" value="{{ $this->quantityCount }}" data-max="120"
                    pattern="[0-9]*">
                <a class="btn btn-increase" wire:click='incrementQuantity'></a>
            </div>
        </div>

        <div class="my-4">
            <p class="m fw-bold">Catatan</p>
            <textarea class="input-tambah-catatan" placeholder="Contoh: Warna Putih" cols="30" rows="1"
                wire:model="note" onfocus="auto_grow(this)" onkeypress="auto_grow(this)" onkeyup="auto_grow(this)"
                maxlength="144" style="resize:none; overflow: hidden;"></textarea>
        </div>
        <div class="subtotal d-flex justify-content-between align-items-end gap-5">
            <p class="m-0 fw-bold">Subtotal</p>
            <div class="wrap-price">
                <p class="product-price">Rp.
                    {{ number_format($this->quantityCount*$products->selling_price,2,',','.') }}
                </p>
            </div>
        </div>

        <div class="wrap-butons d-flex flex-column justify-content-center">
            <div>
                <a type="button" wire:click='addToCart({{ $products->id }})' class="btn add-to-cart">+
                    Keranjang</a>
            </div>
            <div class="d-flex flex-row justify-content-around">
                @if($wishlistIsset)
                    <button wire:loading.remove wire:click='addToWishlist({{ $products->id }})'
                        class="btn btn-compare"><i class="fa-solid fa-heart px-2"
                            style="color: crimson"></i></i>Wishlist</button>
                    <button wire:loading wire:target='addToWishlist' class="btn btn-compare">Remove...</button>
                @else
                    <button wire:loading.remove wire:click='addToWishlist({{ $products->id }})'
                        class="btn btn-compare"><i class="fa-regular fa-heart px-2"></i></i>Wishlist</button>
                    <button wire:loading wire:target='addToWishlist' class="btn btn-compare">Adding...</button>
                @endif
                <a data-bs-toggle="modal" href="#exampleModalToggle" role="button" class="btn btn-share"><i
                        class="fa-solid fa-share px-2"></i>Share</a>
                <a data-bs-toggle="modal" href="#exampleModalToggle" role="button" class="btn btn-share"><img src="{{asset('frontend/img/ico/inbox/dd/chat-off.svg')}}" width="20px" alt=""> Chat</a>
            </div>
        </div>
    </div>
</div>
</div>


<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Share</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row d-flex flex-column">
                        <div class="col d-flex flex-row justify-content-center align-items-center">
                            <img src="{{ asset('image/uploads/products/'.$products->_ProductImages->image) }}"
                                alt="" width="100px">
                            <h4>{{ $products->name }}</h4>
                        </div>
                        <div class="col py-4">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">@</span>
                                <input readonly value="{{ url()->current() }}" id="copyText" type="text"
                                    class="form-control">
                                <button id="copyBtn" class="btn btn-secondary"><i class="fa-solid fa-copy"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <a id="copyBtn" style="background-color: #4267B2" class="btn btn-primary w-100"
                                href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}}"><i
                                    class=" fa-brands fa-facebook px-2 py-1"></i>Facebook</a>
                        </div>
                        <div class="col">
                            <a id="copyBtn" style="background-color: #25D366" class="btn btn-primary w-100"
                                href="whatsapp://send?text={{ url()->current() }}"><i
                                    class=" fa-brands fa-whatsapp px-2 py-1"></i>Whatsapp</a>
                        </div>
                        <div class="col">
                            <a id="copyBtn" style="background-color: #1DA1F2" class="btn btn-primary w-100"
                                href="https://twitter.com/intent/tweet?text={{ url()->current() }}"><i
                                    class=" fa-brands fa-twitter px-2 py-1"></i>Twitter</a>
                        </div>
                        <div class="col">
                            <a id="copyBtn" style="background-color: #0088cc" class="btn btn-primary w-100"
                                href="https://t.me/share/url?url={{ url()->current() }}"><i
                                    class=" fa-brands fa-telegram px-2 py-1"></i>Telegram</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

