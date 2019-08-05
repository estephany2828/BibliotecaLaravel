@extends('base.index')
@section('content')
<!-- <div class="row">
    <div class="col titulo-prinicpal">
    <h2>TABLA DE USUARIOS</h2>
    </div>
</div> -->

<div>
  <div class="card text-center">
        <div class="card-header">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
  <a class="mdl-navigation__link" href="{{ url('/users') }}" >USER</a>
  </li>
  <li class="nav-item">
  <a class="mdl-navigation__link" href="{{ url('/books') }}" >BOOK</a>
  </li>

</ul>       
       
        </div>

      <div class="">
          <div class="container">
          <div class="conte-crud"> @yield('admin')</div>
                  
          </div>      
      </div>
      
  </div>
</div>

<!-- <script>
  $(function () {
    $('#myTab li:last-child a').tab('show')
  })
</script> -->
@endsection()
