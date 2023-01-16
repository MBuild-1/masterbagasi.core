@extends('layouts.app')
@section('content')
@if (Session()->has('success'))
<div class="alert alert-success mt-4" role="alert">
    {{Session()->get('success')}}
</div>
@endif

@if (Session()->has('failed'))
<div class="alert alert-danger mt-4" role="alert">
    {{Session()->get('failed')}}
</div>

@endif
@if ($errors->any())
<div class="alert alert-danger">
    <div>
        <p>Something wrong...</p>
    </div>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="container profile-tab" style="margin-top: 100px">
    <div class="row d-flex">
        @include('home.sidebar_profile')
        <div class="col-9">
            <h2>Merek Favorit</h2>
            <div class="d-flex flex-column gap-2 px-0">
                <a href="">
                    <div class="jumbotron w-100" style="height: 200px; background-image: url({{ asset('frontend/img/brand.jpg') }}); background-size: cover">
                        <div class="d-flex justify-content-start align-items-center gap-3 h-100 px-5">
                            <div style="width: 150px; height: 150px; background-color: #ff4200; border-radius: 50%"></div>
                            <div class="d-flex flex-column">
                                <div class="d-flex gap-1">
                                    <div style="width: 30px; height: 30px; border-radius: 50%; background-color: #ff4200"></div>
                                    <h3 class="text-white fw-bold">Sampo Kucing</h3>
                                </div>
                                <div class="d-flex gap-2">
                                    <button class="btn btn-primary px-5 py-0 fw-bold">Favorit</button>
                                    <button class="btn btn-primary"><i class="fa-solid fa-store fa-sm"></i></button>
                                    <button class="btn btn-primary"><i class="fa-solid fa-share-nodes fa-sm"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="jumbotron w-100" style="height: 200px; background-image: url({{ asset('frontend/img/brand.jpg') }}); background-size: cover">
                        <div class="d-flex justify-content-start align-items-center gap-3 h-100 px-5">
                            <div style="width: 150px; height: 150px; background-color: #ff4200; border-radius: 50%"></div>
                            <div class="d-flex flex-column">
                                <div class="d-flex gap-1">
                                    <div style="width: 30px; height: 30px; border-radius: 50%; background-color: #ff4200"></div>
                                    <h3 class="text-white fw-bold">Sampo Kuning</h3>
                                </div>
                                <div class="d-flex gap-2">
                                    <button class="btn btn-primary px-5 py-0 fw-bold">Favorit</button>
                                    <button class="btn btn-primary"><i class="fa-solid fa-store fa-sm"></i></button>
                                    <button class="btn btn-primary"><i class="fa-solid fa-share-nodes fa-sm"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="jumbotron w-100" style="height: 200px; background-image: url({{ asset('frontend/img/brand.jpg') }}); background-size: cover">
                        <div class="d-flex justify-content-start align-items-center gap-3 h-100 px-5">
                            <div style="width: 150px; height: 150px; background-color: #ff4200; border-radius: 50%"></div>
                            <div class="d-flex flex-column">
                                <div class="d-flex gap-1">
                                    <div style="width: 30px; height: 30px; border-radius: 50%; background-color: #ff4200"></div>
                                    <h3 class="text-white fw-bold">Sampo Kuping</h3>
                                </div>
                                <div class="d-flex gap-2">
                                    <button class="btn btn-primary px-5 py-0 fw-bold">Favorit</button>
                                    <button class="btn btn-primary"><i class="fa-solid fa-store fa-sm"></i></button>
                                    <button class="btn btn-primary"><i class="fa-solid fa-share-nodes fa-sm"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="jumbotron w-100" style="height: 200px; background-image: url({{ asset('frontend/img/brand.jpg') }}); background-size: cover">
                        <div class="d-flex justify-content-start align-items-center gap-3 h-100 px-5">
                            <div style="width: 150px; height: 150px; background-color: #ff4200; border-radius: 50%"></div>
                            <div class="d-flex flex-column">
                                <div class="d-flex gap-1">
                                    <div style="width: 30px; height: 30px; border-radius: 50%; background-color: #ff4200"></div>
                                    <h3 class="text-white fw-bold">Sampo Kuking</h3>
                                </div>
                                <div class="d-flex gap-2">
                                    <button class="btn btn-primary px-5 py-0 fw-bold">Favorit</button>
                                    <button class="btn btn-primary"><i class="fa-solid fa-store fa-sm"></i></button>
                                    <button class="btn btn-primary"><i class="fa-solid fa-share-nodes fa-sm"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="jumbotron w-100" style="height: 200px; background-image: url({{ asset('frontend/img/brand.jpg') }}); background-size: cover">
                        <div class="d-flex justify-content-start align-items-center gap-3 h-100 px-5">
                            <div style="width: 150px; height: 150px; background-color: #ff4200; border-radius: 50%"></div>
                            <div class="d-flex flex-column">
                                <div class="d-flex gap-1">
                                    <div style="width: 30px; height: 30px; border-radius: 50%; background-color: #ff4200"></div>
                                    <h3 class="text-white fw-bold">Sampo Kuwing</h3>
                                </div>
                                <div class="d-flex gap-2">
                                    <button class="btn btn-primary px-5 py-0 fw-bold">Favorit</button>
                                    <button class="btn btn-primary"><i class="fa-solid fa-store fa-sm"></i></button>
                                    <button class="btn btn-primary"><i class="fa-solid fa-share-nodes fa-sm"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="jumbotron w-100" style="height: 200px; background-image: url({{ asset('frontend/img/brand.jpg') }}); background-size: cover">
                        <div class="d-flex justify-content-start align-items-center gap-3 h-100 px-5">
                            <div style="width: 150px; height: 150px; background-color: #ff4200; border-radius: 50%"></div>
                            <div class="d-flex flex-column">
                                <div class="d-flex gap-1">
                                    <div style="width: 30px; height: 30px; border-radius: 50%; background-color: #ff4200"></div>
                                    <h3 class="text-white fw-bold">Sampo Kuling</h3>
                                </div>
                                <div class="d-flex gap-2">
                                    <button class="btn btn-primary px-5 py-0 fw-bold">Favorit</button>
                                    <button class="btn btn-primary"><i class="fa-solid fa-store fa-sm"></i></button>
                                    <button class="btn btn-primary"><i class="fa-solid fa-share-nodes fa-sm"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection