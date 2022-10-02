@extends('layout')

@section('content')
 <div class="products-list mt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        @unless (count($products) == 0)
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Code</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                @auth
                  <th class="text-center" scope="col" colspan="2">Actions</th>  
                @endauth
              </tr>
            </thead>
            <tbody>
              @foreach ($products as $product)
                <tr>
                  <th scope="row">{{ $product->name }}</th>
                  <td>{{ $product->code }}</td>
                  <td>{{ $product->description }}</td>
                  <td>{{ $product->price }} €</td>
                  @auth
                    <td><a class="btn btn-primary" href="">Edit</a></td>
                    <td>
                      <form action="/products/{{ $product->id }}/delete" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                    </td>
                  @endauth
                </tr>
                @endforeach
              </tbody>
            </table>
            
            {{ $products->links() }}

        @else
          <span>No products</span>
        @endunless
      </div>
    </div>
  </div>
 </div>
@endsection