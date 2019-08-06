@extends('base.index')
@section('content')
<div class="row">
    <div class="col titulo-prinicpal">
    <h2>NEW RESERVE</h2>
    </div>
</div>

<div class="row">
    <div class="col">
    <div class="card">
  <div class="card-body">
  <form action="/reserves" method="POST">
    @csrf
        <div class="form-group example-container">
        <label for="name">IdUser</label>
        <input type="text" class="form-control" id="iduser" name="iduser" placeholder="User" value=" {{ Auth::user()->name }} " >
        <label for="book">Book</label>
        <input type="text" class="form-control" id="book" name="book" placeholder="Book" value=" {{$report->id}} " required>
        
      <label for="inputState">reserved days</label>
      <select id="selectedReserva" name="selectedReserva"  class="form-control" required >
        <option selected>Choose...</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select> 
        <label for="dateReserva">reservation day</label>        
        <input type="date" class="form-control" id="dateReserva" name="dateReserva" placeholder="reservation day" >
        <label for="dateEntrega">deadline</label>        
        <input type="date" class="form-control" id="dateEntrega" name="dateEntrega" placeholder="deadline">
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
            <a class="btn btn-dark" href="/reserves">Back</a>
        </div>
        <!-- <div class="col-1"><button class="btn btn-danger" type="submit">Submit</button></div>            -->
        </div>
    </form>
  </div>
</div>
    
    
    </div>
</div>
@endsection()