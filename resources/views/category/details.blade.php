@extends('layouts.app')
@section('description' , '{{$products->meta_description}}')
@section('keyword' , '{{$products->meta_keyword}}')
@section('content')
<main id="main" class="main-site mt-5">
    <div class="container pt-4">

        <div id="detail-product">

            <div class="row my-3">
                <div class="col-md-9">
                    <div class="card mb-3">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="wrap-breadcrumb det-cat pb-2">
                                    <ul class="det-cat">
                                        <li class="item-link"><a href="{{ url('/') }}" class="link">Home</a></li>
                                        <li class="item-link"><a href="{{ url('category/'.$categories->slug) }}" class="link">{{ $categories->name }}</a></li>
                                        <li class="item-link"><span>{{ $products->name }}</span></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="wrap-product-detail">
                        <div class="detail-media">
                            <div class="product-gallery">
                                <ul class="slides">
                                    @if ($products->ProductImages->isEmpty())
                                    <li data-thumb="{{ asset('frontend/img/default_product.png') }}">
                                        <img src="{{ asset('frontend/img/default_product.png') }}" alt="product thumbnail" />
                                    </li>
                                    @else
                                    @foreach($products->ProductImages as $item)
                                    <li data-thumb="{{ asset('image/uploads/products/'.$item->image) }}">
                                        <img src="{{ asset('image/uploads/products/'.$item->image) }}" alt="product thumbnail" />
                                    </li>
                                    @endforeach
                                    @endif
    
                                </ul>
                            </div>
                        </div>
                        <div class="detail-info">
                            <h1 class="product-name-detail">{{ $products->name }} </h1>
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
                                <p class="detail-price">Rp{{ number_format($products->selling_price,0,',','.') }}</span>
                                </p>
                            </div>
                            <div class="advance-info">
                                @if ($products->productColor->isEmpty())
                                @else
                                <div style="max-width: 400px;">
                                    <p>Pilih Warna</p>
                                    <div class="row d-flex">
                                        @foreach ($products->productColor as $color)
                                        <div class="col mt-2">
                                            <div class="form-check">
                                                <input style="background-color: {{$color->color->code}} " class="form-check-input" type="radio" name="color" id="color{{$color->color->id}}">
                                                <label class="form-check-label" for="color{{$color->color->id}}">
                                                    {{$color->color->name}}
                                                </label>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                @endif
                                @if ($products->productFlavor->isEmpty())
                                    
                                @else
                                <div class="mt-4" style="max-width: 400px;">
                                    <p>Pilih Rasa :</p>
                                    <div class="row d-flex">
                                        @foreach ($products->productFlavor as $flavor)
                                        <div class="col mt-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flavor" id="flavor{{$flavor->flavor->name}}">
                                                <label class="form-check-label" for="flavor{{$flavor->flavor->name}}">
                                                    {{$flavor->flavor->name}}
                                                </label>
                                              </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                @endif
                                 <div class="tab-control normal">
                                    <a href="#description" class="tab-control-item active mt-4 mb-0">Detail</a>
                                </div>
                                <div class="tab-contents">
                                    <div class="tab-content-item active" id="description">
                                        <p>Kategori <a href="{{ url('category/'.$categories->slug) }}">{{ $categories->name }}</a>
                                        </p>
                                        @if ($products->provice->title)
                                        <p>Daerah Asal <a href="{{ url('daerah/'.$products->provice->slug) }}">{{ $products->provice->title }}</a>
                                        </p>
                                        @else
    
                                        @endif
                                        @if ($products->brands)
                                        <p>Merek <a href="{{ url('brands/'.$products->brands->slug) }}">{{ $products->brands->name }}</a></p>
                                        @else
    
                                        @endif
                                        <p class="short-description">{{ $products->description }}</p>
                                        <table class="shop_attributes">
                                            <tbody>
                                                <tr>
                                                    <th>Berat</th>
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
    
            <div class="row my-3">
                <div class="col-lg-9">
                    <div class="mt-4">
                        <div class="d-flex">
                            <a class="text-oren" href="">
                                <h5 class="mb-0 fw-bold" style="margin-left: 30px">Ulasan Pengiriman</h5>
                            </a>
                        </div>
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
                                <div class="ulasan-pilihan border-top mt-3 pt-2">
                                    <div class="diskusiHeader">
                                        <h5 class="diskusi-judul">Diskusi Product(10)</h5>
                                        <p class="diskusi-product-name">PANCI MASAK / STOCK POT / PANCI TINGGI 26 CM ORCHID</p>
                                    </div>
                                    <div>
                                        <div class="diskusi-wrap">
                                            <div class="qna">
                                                <div class="img"></div>
                                                <p>
                                                    Ada pertanyaan? <br>
                                                    <b>Diskusi dengan Masta & Bagas atau MBestie lainnya</b>
                                                </p>
                                                <button>Tulis Pertanyaan</button>
                                            </div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </div>
                                    <div class="diskusiBody">
                                            <div class="qna" style="margin-bottom:0">
                                                <div class="d-flex">
                                                    <div class="me-4">
                                                        <img src="{{ asset('image/uploads/avatars/iTO5kl7HF9aqwlTJ2vYBpahgvY6rCHP0o0TcYesb.png') }}"
                                                            width="35px" alt="">
                                                    </div>
                                                    <div>
                                                        <p class="fw-bold">Hebron Saul Fidilius</p>
                                                        <p>Sedih Kalau Dibahas</p>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-just-text">Ikuti
                                                    Diskusi</button>
                                            </div>
                                            <div class="reply" style="background-color: rgba(0,0,0,.05);margin-bottom: 20px;">
                                                <div class="container py-4" style="padding-left: 80px;">
                                                    <div class="row">
                                                        <div class="col py-3 d-flex">
                                                            <div class="me-4">
                                                                <img src="{{asset('image/uploads/avatars/dZyrjQnuKDK46IzNz5ohy6jQX8q9ECncM54wU0X7.png')}}" width="35px" alt="">
                                                            </div>
                                                            <div>
                                                                <p class="fw-bold" style="margin-bottom: 0">Subhan</p>
                                                                <p>Maap juga ya </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="row g-3 align-items-center">
                                                                <div class="col-auto">
                                                                    <img src="{{asset('image/uploads/avatars/iTO5kl7HF9aqwlTJ2vYBpahgvY6rCHP0o0TcYesb.png')}}" width="35px" alt="">
                                                                </div>
                                                                <div class="col-auto w-75">
                                                                  <input type="text" placeholder="Isi komentar disini..." class="form-control " aria-describedby="passwordHelpInline">
                                                                </div>
                                                              </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating my-4">
                                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 150px"></textarea>
                                                <label for="floatingTextarea2">Apa yang ingin anda tanyakan mengenai product ini ?</label>
                                                <div class="qna" style="margin-bottom:0">
                                                    <div class="d-flex">
                                                    
                                                    </div>
                                                    <button type="button" class="btn btn-secondary btn-sm">Kirim</button>
                                                </div>
                                              </div>
    
                                            <div class="qna d-flex justify-content-end" >
                                                <p>Atau hubungi langsung penjual</p>
                                                <p class="mx-4">|</p>
                                                <button type="button" class="btn btn-just-text">Chat Penjual</button>
                                            </div>
                                    </div>
                                    
    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if ($products_category->count() !== 0)
        <section class="viral-wrap my-3">
            <div class="bg-cat">
                <div class="row">
                    <div class="col-8 d-flex my-auto">
                        <p class="px-4 mb-0" style="font-size: 40px; font-weight:500; letter-spacing: -1px">Produk Lainnya di Kategori Ini</p>
                    </div>
                    <div class="col-4 d-flex justify-content-end my-auto">
                        <div class="p-2">
                            <a class="btn btn-lihat" href="{{ url('category/'.$products->category->slug) }}" style="text-decoration: none; color: black;">
                                Lihat semua
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mb-5">
                <div class="bks-cat">
                    <div id="carou-cat3" class="hashtag owl-carousel owl-theme">
                        @foreach ($products_category as $product)
                        <a href="{{url('category/'.$product->category->slug.'/'.$product->slug)}}" style="text-decoration: none; color:black;">
                            <div class="ms-2 me-2">
                                <div class="d-flex flex-wrap gap-4">
                                    <div class="card card-product mt-2">
                                        <div class="card-header p-0">
                                            <div style="aspect-ratio: 1 / 1; background-color: #ff4200">
                                                @if ($product->ProductImages->isEmpty())
                                                <img src="{{asset('frontend/img/default_product.png') }}">

                                                @else
                                                <img src="{{ asset('image/uploads/products/'.$product->_ProductImages->image) }}">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="container">
                                                <div class="row pb-2">
                                                    <div class="d-flex" style="height: 1.7rem">
                                                        <div class="position-absolute label-product px-3 py-1 terviral">
                                                            Terviral
                                                        </div>
                                                        <div class="position-absolute label-product px-3 py-1 terlaris d-flex justify-content-end">
                                                            Terlaris
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <p class="product-name" style="height: 40px;line-height: 1.2;margin-bottom: 4px;">{{$product->name}}</p>
                                                    </div>
                                                </div>
                                                <div class="row d-flex justify-content-center align-items-center" style="height: 40px;">
                                                    <div class="col-8 d-flex justify-content-start pe-0">
                                                        <p class="price">Rp{{number_format($product->selling_price,0,',','.');}}</p>
                                                    </div>
                                                    <div class="col ps-0">
                                                        <div class="d-flex justify-content-end">
                                                            <p>
                                                                <strong style="font-size: 16px;">{{ $product->weight }}</strong>
                                                                <span style="font-size: 12px;">Kg</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col d-flex justify-content-start">
                                                        <div class="d-flex justify-content-center align-content-center">
                                                            <i class="bi bi-star-fill text-warning me-1" style="margin-top: 5px;"></i>
                                                            <p class="rating-text mb-0">4.5 |</p>
                                                        </div>
                                                        <div>
                                                            <p class="rating-text sold ms-2 mb-0"> terjual {{ $product->sold }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    {{-- livewire --}}
                                                    <livewire:frontend.c-t-a.wish-cart :product="$product">
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
        </section>
        @endif
        @if ($brands->count() !== 0)
        <section class="viral-wrap my-3">
            <div class="bg-cat">
                <div class="row">
                    <div class="col-8 d-flex my-auto">
                        <p class="px-4 mb-0" style="font-size: 40px; font-weight:500; letter-spacing: -1px">Produk Lainnya di Merek Ini</p>
                    </div>
                    <div class="col-4 d-flex justify-content-end my-auto">
                        <div class="p-2">
                            <a class="btn btn-lihat" href="{{ url('brands/'.$products->brands->slug) }}" style="text-decoration: none; color: black;">
                                Lihat semua
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mb-5">
                <div class="bks-cat">
                    <div id="carou-cat3" class="hashtag owl-carousel owl-theme">
                        @foreach ($brands as $product)
                        <a href="{{url('brands/'.$product->brands->slug.'/'.$product->slug)}}" style="text-decoration: none; color:black;">
                            <div class="ms-2 me-2">
                                <div class="d-flex flex-wrap gap-4">
                                    <div class="card card-product mt-2">
                                        <div class="card-header p-0">
                                            <div style="aspect-ratio: 1 / 1;">
                                                @if ($product->ProductImages->isEmpty())
                                                <img src="{{ asset('frontend/img/default_product.png') }}">

                                                @else
                                                <img src="{{ asset('image/uploads/products/'.$product->_ProductImages->image) }}">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="container">
                                                <div class="row pb-2">
                                                    <div class="d-flex" style="height: 1.7rem">
                                                        <div class="position-absolute label-product px-3 py-1 terviral">
                                                            Terviral
                                                        </div>
                                                        <div class="position-absolute label-product px-3 py-1 terlaris d-flex justify-content-end">
                                                            Terlaris
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <p class="product-name" style="height: 40px;line-height: 1.2;margin-bottom: 4px;">{{$product->name}}</p>
                                                    </div>
                                                </div>
                                                <div class="row d-flex justify-content-center align-items-center" style="height: 40px;">
                                                    <div class="col-8 d-flex justify-content-start pe-0">
                                                        <p class="price">Rp{{number_format($product->selling_price,0,',','.');}}</p>
                                                    </div>
                                                    <div class="col ps-0">
                                                        <div class="d-flex justify-content-end">
                                                            <p>
                                                                <strong style="font-size: 16px;">{{$product->weight}}</strong>
                                                                <span style="font-size: 12px;">Kg</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col d-flex justify-content-start">
                                                        <div class="d-flex justify-content-center align-content-center">
                                                            <i class="bi bi-star-fill text-warning me-1" style="margin-top: 5px;"></i>
                                                            <p class="rating-text mb-0">4.5 |</p>
                                                        </div>
                                                        <div>
                                                            <p class="rating-text sold ms-2 mb-0"> terjual {{$product->sold}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    {{-- livewire --}}
                                                    <livewire:frontend.c-t-a.wish-cart :product="$product">
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
        </section>
        @endif



    </div>
</main>
@endsection

@section('script')

<script>
    $.fn.followTo = function () {
        var $this = this,
            $window = $(window);

        $window.scroll(function (e) {
            if (
                $window.scrollTop() > $('#detail-product').height() - 500
            ) {
                $this.css({
                    position: "absolute",
                    top: $('#detail-product').height() - 410,
                    width: $('.col-md-3').width()
                });
            } else {
                $this.css({
                    position: "fixed",
                    top: 90,
                    width: $('.col-md-3').width()
                });
            }
        });
    };

    document.addEventListener('contentChanged', function(e) {
        var $this = $("#theFixed"),
            $window = $(window);

        if (
            $window.scrollTop() > $('#detail-product').height() - 500
        ) {
            $this.css({
                position: "absolute",
                top: $('#detail-product').height() - 410,
                width: $('.col-md-3').width()
            });
        } else {
            $this.css({
                position: "fixed",
                top: 90,
                width: $('.col-md-3').width()
            });
        }
    })

    $("#theFixed").followTo();
</script>

<!--using sweetalert via CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    const copyBtn = document.getElementById('copyBtn')
    const copyText = document.getElementById('copyText')

    copyBtn.onclick = () => {
        copyText.select(); // Selects the text inside the input
        document.execCommand('copy'); // Simply copies the selected text to clipboard 
        Swal.fire({ //displays a pop up with sweetalert
            icon: 'success',
            title: 'Link successful copied',
            showConfirmButton: false,
            timer: 1000
        });
    }
</script>
@endsection