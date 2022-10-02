{{-- @if (session()->has('message')) --}}
  <div class="alert alert-dismissible alert-info text-center position-fixed bottom-0 m-0 w-100">
    {{ session('message') }}
    reg
  </div>
{{-- @endif --}}