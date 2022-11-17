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


<a href="{{url('admin/cargo/add')}}" class="btn btn-primary mb-4">Add Cargo</a>

<form class="row g-3 my-4" method="get">
  <div class="col-auto">
    <input type="text" class="form-control py-4" id="search" autocomplete="off" name="search" placeholder="Search Cargo...">
  </div>
</form>

@if (count($count) == 0)
<div class="alert alert-warning" role="alert">
  Data Cargo belum tersedia
 </div>
 @else
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        {{-- <th scope="col">Country</th> --}}
        <th scope="col">Name</th>
        <th scope="col">Min Weight</th>
        <th scope="col">Max Weight</th>
        <th scope="col">Price</th>
        <th scope="col">Zona</th>
        <th scope="col" class="text-center">Action</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($cargos as $cargo)
        
      <tr>
            <td>{{$loop->index+1}}</td>
            {{-- <td>{{$cargo->country->name}}</td> --}}
            <td>{{$cargo->name}}</td>
            <td>{{$cargo->min_weight}}</td>
            <td>{{$cargo->max_weight}}</td>
            <td>{{$cargo->price}}</td>
            <td>{{$cargo->zona_id}}</td>
            <td class="d-flex flex-row justify-content-center">
                <a class="btn btn-primary btn-sm" href="{{url("admin/cargo/".$cargo->id."/edit")}}">Update</a>
                <form method="POST" action="{{url("admin/cargo/".$cargo->id."/delete")}}" >
                  @csrf
                  @method('delete')
                  <button class="btn btn-danger btn-sm" type="submit">Delete</button>    
                 </form>    
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  @endif
  <div class="d-flex">
    <div class="mx-auto my-4">

      {{$cargos->links()}}
    </div>
  </div>

@endsection