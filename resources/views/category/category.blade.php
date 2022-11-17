@extends('layouts.app')
@section('content')
<div class="jumbotron" style="background-color: #FF4200; height: 400px;"></div>
<div class="container" style="margin-top: -80px">
    <div class="row">
        <div class="col">
            <h1 class="text-white">{{ $categories->name }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md d-flex justify-content-center">
            <div class="card w-100">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="wrap-breadcrumb pb-2">
                            <ul>
                                <li class="item-link"><a href="{{ url('/') }}" class="link">Home</a>
                                </li>
                                <li class="item-link"><span>{{ $categories->name }}</span></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<livewire:frontend.category.view :products="$products" :categories="$categories"/>
@endsection