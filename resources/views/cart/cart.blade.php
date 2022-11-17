@extends('layouts.app')
@include('home.navbar')
@section('content')
<div class="container min-height-510">
    <livewire:frontend.cart.view />
</div>
@endsection
