@extends('layout')

@section('content')
  <div class="position-absolute top-50 start-50 translate-middle bg-primary p-3" style="width: 550px">
    <form action="/auth/register" method="POST">
      @csrf
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="name" class="form-label mt-4">Name</label>
              <input type="text" class="form-control" value="{{ old('name') }}" name="name" id="name" placeholder="Enter name">

              @error('name')
                <p class="text-danger m-0">{{ $message }}</p>
              @enderror
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="email" class="form-label mt-4">Email address</label>
              <input type="email" class="form-control" value="{{ old('email') }}" name="email" id="email" placeholder="Enter email">
              
              @error('email')
                <p class="text-danger m-0">{{ $message }}</p>
              @enderror
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="password" class="form-label mt-4">Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Password">

              @error('password')
                <p class="text-danger m-0">{{ $message }}</p>
              @enderror
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="password_confirmation" class="form-label mt-4">Password</label>
              <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Confirm password">
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-secondary mt-4">Register</button>
          </div>
        </div>
      </div>
    </form>
  </div>
@endsection