@extends('layout')

@section('content')
  <div class="position-absolute top-50 start-50 translate-middle bg-primary p-3" style="width: 550px">
    <form action="{{ route('update', $product) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="name" class="form-label mt-4">Product name</label>
              <input type="text" class="form-control" value="{{ $product->name }}" name="name" id="name" placeholder="Enter product name">

              @error('name')
                <p class="text-danger m-0">{{ $message }}</p>
              @enderror
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="category_id" class="form-label mt-4">Product category</label>
              <select name="category_id" id="category_id" class="form-select">
                @foreach ($categories as $category)
                  <option value="{{ $category->id }}" {{ $product->category->id === $category->id ? 'selected' : ''}}>{{ $category->name }}</option>
                @endforeach
              </select>

              @error('name')
                <p class="text-danger m-0">{{ $message }}</p>
              @enderror
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="description" class="form-label mt-4">Product description</label>
              <textarea class="form-control" name="description" id="description" placeholder="Enter description">{{ $product->description }}</textarea>
              
              @error('description')
                <p class="text-danger m-0">{{ $message }}</p>
              @enderror
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="price" class="form-label mt-4">Price</label>
              <input type="number" step="0.01" value="{{ $product->price }}" class="form-control" name="price" id="price" placeholder="Enter price">

              @error('price')
                <p class="text-danger m-0">{{ $message }}</p>
              @enderror
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-secondary mt-4">Update product</button>
          </div>
        </div>
      </div>
    </form>
  </div>
@endsection