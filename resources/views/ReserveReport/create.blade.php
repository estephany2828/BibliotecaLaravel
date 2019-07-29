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
  <form action="/users" method="POST">
    @csrf
        <div class="form-group example-container">
        <label for="title">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
        <label for="title">Email</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Name">
        <label for="title">Password</label>
        <input type="text" class="form-control" id="pass" name="pass" placeholder="Name">
        </div>
        <div class="row ">
        <div class="col btn-aling">          
            <button class="btn btn-danger" type="submit"> <i class="fas fa-user-plus"></i> Submit</button>
            <button type="button" class="btn btn-primary">Delete</button>            
            <a class="btn btn-dark" href="/users">Back</a>
        </div>
        <!-- <div class="col-1"><button class="btn btn-danger" type="submit">Submit</button></div>            -->
        </div>
    </form>
  </div>
</div>
    
    
    </div>
</div>
@endsection()