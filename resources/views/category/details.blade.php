@extends('layouts.app')
@include('home.navbar')
@section('content')
<div class="container">
    <main id="main" class="main-site detail-product">
        <div class="wrap-breadcrumb pb-4">
            <ul>
                <li class="item-link"><a href="{{ url('/') }}" class="link">Home</a></li>
                <li class="item-link"><a href="{{ url('category/'.$categories->slug) }}"
                        class="link">{{ $categories->name }}</a></li>
                <li class="item-link"><span>{{ $products->name }}</span></li>
            </ul>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
                    <div class="wrap-product-detail">
                        <div class="detail-media">
                            <div class="product-gallery">
                                <ul class="slides">
                                    @foreach($products->ProductImages as $item)
                                        <li
                                            data-thumb="{{ asset('image/uploads/products/'.$item->image) }}">
                                            <img src="{{ asset('image/uploads/products/'.$item->image) }}"
                                                alt="product thumbnail" />
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="detail-info">
                            <h1 class="product-name-detail"><strong>{{ $products->name }}</strong> </h1>
                            <div class="product-rating d-flex gap-2">
                                <div>
                                    <p>Terjual <span class="count-review">2rb+</span></p>
                                </div>
                                <span>•</span>
                                <div class="d-flex gap-1">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <p>4.9 <span class="count-review">(210 rating)</span></p>
                                </div>
                                <span>•</span>
                                <div>
                                    <p>Diskusi <span class="count-review">(274)</span></p>
                                </div>
                            </div>
                            <div class="short-desc">
                                <p class="detail-price">Rp.
                                    {{ number_format($products->selling_price,2,',','.') }}</span>
                                </p>
                            </div>
                            <div class="advance-info">
                                <div class="tab-control normal">
                                    <a href="#description" class="tab-control-item active">Detail</a>
                                    <a href="#add_infomation" class="tab-control-item">Info Penting</a>
                                </div>
                                <div class="tab-contents">
                                    <div class="tab-content-item active" id="description">
                                        <p>Kategori <a
                                                href="{{ url('category/'.$categories->slug) }}">{{ $categories->name }}</a>
                                        </p>
                                        @if ($products->provice->title)
                                        <p>Daerah Asal <a
                                            href="{{ url('daerah/'.$products->provice->slug) }}">{{ $products->provice->title }}</a>
                                    </p>
                                        @else
                                            
                                        @endif
                                        <p>Brand <a
                                                href="{{ url('brands/'.$products->brands->slug) }}">{{ $products->brands->name }}</a>
                                        </p>
                                        <p class="short-description">{{ $products->description }}</p>
                                    </div>
                                    <div class="tab-content-item " id="add_infomation">
                                        <table class="shop_attributes">
                                            <tbody>
                                                <tr>
                                                    <th>Weight</th>
                                                    <td class="product_weight">{{$products->weight}} kg</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <livewire:frontend.product.view :categories="$categories" :products="$products" />
            </div>

            <div class="row">
                <div class="col-lg-9">
                    <h5 style="margin-left: 30px">Ulasan Pembeli</h5>
                    <div class="wrap-product-ulasan d-flex gap-3 py-3">
                        <div class="ulasan-rating d-flex align-items-center flex-column">
                            <div class="d-flex gap-2">
                                <i class="fa fa-star" aria-hidden="true" style="line-height: 70px;"></i>
                                <p class="score">4.6 <span>/ 5</span></p>
                            </div>
                            <p class="fw-bold">96% Pembeli merasa puas</p>
                            <div class="d-flex w-100">
                                <div class="flex-grow-1">
                                    <div class="row align-items-center mb-1">
                                        <div class="col-2 text-end"><i class="fa fa-star" aria-hidden="true"></i>5</div>
                                        <div class="col-8">
                                            <div class="progress" style="height: 10px">
                                                <div class="progress-bar" role="progressbar" style="width: 75%"
                                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-2">10</div>
                                    </div>
                                    <div class="row align-items-center mb-1">
                                        <div class="col-2 text-end"><i class="fa fa-star" aria-hidden="true"></i>4</div>
                                        <div class="col-8">
                                            <div class="progress" style="height: 10px">
                                                <div class="progress-bar" role="progressbar" style="width: 75%"
                                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-2">10</div>
                                    </div>
                                    <div class="row align-items-center mb-1">
                                        <div class="col-2 text-end"><i class="fa fa-star" aria-hidden="true"></i>3</div>
                                        <div class="col-8">
                                            <div class="progress" style="height: 10px">
                                                <div class="progress-bar" role="progressbar" style="width: 75%"
                                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-2">10</div>
                                    </div>
                                    <div class="row align-items-center mb-1">
                                        <div class="col-2 text-end"><i class="fa fa-star" aria-hidden="true"></i>2</div>
                                        <div class="col-8">
                                            <div class="progress" style="height: 10px">
                                                <div class="progress-bar" role="progressbar" style="width: 75%"
                                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-2">10</div>
                                    </div>
                                    <div class="row align-items-center mb-1">
                                        <div class="col-2 text-end"><i class="fa fa-star" aria-hidden="true"></i>1</div>
                                        <div class="col-8">
                                            <div class="progress" style="height: 10px">
                                                <div class="progress-bar" role="progressbar" style="width: 75%"
                                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-2">10</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ulasan-pembeli" style="border-top: 1px solid gray; ">
                            <div class="foto-video-wrap mt-2">
                                <h5>Foto & Video Pembeli</h5>
                                <div class="foto-video-pembeli d-flex gap-2">
                                    <button class="button">
                                        <div>
                                            <img src="{{ asset('frontend/img/produk/sidomuncul.png') }}"
                                                alt="">
                                        </div>
                                    </button>
                                    <button class="button">
                                        <div>
                                            <img src="{{ asset('frontend/img/produk/sidomuncul.png') }}"
                                                alt="">
                                        </div>
                                    </button>
                                    <button class="button">
                                        <div>
                                            <img src="{{ asset('frontend/img/produk/sidomuncul.png') }}"
                                                alt="">
                                        </div>
                                    </button>
                                    <button class="button">
                                        <div>
                                            <img src="{{ asset('frontend/img/produk/sidomuncul.png') }}"
                                                alt="">
                                        </div>
                                    </button>
                                    <button class="button">
                                        <div>
                                            <img src="{{ asset('frontend/img/produk/sidomuncul.png') }}"
                                                alt="">
                                        </div>
                                    </button>
                                </div>
                            </div>
                            <div class="ulasan-pilihan border-top mt-3 pt-2">
                                <h5 class="fw-bold">Ulasan Pilihan</h5>
                                <p>Menampilkan 1 dari 10 Ulasan</p>

                                <div class="ulasan" style="border-bottom: 1px solid #231F20">
                                    <div class="rating mt-4 d-flex gap-2">
                                        <div>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                        <p class="text-muted">Hari ini</p>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ asset('frontend/img/product/produk1.jpg') }}"
                                            style="width: 32px; border-radius: 50%">
                                        <p class="fw-bold m-0">Subhan</p>
                                    </div>
                                    <p class="mt-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum
                                        placeat nulla veniam odio excepturi non voluptatem porro optio fuga ut ab harum
                                        eius
                                        architecto expedita, dignissimos earum fugit et fugiat.</p>
                                    <div class="foto-ulasan"></div>
                                    <div class="d-flex justify-content-between">
                                        <p><i class="fa-solid fa-thumbs-up"></i> Membantu</p>
                                        <p>Lihat Balasan <i class="fa-solid fa-chevron-down"></i></p>
                                    </div>
                                </div>
                                <div class="ulasan" style="border-bottom: 1px solid #231F20">
                                    <div class="rating mt-4 d-flex gap-2">
                                        <div>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                        <p class="text-muted">Hari ini</p>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ asset('frontend/img/product/produk1.jpg') }}"
                                            style="width: 32px; border-radius: 50%">
                                        <p class="fw-bold m-0">Subhan</p>
                                    </div>
                                    <p class="mt-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum
                                        placeat nulla veniam odio excepturi non voluptatem porro optio fuga ut ab harum
                                        eius
                                        architecto expedita, dignissimos earum fugit et fugiat.</p>
                                    <div class="foto-ulasan"></div>
                                    <div class="d-flex justify-content-between">
                                        <p><i class="fa-solid fa-thumbs-up"></i> Membantu</p>
                                        <p>Lihat Balasan <i class="fa-solid fa-chevron-down"></i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </main>
</div>
@endsection

@section('script')

    <script>
       $.fn.followTo = function (pos) {
        var $this = this,
            $window = $(window);

        $window.scroll(function (e) {
            if (
                $window.scrollTop() >
                $(".short-desc").height() + $(".ulasan-pembeli").height() + 90
            ) {
                $this.css({
                    position: "absolute",
                    top: $(".short-desc").height() +
                        $(".ulasan-pembeli").height() +
                        130,
                });
            } else {
                $this.css({
                    position: "fixed",
                    top: 130,
                });
            }
        });
    };

    document.addEventListener('contentChanged', function(e) {
        var $this = $("#theFixed"),
            $window = $(window);

        if (
            $window.scrollTop() >
            $(".short-desc").height() + $(".ulasan-pembeli").height() + 90
        ) {
            $this.css({
                position: "absolute",
                top: $(".short-desc").height() +
                    $(".ulasan-pembeli").height() +
                    130,
            });
        } else {
            $this.css({
                position: "fixed",
                top: 130,
            });
        }
    })

    $("#theFixed").followTo($(".detail-info").height());
    </script>

<!--using sweetalert via CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    const copyBtn = document.getElementById('copyBtn')
    const copyText = document.getElementById('copyText')
    
    copyBtn.onclick = () => {
        copyText.select();    // Selects the text inside the input
        document.execCommand('copy');    // Simply copies the selected text to clipboard 
         Swal.fire({         //displays a pop up with sweetalert
            icon: 'success',
            title: 'Link successful copied',
            showConfirmButton: false,
            timer: 1000
        });
    }
</script>
@endsection
