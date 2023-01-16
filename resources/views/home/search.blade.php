@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <livewire:frontend.search.collection :categories="$categories" :productsearch="$product_search" >
</div>
@endsection
