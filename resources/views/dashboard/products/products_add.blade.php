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
            <p>ADD Product</p>
            <a class="btn btn-primary" href="{{url('admin/products')}}">Back</a>
        </div>
    </div>
    <div class="card-body">
        <form class="row g-3" method="post" enctype="multipart/form-data">
            @csrf
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="seotag-tab" data-bs-toggle="pill" data-bs-target="#seotag" type="button" role="tab" aria-controls="seotag" aria-selected="false">Seo Tag</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="details-tab" data-bs-toggle="pill" data-bs-target="#details" type="button" role="tab" aria-controls="details" aria-selected="false">Details</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="images-tab" data-bs-toggle="pill" data-bs-target="#images" type="button" role="tab" aria-controls="images" aria-selected="false">Images</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="hastags-tab" data-bs-toggle="pill" data-bs-target="#hastags" type="button" role="tab" aria-controls="hastags" aria-selected="false">Hastag</button>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                <div class="mb-3">
                  <label for="">Select Category</label>
                  <select class="form-select " aria-label="Default select example" name="category_id" >
                    @foreach ($categories as $category)
                     <option class="scrollable-menu" value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="mb-3">
                  <label for="">Select Province</label>
                  <select class="form-select " aria-label="Default select example" name="province_id" >
                    <option class="scrollable-menu" value="{{null}}">Product No Province</option>
                    @foreach ($maps as $map)
                     <option class="scrollable-menu" value="{{$map->id}}">{{$map->title}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="mb-3">
                  <label for="name" class="form-label">Name Product</label>
                  <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                  <label for="">Select Brand</label>
                  <select class="form-select" aria-label="Default select example" name="brand" >
                    @foreach ($brands as $brand)
                     <option value="{{$brand->name}}">{{$brand->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="mb-3">
                  <label for="description">Description</label>
                  <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                </div>
              </div>
              <div class="tab-pane fade" id="seotag" role="tabpanel" aria-labelledby="seotag-tab" tabindex="0">
                <div class="mb-3">
                  <label for="meta_tittle" class="form-label">Meta Tittle</label>
                  <input type="text" class="form-control" id="meta_tittle" name="meta_tittle">
                </div>
                <div class="mb-3">
                  <label for="meta_keyword" class="form-label">Meta_keyword</label>
                  <input type="text" class="form-control" id="meta_keyword" name="meta_keyword">
                </div>
                <div class="mb-3">
                  <label for="meta_description" class="form-label">Meta_description</label>
                  <input type="text" class="form-control" id="meta_description" name="meta_description">
                </div>
              </div>
              <div class="tab-pane fade" id="details" role="tabpanel" aria-labelledby="details-tab" tabindex="0">
                <div class="mb-3">
                  <label for="original_price" class="form-label">Original Price</label>
                  <input type="text" class="form-control" id="original_price" name="original_price">
                </div>
                <div class="mb-3">
                  <label for="selling_price" class="form-label">Selling Price</label>
                  <input type="text" class="form-control" id="selling_price" name="selling_price">
                </div>
                <div class="mb-3">
                  <label for="quantity" class="form-label">Quantity</label>
                  <input type="text" class="form-control" id="quantity" name="quantity">
                </div>
                <div class="mb-3">
                  <label for="weight" class="form-label">Weight</label>
                  <input type="text" class="form-control" id="weight" name="weight">
                </div>
                <div class="mb-3">
                  <div class="form-check">
                    <label for="trending" class="form-label">Trending</label>
                    <input class="form-check-input position-static" type="checkbox" id="trending" name="trending" value="option1" aria-label="...">
                  </div>
                  <div class="form-check">
                    <label for="status" class="form-label">Status</label>
                    <input class="form-check-input position-static" type="checkbox" id="status" name="status" value="option1" aria-label="...">
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="images" role="tabpanel" aria-labelledby="images-tab" tabindex="0">
                <div class="col-md-6 input-group">
                  <input type="file" class="form-control" id="image" name="image[]" multiple>
                  <label class="input-group-text" for="image">Upload</label>
                </div>
                
              </div>
              <div class="tab-pane fade" id="hastags" role="tabpanel" aria-labelledby="hastags-tab" tabindex="0">
                @foreach ($hastags as $hastag)
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="hastags" name="hastags[{{$hastag->id}}]" value="{{$hastag->id}}">
                  <label class="form-check-label" for="hastags">
                    {{$hastag->hastag}}
                  </label>
                </div>
                @endforeach
              </div>
              <button class="btn btn-primary" type="submit">Submit</button>
            </div>
          </form>
    </div>
  </div>
@endsection