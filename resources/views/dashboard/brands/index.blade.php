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

<a href="{{url('admin/brands/add')}}" class="btn btn-primary mb-4">Add Brand</a>

<form class="row g-3 my-4" method="get">
  <div class="col-auto">
    <input type="text" class="form-control py-4" id="search" autocomplete="off" name="search" placeholder="Search Brands...">
  </div>
</form>

@if (count($brands) == 0)
<div class="alert alert-warning" role="alert">
  Data category belum tersedia
 </div>
 @else
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Category</th>
        <th scope="col">Name</th>
        <th scope="col">Slug</th>
        <th scope="col">Image</th>
        <th scope="col" class="text-center">Action</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($brands as $item)
        
      <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$item->category->name}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->slug}}</td>
            <td><img src="{{asset('image/uploads/brands/'.$item->image)}}" class="img-thumbnail" width="200px" alt=""> </td>
            <td class="d-flex flex-row justify-content-center">
                <a class="btn btn-primary" href="{{url("admin/brands/".$item->id."/edit")}}">Update</a>
                <form method="POST" action="{{url("admin/brands/brand/".$item->id."/delete")}}" >
                  @csrf
                  @method('delete')
                  <button class="btn btn-danger" type="submit">Delete</button>    
                 </form>    
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  @endif
  <div class="d-flex">
    <div class="mx-auto my-4">

      {{$brands->links()}}
    </div>
  </div>


@endsection