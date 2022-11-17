@extends('layouts.app')
@include('home.navbar')
@section('content')

<div class="container" style="margin-top: 100px;">
    <div class="row mt-4">
        <div class="col">
            <div class="jumbotron" style="background-image:url('../image/uploads/provinces/{{ $province->image }}'); background-repeat: no-repeat;background-size: cover">
                <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="text-white">
                            <h1 class="mb-3">{{ $province->title }}</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Jumbotron -->
            <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                        type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Awal</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                        type="button" role="tab" aria-controls="profile-tab-pane"
                        aria-selected="false">Kebudayaan</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane"
                        type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Makanan</button>
                </li>
            </ul>
            <div class="tab-content p-4" id="myTabContent" style="min-height: 300px;">
                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                    tabindex="0">
                    <p style=" text-align: justify;">
                        {{ $province->description }}
                    </p>

                </div>
                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                    tabindex="0">
                    <p style=" text-align: justify;">{{ $province->kebudayaan }}</p>
                </div>
                <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab"
                    tabindex="0">
                    <p style=" text-align: justify;">
                        {{ $province->makanan }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row d-flex flex-row flex-wrap justify-content-center align-items-center" style="margin-top: 200px;">
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
                             
                          </div>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
        <div class="row mt-4">
          @foreach($products as $product)
              <div class="col mt-4">
                  <a
                      href="{{ url('daerah/'.$province->slug.'/'.$product->slug) }}" style="text-decoration: none; color: black;">
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
                                        
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </a>
              </div>
          @endforeach
        </div>
      </div>
    </div>
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
