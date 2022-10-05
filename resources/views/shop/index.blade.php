@extends('layout')

@section('content')
 <div class="products-list mt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <x-products-table :products="$products" :showCategory="true" />
      </div>
    </div>
  </div>
 </div>
@endsection