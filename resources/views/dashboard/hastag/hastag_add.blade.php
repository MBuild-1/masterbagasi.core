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

<div class="card">
    <div class="card-header">
        <div class="d-flex flex-row justify-content-between">
            <p>ADD Hastag</p>
            <a class="btn btn-primary" href="{{url('admin/hastags')}}">Back</a>
        </div>
    </div>
    <div class="card-body">
        <form class="row g-3" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-md-12">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="col-md-12">
              <label for="hastag" class="form-label">Hastag</label>
              <input type="text" class="form-control" id="hastag" name="hastag">
            </div>
            <div class="col-md-12">
              Status  :  <input class="form-check-input" type="checkbox" id="flexCheckDefault" name="status" style="width:30px; height: 30px">
            </div>
            <div class="col-12 d-flex justify-content-end">
              <button type="submit" class="btn btn-primary">Add</button>
            </div>
          </form>
    </div>
  </div>
@endsection