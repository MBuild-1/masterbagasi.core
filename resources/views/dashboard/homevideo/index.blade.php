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

<a href="{{url('admin/videos/add')}}" class="btn btn-primary mb-4">Add Video</a>

@if (count($videos) == 0)
<div class="alert alert-warning" role="alert">
  Data Videos belum tersedia
 </div>
 @else
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Image</th>
        <th scope="col" class="text-center">Action</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($videos as $item)
        
      <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$item->video}}</td>
            <td class="d-flex flex-row justify-content-center">
                <a class="btn btn-primary" href="{{url("admin/videos/".$item->id."/edit")}}">Update</a>
                <form method="POST" action="{{url("admin/videos/video/".$item->id."/delete")}}" >
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


@endsection