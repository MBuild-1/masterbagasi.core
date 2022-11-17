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

<a href="{{url('admin/banner/add')}}" class="btn btn-primary mb-4">Add Banner</a>

@if (count($banner) == 0)
<div class="alert alert-warning" role="alert">
  Data Banner belum tersedia
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

        @foreach ($banner as $item)

      <tr>
            <td>{{$loop->index+1}}</td>
            <td><img src="{{asset('image/uploads/banner/'.$item->image)}}" class="img-thumbnail" width="200px" alt=""> </td>
            <td class="d-flex flex-row justify-content-around">
                <a class="btn btn-primary" href="{{url("admin/banner/".$item->id."/edit")}}">Update</a>
                <form method="POST" action="{{url("admin/banner/".$item->id."/delete")}}" >
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
