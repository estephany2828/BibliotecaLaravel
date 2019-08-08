@extends('base.info')
@section('admin')
<div class="row">
    <div class="col titulo-prinicpal">
    <h2>NEW BOOK</h2>
    </div>
</div>

<div class="row">
    <div class="col">
    <div class="card">
  <div class="card-body">
  <form action="/books" method="POST">
    @csrf
        <div class="form-group example-container">
        <label for="name">Titulo</label>
        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo" value="{{ old('titulo')}}"  >
        <label for="titulo">Autor</label>
        <input type="text" class="form-control" id="autor" name="autor" placeholder="Autor" value="{{ old('autor')}}" required>
        <label for="agno">Año</label>
        <input type="numer" class="form-control" id="agno" name="agno" placeholder="Año" value="{{ old('agno')}}" required>
        <label for="isbn">ISBN</label>
        <input type="text" class="form-control" id="isbn" name="isbn" placeholder="ISBN" value="{{ old('isbn')}}" required>
        <label for="disponibles">Disponibles</label>
        <input type="text" class="form-control" id="disponibles" name="disponibles" placeholder="Disponibles" value="{{ old('disponibles')}}" required>
        <label for="categorias">Categorias</label>
        <input type="number" class="form-control" id="category" name="category" placeholder="Categorias" value="{{ old('category')}}" required>
        {{ csrf_field() }}
        <label for="book">Img</label>
        <!-- <input type="text" class="form-control" id="img" name="img" placeholder="img" value="{{ old('img')}}" required>    -->
        <input type="file" class="form-control" id="img" name="img" placeholder="img" value="{{ old('img')}}" required>      
     
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
            <button type="button" href="/books/{{$report->id}}/confirmDelete" class="btn btn-primary">Delete</button>            
            <a class="btn btn-dark" href="/books">Back</a>
        </div>
        <!-- <div class="col-1"><button class="btn btn-danger" type="submit">Submit</button></div>            -->
        </div>
    </form>
  </div>
</div>
    
    
    </div>
</div>
@endsection()