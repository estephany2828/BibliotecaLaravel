@extends('base.info')
@section('admin')
<div class="row">
    <div class="col titulo-prinicpal">
    <h2>NEW CATEGORY</h2>
    </div>
</div>

<div class="row">
    <div class="col">
    <div class="card">
  <div class="card-body">
  <form action="/categories" method="POST">
    @csrf
        <div class="form-group example-container">
        <label for="name">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="name" value="{{ old('name')}}" >
  
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
            <button type="button" class="btn btn-primary">Delete</button>            
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