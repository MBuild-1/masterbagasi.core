<!-- Carousel -->
<div class="row pt-4" >
    <div class="col-sm-12 ">
        <div id="carouselBanner" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1000">
            <div class="carousel-inner">
                @foreach ($banners as $key => $item)
                <div class="carousel-item {{$key == '0' ? 'active':'' }}">
                    <a href="{{url('promo/'.$item->slug)}}">
                        <img src="{{asset('image/uploads/banner/'.$item->image)}}" class="img-edit" alt="...">
                    </a>
                </div>
                @endforeach
                <div id="controls">
                    <div id="startSlide" class="d-none">
                        <img src="{{asset('frontend/img/ico/videobtn/btn-play.svg')}}" alt="">
                    </div>
                    <div id="pauseSlide">
                        <img src="{{asset('frontend/img/ico/videobtn/btn-pause.svg')}}" alt="">
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselBanner" data-bs-slide="prev">
                <span class="carousel-control-prev-icon w-50 h-100" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselBanner" data-bs-slide="next">
                <span class="carousel-control-next-icon w-50 h-100" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
<!-- Carousel -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var startSlide = document.getElementById("startSlide");
        var pauseSlide = document.getElementById("pauseSlide");
        var element = document.getElementById("carouselBanner");

        var myCarousel = new bootstrap.Carousel(element);

        startSlide.addEventListener("click", function() {
            pauseSlide.classList.remove('d-none')
            startSlide.classList.add('d-none')
            myCarousel.cycle();
        });

        pauseSlide.addEventListener("click", function () {
            startSlide.classList.remove('d-none')
            pauseSlide.classList.add('d-none')
            myCarousel.pause();
        });
    });
</script>