@props(['products', 'showCategory'])

@unless (count($products) == 0)
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Code</th>
        <th scope="col">Description</th>
        @if ($showCategory)
          <th scope="col">Product category</th>
        @endif
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
          @if ($showCategory)
            <td>{{ $product->category->name }}</td>  
          @endif
          <td>{{ $product->price }} €</td>
          @auth
            <td><a class="btn btn-primary" href="{{ route('edit', $product->id) }}">Edit</a></td>
            <td>
              <form action="{{ route('delete', $product->id) }}" method="POST">
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