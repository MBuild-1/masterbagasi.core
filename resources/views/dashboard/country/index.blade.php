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


{{-- <a href="{{url('admin/country/add')}}" class="btn btn-primary mb-4">Add Country</a> --}}

<form class="row g-3 my-4" method="get">
  <div class="col-auto">
    <input type="text" class="form-control py-4" id="search" autocomplete="off" name="search" placeholder="Search Country...">
  </div>
</form>

@if (count($count) == 0)
<div class="alert alert-warning" role="alert">
  Data Country belum tersedia
 </div>
 @else
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Country</th>
        <th scope="col">Code</th>
        <th scope="col">Zona</th>
        <th scope="col" class="text-center">Action</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($countries as $country)
        
      <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$country->name}}</td>
            <td>{{$country->code}}</td>
            <td>{{$country->zona_id }}</td>
            <td class="d-flex flex-row justify-content-center">
                <a class="btn btn-primary btn-sm" href="{{url("admin/country/".$country->id."/edit")}}">Update</a>
                <form method="POST" action="{{url("admin/country/".$country->id."/delete")}}" >
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

      {{$countries->links()}}
    </div>
  </div>

@endsection