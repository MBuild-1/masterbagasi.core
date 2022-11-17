@extends('layouts.app')
@include('home.navbar')

@section('content')
<div class="container min-height-526">
    <livewire:frontend.wishlist.view>
</div>
@endsection