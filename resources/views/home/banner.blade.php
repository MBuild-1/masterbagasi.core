<!-- Carousel -->
<div class="row pt-4">
    <div class="col-sm-8" style="padding-right:0">
        <div id="carouselBanner" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner bnr-size">
                @foreach ($banners as $key => $banner)
                <div class="carousel-item {{$key == '0' ? 'active':'' }}">
                    <img src="{{asset('image/uploads/banner/'.$banner->image)}}" class="img-edit" alt="...">
                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselBanner" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselBanner" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="col-sm">
        <video id="my-video" class="video-js"  loop controls preload="auto" data-setup="{}"
            style="width:100%; height:100%;">
            <source src="{{asset('frontend/vid/web.mp4')}}" type="video/mp4" />
        </video>
    </div>
</div>
<!-- Carousel -->
