{{-- @extends('layouts.app')
@include('home.navbar')
@section('content')

@include('home.banner') --}}

{{-- category
  <section class="cat-wrap mt-4">
    <div class="bg-cat">
      <p class="px-4" style="letter-spacing: 3px"><span class="fw-bold" style="font-size: 40px;">Semakin Mudah.</span>  Apapun yang kamu kangenin dari Indonesia, kami bawain.</p>
    </div>
    <div class="container mb-5">
      <div class="bks-cat">
        <div id="carou-cat" class="owl-carousel owl-theme">
          @foreach ($categories as $category)
          <a href="{{url('category/'.$category->slug)}}">
<div class="d-flex flex-column">
    <div class="ms-2 mx-2 card">
        <img src="{{asset('image/uploads/category/'.$category->image)}}" class="card-img-top">
    </div>
    <a class="btn btn-danger mx-5">{{$category->name}}</a>
</div>
</a>
@endforeach
</div>
</div>
</div>
</section> --}}

{{-- category --}}
{{-- <section class="cat-wrap mt-4">
    <div class="bg-cat">
        <p class="px-4" style="letter-spacing: 3px"><span class="fw-bold" style="font-size: 40px;">Semakin Mudah.</span>
            Apapun yang kamu kangenin dari Indonesia, kami bawain.</p>
    </div>
    <div class="container mb-5">
        <div class="bks-cat">
            <div id="carou-cat" class="owl-carousel owl-theme">
                @foreach ($categories as $category)
                <div class="d-flex flex-column align-items-center">
                    <a href="{{url('category/'.$category->slug)}}">
                        <div class="card">
                            <img src="{{asset('image/uploads/category/'.$category->image)}}" class="card-img-top">
                        </div>
                        <a class="btn btn-danger mx-auto px-2" style="width: 80%">{{$category->name}}</a>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section> --}}


{{-- Brand Asli Indonesia --}}
{{-- <section class="categories cat-top p-2">
    <div class="row">
        <div class="col-lg-12">
            <div class="section-title">
                <h4>Brand Asli Indonesia</h4>
            </div>
        </div>
    </div>
    <div id="carou-cat2" class="owl-carousel owl-theme cat-cat">
        @foreach ($brands as $brand)
        <a href="{{url('brands/'.$brand->slug)}}">
            <div class="ms-2 me-2 d-flex flex-column">
                <div class="circle brand-img">
                    <img src="{{asset('image/uploads/brands/'.$brand->image)}}">
                </div>
                <span class="text-center mt-4" style="font-size: 18px; color:black;">{{$brand->name}}</span>
            </div>
        </a>
        @endforeach
    </div>
</section> --}}



{{-- Lagi Viral --}}
{{-- <section class="viral-wrap mt-5">
    <div class="bg-cat">
        <p class="px-4" style="letter-spacing: 3px"><span class="fw-bold" style="font-size: 40px;">{{$hastags->hastag->name}}.</span>
           </p>
    </div>
    <div class="container mb-5">
        <div class="bks-cat">
            <div id="carou-cat3" class="owl-carousel owl-theme">
                @foreach ($masakanibu as $product)
                <a href="{{url('category/'.$product->product->category->slug.'/'.$product->product->slug)}}" style="text-decoration: none; color:black;">
                    <div class="ms-2 me-2">
                        <div class="d-flex flex-wrap gap-4">
                            <div class="card card-product">
                                <img src="{{ asset('image/uploads/products/'.$product->product->_ProductImages->image) }}"
                                    class="card-img-top card-img-product" alt="product">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div class="">
                                            <p class="card-title product-name">{{$product->product->name}}</p>
                                            <p class="dlv-to text-muted"> Dikirim ke United Kingdom</p>
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
                        </div>
                    </div>
                 </a>
                @endforeach
            </div>
        </div>
    </div>
</section> --}}

{{-- <div class="bundling"></div>



<div class="banr"></div>

<form action="/cargo" class="country">
    <select class="form-select country-select" aria-label="Default select example" name="cargo_country" >
        <option selected>Select Country</option>
        @foreach ($countries as $country)
        <option value="{{$country->id}}">{{$country->name}}</option>
        @endforeach
      </select>
</form>
             
    --}}
    
{{-- Aneka Rempah --}}
{{-- <section class="categories mt-5">
    <div class="row">
        <div class="col-sm-3" style="height: 100%">
            {{-- <h4>Aneka Rempah & Bumbu Dapur</h4> --}}
            {{-- <img src="{{asset('frontend/img/dummy/aneka4.png')}}" class="card-img-top" style="height: 100%">
        </div>
        <div class="col-sm" style="height: 100%">
            {{-- <h4>Aneka Rempah & Bumbu Dapur</h4> --}}
            {{-- <img src="{{asset('frontend/img/dummy/aneka8.png')}}" class="card-img-top reflection" style="height: 100%">
        </div>
    </div> --}}

{{-- </section>  --}} --


{{-- Reels
  <section class="reels cat-top py-4">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
          <h4>Reels</h4>
        </div>
      </div>
    </div>
    <div id="carocaro" class="owl-carousel owl-theme">
      <div class="ms-2 me-2">
        <div class=" video1 vid1">
          <video width="320" height="570" controls>
            <source src="{{asset('frontend/vid/reels1.mp4')}}" type="video/mp4" />
</video>
</div>
</div>
<div class="ms-2 me-2">
    <div class=" video1">
        <video width="320" height="570" controls>
            <source src="{{asset('frontend/vid/reels2.mp4')}}" type="video/mp4" />
        </video>
    </div>
</div>
<div class="ms-2 me-2">
    <div class=" video1">
        <video width="320" height="570" controls>
            <source src="{{asset('frontend/vid/reels3.mp4')}}" type="video/mp4" />
        </video>
    </div>
</div>
<div class="ms-2 me-2">
    <div class=" video1">
        <video width="320" height="570" controls>
            <source src="{{asset('frontend/vid/reels4.mp4')}}" type="video/mp4" />
        </video>
    </div>
</div>
<div class="ms-2 me-2">
    <div class=" video1">
        <video width="320" height="570" controls>
            <source src="{{asset('frontend/vid/reels5.mp4')}}" type="video/mp4" />
        </video>
    </div>
</div>
<div class="ms-2 me-2">
    <div class=" video1">
        <video width="320" height="570" controls>
            <source src="{{asset('frontend/vid/reels2.mp4')}}" type="video/mp4" />
        </video>
    </div>
</div>
</div>
</section> --}}


{{-- MAPS --}}
  {{-- <section class="categories my-5 p-3">
	<div class="row">
		<div class="col-lg-12">
		  <div class="section-title">
			<h4>Search by Map</h4>
		  </div>
		</div>
	</div>

	<form action="" method="get">
	<div class="mapnih mb-5">
		<svg viewBox="0 0 1376 494" fill="none" xmlns="http://www.w3.org/2000/svg">
		<g id="Group 1" filter="url(#filter0_d_840_372)">
		@foreach ($maps as $item)
		<a xlink:title="{{$item->title}}" xlink:href="{{url('daerah/'.$item->slug)}}" >
			<path id="Vector{{$item->id}}" d="{{$item->vector}}" fill="#F4F4F4"/>
		</a>
		@endforeach
	
		</g>
		<defs>
		<filter id="filter0_d_840_372" x="0" y="0" width="1376" height="494" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
		<feFlood flood-opacity="0" result="BackgroundImageFix"/>
		<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
		<feOffset dy="4"/>
		<feGaussianBlur stdDeviation="2"/>
		<feComposite in2="hardAlpha" operator="out"/>
		<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
		<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_840_372"/>
		<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_840_372" result="shape"/>
		</filter>
		</defs>
		</svg>
	</div>

	</form>
</section> --}}


{{-- berita --}}
{{-- <section class="categories">
    <div class="row">
        <div class="col-lg-12">
            <div class="section-title">
                <h4>Berita & Youtube</h4>
            </div>
        </div>
    </div>
    @include('home.news')
</section>

@include('home.popup')


@endsection --}}




@extends('layouts.app')
@section('content')

<div class="container mt-5">
  {{-- @include('home.banner') --}}
  {{-- category --}}

  <section class="cat-wrap mt-4">
    <div class="bg-cat">
      <p class="px-4" style="font-family: Inter; font-size:28px; font-weight:100px; letter-spacing: -1px; position:relative; top:20px"><span style="font-family: Gantari; font-size: 47px; font-weight:500; letter-spacing: -1px">Semakin Mudah.</span>  Apapun yang kamu kangenin dari Indonesia, ada disini.</p>
    </div>
    <div class="container mb-5">
      <div class="bks-cat">
        <div id="carou-cat" class="owl-carousel owl-theme">
          @foreach ($categories as $category)
          <div class="d-flex flex-column align-items-center pikistaw">
            <a href="{{url('category/'.$category->slug)}}">
            <div class="card">
              <img src="{{asset('image/uploads/category/'.$category->image)}}" style="width: auto; height:100%">
            </div>
           <a href="{{url('category/'.$category->slug)}}" class="btn btn-cat mx-auto p-2 pikistel" style="font-family:Inter; font-weight: 500; font-size:15px; width: 80%; border-left: 3px solid #fda31b">{{$category->name}}</a>
          </a>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
  
  {{-- Brand Asli Indonesia --}}
  <section class="categories mt-4">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
          <h4>Brand Asli Indonesia</h4>
        </div>
      </div>
    </div>
    <div id="carou-cat2" class="owl-carousel owl-theme cat-cat">
      @foreach ($brands as $brand)
      <a href="{{url('brands/'.$brand->slug)}}">
      <div class="ms-2 me-2 d-flex flex-column">
        <div class="circle brand-img">
          <img src="{{asset('image/uploads/brands/'.$brand->image)}}">
        </div>
        <span class="text-center mt-4" style="font-size: 18px; color:black;">{{$brand->name}}</span>
      </div>
    </a>
      @endforeach
    </div>
  </section>
  
  {{-- Lagi Viral --}}
  <section class="viral-wrap mt-4">
    <div class="bg-cat">
      <div class="row">
        <div class="col-8">
          <p class="px-4" style="font-family: Inter; font-size:25px; font-weight:100px; letter-spacing: -1px; position:relative;"><span style="font-family: Gantari; font-size: 36px; font-weight:500; letter-spacing: -1px">Yuk Ikutan.</span>  Yang lagi viral di Indonesia</p>
        </div>
        <div class="col-4">
          <div style="position: relative;">
            <a href="{{url('brands/'.$brand->slug)}}" style="text-decoration: none; color: black; position: absolute; top: 10px; right: 25px;">
              <p class="m-0">Lihat semua</p>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="container mb-5">
      <div class="bks-cat">
        <div id="carou-cat3" class="hashtag owl-carousel owl-theme">
         @foreach ($masakanibu as $product)
         <a href="{{url('category/'.$product->product->category->slug.'/'.$product->product->slug)}}" style="text-decoration: none; color:black;">
          <div class="ms-2 me-2">
            <div class="d-flex flex-wrap gap-4">
              <div class="card card-product">
                <img src="{{ asset('image/uploads/products/'.$product->product->_ProductImages->image) }}">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="">
                        <p class="card-title product-name">Gudeg Mercon Bu Narti Telor Ayam Suwir</p>
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
                        
                        </div>
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

  {{-- Banner panjang klik --}}
  <section class="banr mt-4">
    <div id="BannerPanjang" class="owl-carousel owl-theme">
      <div class="item">
        <img src="{{asset('frontend/img/banner/promoUK.png')}}" class="d-block w-100">
      </div>
      <div class="item">
        <img src="{{asset('frontend/img/banner/promoAustralia.png')}}" class="d-block w-100">
      </div>
      <div class="item">
        <img src="{{asset('frontend/img/banner/promoUSA.png')}}" class="d-block w-100">
      </div>
      <div class="item">
        <img src="{{asset('frontend/img/banner/promoEropa.png')}}" class="d-block w-100">
      </div>
    </div>
    <div class="banr-btn popup-banjang" type="button" onclick="popUpBanjang()">
      Cek tarif ke Negara lainnya
    </div>
  </section>

  {{-- Dapur --}}
  <section class="tag-wrap mt-4">
    <div class="bg-cat">
      <p class="px-5 pt-3 fw-bold" style="letter-spacing: 3px; font-size: 50px;">Dapur</p>
    </div>
    <div style="margin-top: -80px; margin-left: 50px;" >
      <a href="{{url('hastag/'.$dapur->slug)}}" class="btn btn-outline-warning">Lihat selengkapnya</a>
    </div>
    <div class="container">
        <div class="d-flex" style="position:absolute; top: 20%; right:1%">
          <div class="mx-4">
            <div class="banr-dapur">
              <img src="{{asset('frontend/img/produk/dapur/bnr-dapur6.png')}}">
            </div>
          </div>
        </div>
      </div>
  </section>

  {{-- sajian --}}
  <section class="viral-wrap2 mt-4">
    <div class="bg-cat">
      <div class="row">
        <div class="col-8">
          <p class="px-4" style="font-family: Inter; font-size:25px; font-weight:100px; letter-spacing: -1px; position:relative;"><span style="font-family: Gantari; font-size: 36px; font-weight:500; letter-spacing: -1px">Sajian.</span>  Cemilan Rebahan</p>
        </div>
        <div class="col-4">
          <div style="position: relative;">
            <a href="{{url('brands/'.$brand->slug)}}" style="text-decoration: none; color: black; position: absolute; top: 10px; right: 25px;">
              <p class="m-0">Lihat semua</p>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="container mb-5">
      <div class="bks-cat">
        <div id="carou-cat4" class="hashtag owl-carousel owl-theme">
         @foreach ($viral as $product)
         <a href="{{url('category/'.$product->product->category->slug.'/'.$product->product->slug)}}" style="text-decoration: none; color:black;">

          <div class="ms-2 me-2">
            <div class="d-flex flex-wrap gap-4">
              <div class="card card-product">
                <img src="{{ asset('image/uploads/products/'.$product->product->_ProductImages->image) }}">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="">
                        <p class="card-title product-name">Gudeg Mercon Bu Narti Telor Ayam Suwir</p>
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
                        
                        </div>
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

  {{-- bundling --}}
  <div class="bundling mt-4">
    <div class="bundle">
      <div class="slider pt-3">
        <div class="bks-bundle">
          <div id="bundle-caption">
            <h2 style="font-size: 65px; font-weight: 600; color: #00428C; text-align: left;" class="animateanimated animatefadeInLeft "> <span id="bundle-event"></span><br>Bundling</h2>
            <h2 class="bundle-price" style="font-size: 65px; font-weight: 600; background-color: #00428C; color: white; text-align: left; padding: 10px;"><span class="h2">Rp</span> <span id="bundle-price"></span></h2>
          </div>
          <div id="bundle" class="owl-carousel owl-theme pt-5">
            <div class="bundle-img" data-id="1">
              <div class="okay">
                <img src="{{asset('frontend/img/bundling/fitri.png')}}"
                    alt="">
              </div>
            </div>
            <div class="bundle-img" data-id="2">
              <div class="okay">
                <img src="{{asset('frontend/img/bundling/summer.png')}}"
                    alt="">
              </div>
            </div>
            <div class="bundle-img" data-id="3">
              <div class="okay">
                <img src="{{asset('frontend/img/bundling/winter.png')}}"
                    alt="">
              </div>
            </div>
            <div class="bundle-img" data-id="4">
              <div class="okay">
                <img src="{{asset('frontend/img/bundling/autumn.png')}}"
                    alt="">
              </div>
            </div>
            <div class="bundle-img" data-id="5">
              <div class="okay">
                <img src="{{asset('frontend/img/bundling/spring.png')}}"
                    alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Video menarik --}}
  <section class="reels mt-4">
    <div class="section-title">
      <h2 style="font-family: Gantari; font-size: 40px; font-weight:500; letter-spacing: -1px">Video Menarik<br>Untuk Kamu</h2>
    </div>
    <div id="carocaro" class="owl-carousel owl-theme py-5" style="margin-left: 100px; width:923px">
      <div class="ms-2 me-2">
        <div class="video1" >
          <iframe width="270" height="481" style="border-radius: 5px;" src="https://www.youtube.com/embed/JpBvYhcHaK0" title="Tips menerima paket dari Indonesia yang dikirim oleh Master Bagasi✨🥰  #kirimpaketkeluarnegeri" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
      <div class="ms-2 me-2">
        <div class=" video1">
          <iframe width="270" height="481"  style="border-radius: 5px;" src="https://www.youtube.com/embed/dWKPPHZwdcY" title="KEBANJIRAN BASO ACI SAMI RAOS❤️‍🔥 #kirimpaketkeluarnegeri #jasatitipindonesia #umkm #jastipmurah" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
      <div class="ms-2 me-2">
        <div class=" video1">
          <iframe width="270" height="481" style="border-radius: 5px;" src="https://www.youtube.com/embed/mm8FQujQ1Ig" title="MAKAN 3 MIE SEDAP "TASTY" SEKALI MAKAN?!!!😱 PERUT SAMPE MAU MELEDAK!! #viralshorts #viral #shorts" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
      <div class="ms-2 me-2">
        <div class=" video1">
          <iframe width="270" height="481" style="border-radius: 5px;" src="https://www.youtube.com/embed/Z8KFHkuH0_I" title="The one and only "Master Bagasi"😎 #kirimpaketkeluar negeri #virashorts  #jasatitip #jastipmurah" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
      <div class="ms-2 me-2">
        <div class=" video1">
          <iframe width="270" height="481" style="border-radius: 5px;" src="https://www.youtube.com/embed/SIH2keG9Tn4" title="14 Juli 2022" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
  </section>

  {{-- Kerajinan --}}
  <section class="tag-wrap2 my-4">
    <div class="bg-cat">
      <p class="px-5 pt-3 fw-bold" style="letter-spacing: 3px; font-size: 50px;">Kerajinan</p>
    </div>
    <div style="margin-top: -80px; margin-left: 50px;" >
      <a href="{{url('hastag/'.$kerajinan->slug)}}" class="btn btn-outline-warning">Lihat selengkapnya</a>
    </div>
    <div class="container">
      <div class="d-flex" style="position:absolute; top: 0; right:1%">
        <div class="mx-4">
          <div class="bnr-dapur">
            <img src="{{asset('frontend/img/produk/dapur/bnr-kerajinan.png')}}">
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- kopi dan teh --}}
  <section class="viral-wrap3 mt-4">
    <div class="bg-cat">
      <div class="row">
        <div class="col-8">
          <p class="px-4" style="font-family: Inter; font-size:25px; font-weight:100px; letter-spacing: -1px; position:relative;"><span style="font-family: Gantari; font-size: 36px; font-weight:500; letter-spacing: -1px">Kopi & Teh.</span>  Seduhan Kehangatan</p>
        </div>
        <div class="col-4">
          <div style="position: relative;">
            <a href="{{url('brands/'.$brand->slug)}}" style="text-decoration: none; color: black; position: absolute; top: 10px; right: 25px;">
              <p class="m-0">Lihat semua</p>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="container mb-5">
      <div class="bks-cat">
        <div id="carou-cat5" class="hashtag owl-carousel owl-theme">
            @foreach ($kehangatan as $product)
         <a href="{{url('category/'.$product->product->category->slug.'/'.$product->product->slug)}}" style="text-decoration: none; color:black;">
            <div class="ms-2 me-2">
              <div class="d-flex flex-wrap gap-4">
                <div class="card card-product">
                  <img src="{{ asset('image/uploads/products/'.$product->product->_ProductImages->image) }}">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div class="">
                          <p class="card-title product-name">Gudeg Mercon Bu Narti Telor Ayam Suwir</p>
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
                           
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
            @endforeach
         </a>
        </div>
      </div>
    </div>
  </section>
  
  {{-- peta --}}
<section class="categories my-5 p-3">
	<div class="row">
		<div class="col-lg-12">
		  <div class="section-title">
			<h4>Khas Nusantara</h4>
		  </div>
		</div>
	</div>

	<form action="" method="get">
	<div class="mapnih mb-5">
		<svg viewBox="0 0 1376 494" fill="none" xmlns="http://www.w3.org/2000/svg">
		<g id="Group 1" filter="url(#filter0_d_840_372)">
		@foreach ($maps as $item)
		<a xlink:title="{{$item->title}}" xlink:href="{{url('daerah/'.$item->slug)}}" >
			<path id="Vector{{$item->id}}" d="{{$item->vector}}" fill="#F4F4F4"/>
		</a>
		@endforeach
	
		</g>
		<defs>
		<filter id="filter0_d_840_372" x="0" y="0" width="1376" height="494" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
		<feFlood flood-opacity="0" result="BackgroundImageFix"/>
		<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
		<feOffset dy="4"/>
		<feGaussianBlur stdDeviation="2"/>
		<feComposite in2="hardAlpha" operator="out"/>
		<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
		<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_840_372"/>
		<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_840_372" result="shape"/>
		</filter>
		</defs>
		</svg>
	</div>

	</form>
</section>
  
  {{-- berita --}}
  <section class="categories mt-4">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
          <h4>Berita & Youtube</h4>
        </div>
      </div>
    </div>
    @include('home.news')
  </section>

  {{-- rekomendasi --}}
  <section class="viral-wrap2 mt-4">
    <div class="bg-cat">
      <div class="row">
        <div class="col-8">
          <p class="px-4" style="font-family: Inter; font-size:25px; font-weight:100px; letter-spacing: -1px; position:relative;"><span style="font-family: Gantari; font-size: 36px; font-weight:500; letter-spacing: -1px">Untuk kamu.</span>  Rekomendasi produk pilihan master bagasi</p>
        </div>
        <div class="col-4">
          <div style="position: relative;">
            <a href="{{url('brands/'.$brand->slug)}}" style="text-decoration: none; color: black; position: absolute; top: 10px; right: 25px;">
              <p class="m-0">Lihat semua</p>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="container mb-5">
      <div class="bks-cat">
        <div id="carou-cat4" class="hashtag owl-carousel owl-theme">
            @foreach ($rekomendasi as $product)
         <a href="{{url('category/'.$product->product->category->slug.'/'.$product->product->slug)}}" style="text-decoration: none; color:black;">
            <div class="ms-2 me-2">
              <div class="d-flex flex-wrap gap-4">
                <div class="card card-product">
                  <img src="{{ asset('image/uploads/products/'.$product->product->_ProductImages->image) }}">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div class="">
                          <p class="card-title product-name">Gudeg Mercon Bu Narti Telor Ayam Suwir</p>
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
                            
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
            @endforeach
         </a>
        </div>
      </div>
    </div>
  </section>

  {{-- testimoni --}}
  <section id="slider" class="my-4">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
          <h4>Testimoni</h4>
        </div>
      </div>
    </div>
    <div class="testi">
      <div class="slider">
        <div id="testi" class="owl-carousel owl-theme mt-3">
          <div class="item">
            <div class="card mb-3 mx-auto" style="width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <div class="img-card">
                    <img src="{{asset('frontend/img/testi/suban.jpg')}}" alt="">
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h4 style="color: #FF4200; font-family: gantari; font-weight: 400">Cepat banget sampainya!!</h4>
                    <div class="testimonial mt-2 mb-2" style="font-size: 13px; text-align: justify">
                      "Jakarta Korea Selatan, awalnya luamayan deg degan, karna this is my first time experience sama Master Bagasi. Tapi ternyata cepat banget sampainyaa hihi"
                    </div>
                    <div class="name">
                      Muqodaz
                    </div>
                    <div class="name2 align-middle">
                      Korea Selatan
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="card mb-3 mx-auto" style="width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <div class="img-card">
                    <img src="{{asset('frontend/img/testi/suban.jpg')}}" alt="">
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h4 style="color: #FF4200; font-family: gantari; font-weight: 400">Wew!!</h4>
                    <div class="testimonial mt-2 mb-2" style="font-size: 13px; text-align: justify">
                      "Thankyou banget buat masterbagasi barangnya sudah sampai semuanya utuh & lengkap yah guys, semuanya dikirim sesuai banget sama permintaan & waktunya on time bingitssssssss. pokoknya the bestlah untuk jastip yang satu ini.  Goodluck yah untuk kedepannya"
                    </div>
                    <div class="name">
                      Vira
                    </div>
                    <div class="name2 align-middle">
                      United Kingdom
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="card mb-3 mx-auto" style="width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <div class="img-card">
                    <img src="{{asset('frontend/img/testi/suban.jpg')}}" alt="">
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h4 style="color: #FF4200; font-family: gantari; font-weight: 400">Wew!!</h4>
                    <div class="testimonial mt-2 mb-2" style="font-size: 13px; text-align: justify">
                      "Thankyou banget buat masterbagasi barangnya sudah sampai semuanya utuh & lengkap yah guys, semuanya dikirim sesuai banget sama permintaan & waktunya on time bingitssssssss. pokoknya the bestlah untuk jastip yang satu ini.  Goodluck yah untuk kedepannya"
                    </div>
                    <div class="name">
                      Vira
                    </div>
                    <div class="name2 align-middle">
                      United Kingdom
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="card mb-3 mx-auto" style="width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <div class="img-card">
                    <img src="{{asset('frontend/img/testi/suban.jpg')}}" alt="">
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h4 style="color: #FF4200; font-family: gantari; font-weight: 400">Wew!!</h4>
                    <div class="testimonial mt-2 mb-2" style="font-size: 13px; text-align: justify">
                      "Thankyou banget buat masterbagasi barangnya sudah sampai semuanya utuh & lengkap yah guys, semuanya dikirim sesuai banget sama permintaan & waktunya on time bingitssssssss. pokoknya the bestlah untuk jastip yang satu ini.  Goodluck yah untuk kedepannya"
                    </div>
                    <div class="name">
                      Vira
                    </div>
                    <div class="name2 align-middle">
                      United Kingdom
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </section>
</div>
@endsection