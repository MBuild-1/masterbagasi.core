@extends('layouts.adminpanel.admin')
@section('content')


@if (Session()->has('success'))
<div class="alert alert-success" role="alert">
 {{Session()->get('success')}}
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


<a href="{{url('admin/products/add')}}" class="btn btn-primary mb-4">Add Product</a>
<form class="row g-3" method="get">
  <div class="col-auto">
    <input type="text" class="form-control my-4" id="search" autocomplete="off" name="search" placeholder="Search Products...">
  </div>
</form>

@if (count($count) == 0)
<div class="alert alert-warning" role="alert">
  Data product belum tersedia
 </div>
 @else
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Name</th>
        <th scope="col">Category</th>
        <th scope="col">Slug</th>
        <th scope="col">Brand</th>
        <th scope="col">Weight</th>
        <th scope="col">Selling Price</th>
        <th scope="col">Quantity</th>
        <th scope="col">Trending</th>
        <th scope="col">Status</th>
        <th scope="col" class="text-center">Action</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($product as $item)
        
      <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->category->name}}</td>
            <td>{{$item->slug}}</td>
            <td>{{$item->brand}}</td>
            <td>{{$item->weight}}</td>
            <td>{{$item->selling_price}}</td>
            <td>{{$item->quantity}}</td>
            <td>{{$item->trending == 1 ? 'Trending' : 'Not Tranding'}}</td>
            <td>{{$item->status == 1 ? 'Visible' :'Hidden'}}</td>
            <td class="d-flex flex-row justify-content-around">
                <a class="btn btn-primary" href="{{url("admin/products/".$item->id."/edit")}}">Edit</a>
                <a class="btn btn-danger" href="{{url("admin/products/product/".$item->id."/delete")}}">Delete</a>   
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  @endif
  <div class="d-flex">
    <div class="mx-auto my-4">

      {{$product->links()}}
    </div>
  </div>

@endsection