@extends('layout')

@section('content')
 <div class="categories-list mt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        @unless (count($categories) == 0)
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th class="text-center" scope="col">Category name</th>
                @auth
                  <th class="text-center" scope="col" colspan="2">Actions</th>  
                @endauth
              </tr>
            </thead>
            <tbody>
              @foreach ($categories as $category)
                <tr>
                  <th scope="row">{{ $category->id }}</th>
                  <td class="text-center">{{ $category->name }}</td>
                  @auth
                    <td class="text-center"><a class="btn btn-primary" href="{{ route('showCategoryProducts', $category->id) }}">View products</a></td>
                    {{-- <td>
                      <form action="{{ route('delete', $product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                    </td> --}}
                  @endauth
                </tr>
                @endforeach
              </tbody>
            </table>
      @else
        <span>No products</span>
      @endunless
      </div>
    </div>
  </div>
@endsection