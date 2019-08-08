@extends('base.info')
@section('admin')
<div class="row">
    <div class="col titulo-prinicpal">
    <h2>DELETE CATEGORY {{$report->id}}</h2>
    </div>
</div>

<div class="row">
    <div class="col">
    <div class="card">
  <div class="card-body">
  <form action="/categories/{{$report->id}}" method="POST">

    @csrf
    @method('delete')
        <div class="form-group example-container">
       
        <div class="row ">
        <div class="col btn-aling">          
        <button class="btn btn-danger" type="submit"> <i class="fas fa-user-plus"></i>  Desea realmente eliminarlo</button>         
            <a class="btn btn-dark" href="/categories">Atras</a>
        </div>
        <!-- <div class="col-1"><button class="btn btn-danger" type="submit">Submit</button></div>            -->
        </div>
        <div>
    </form>
  </div>
</div>
    
    
    </div>
</div>
@endsection()