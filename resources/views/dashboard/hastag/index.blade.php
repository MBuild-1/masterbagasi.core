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


<a href="{{url('admin/hastags/add')}}" class="btn btn-primary mb-4">Add Hastag</a>

<form class="row g-3 my-4" method="get">
  <div class="col-auto">
    <input type="text" class="form-control py-4" id="search" autocomplete="off" name="search" placeholder="Search Hastags...">
  </div>
</form>

@if (count($count) == 0)
<div class="alert alert-warning" role="alert">
  Data Hastags belum tersedia
 </div>
 @else
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Name</th>
        <th scope="col">Hastag</th>
        <th scope="col">Status</th>
        <th scope="col" class="text-center">Action</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($hastags as $hastag)
        
      <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$hastag->name}}</td>
            <td>{{$hastag->hastag}}</td>
            <td>{{$hastag->status == '0' ? 'Hidden' : 'Visible' }}</td>
            <td class="d-flex flex-row justify-content-center">
                <a class="btn btn-primary" href="{{url("admin/hastags/".$hastag->id."/edit")}}">Update</a>
                <form method="POST" action="{{url("admin/hastags/".$hastag->id."/delete")}}" >
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

      {{$hastags->links()}}
    </div>
  </div>

@endsection