@extends('base.info')
@section('admin')
<div class="row">
    <div class="col titulo-prinicpal">
    <h2>EDIT CATEGORIES {{$report->name}}</h2>
    </div>
</div>

<div class="row">
    <div class="col">
    <div class="card">
  <div class="card-body">
  <form action="/categories/{{$report->name}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group example-container">
     
        <label for="name">Nombre</label>
        <input type="text" value="{{$report->nombre}}"  class="form-control" id="name" name="name" placeholder="name" value="{{ old('titulo')}}"  >
        </div>
        @if($errors->any)
        <div class="alert alert-danger">
        <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
        </ul>
        </div>
        @endif

        <div class="row ">
        <div class="col btn-aling">          
            <button class="btn btn-danger" type="submit"> <i class="fas fa-user-plus"></i> Submit</button>
            <!-- <button type="button" href="/categories/{{$report->id}}/confirmDelete" class="btn btn-primary">Delete</button>             -->
            <a class="btn btn-dark" href="/categories">Back</a>
        </div>
        <!-- <div class="col-1"><button class="btn btn-danger" type="submit">Submit</button></div>            -->
        </div>
    </form>
  </div>
</div>
    
    
    </div>
</div>
@endsection()