@extends('base.index')

@section('content')
<div class="container">

<div class="container-fluid m-0">
  <form autocomplete="on">
    <div class="form-row align-items-center ">
      <div class="col-sm-6 my-1">
        <label class="mr-sm-2 sr-only" for="categoria">Categoria</label>
        <select class="custom-select mr-sm-2" id="categoria" placeholder="Categoria">
          <option selected value="todos">Todos</option>
          <option value="ingeniería">Ingeniería</option>
          <option value="química">Química</option>
          <option value="física">Física</option>
          <option value="matemática">Matemática</option>
        </select>
      </div>
      <div class="col-sm-6 my-1">
        <div class="input-group">
          <label class="sr-only" for="search-book" required>Buscar...</label>
          <input type="text" class="form-control" id="search-book" placeholder="Buscar...">
          <div class="input-group-prepend">
            <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
          </div>
        </div>
      </div>

    </div>
  </form>
  <hr>
  <div class="row">
    <div class="col-12 justify-content-center d-flex">
      <nav aria-label="page-nav">
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="#" id="searchTitle">Titulo</a></li>
          <li class="page-item"><a class="page-link" href="#">Autor</a></li>
          <li class="page-item"><a class="page-link" href="#">ISBN</a></li>

        </ul>
      </nav>
    </div>
  </div>

  <main class="books-container container ">
    <div class="row">
      <div class="col-12">
        <!-- <div *ngFor="let book of books"> -->
          <div class="card">
            
       

          <!--  -->
          @foreach($books as $book)
          <div class="card mb-3 w-100">
                <div class="row no-gutters">
                    <div class="col-md-2 my-auto mx-auto">
                        <img src="img/{{ $book->img }}"  class="card-img cover" alt="">
                    </div>
                    <div class="col-md-7 my-auto">
                        <div class="card-body">
                            <h5 class="card-title">{{$book-> titulo}}</h5>
                            <p class="card-text">{{$book-> autor}}</p>
                            <p>Año: <span>{{$book-> agno}}</span></p>
                            <p>ISBN: <span>{{$book-> isbn}}</span></p>
                        </div>
                    </div>
                    <div class="col-2 my-auto mx-auto w-100 text-center">
                        <button type="button" class="btn btn-warning">
                            Disponibles <span class="badge badge-light">{{$book-> disponibles}}</span>
                        </button>
                        <a class="btn btn-primary my-4" href="/reserves/create/{{$book->id}}" >Reservar</a>
                    </div>
                </div>
            </div> 
                       

            @endforeach  

        </div>

      </div>
    </div>
  </main>



</div>
    
</div>
@endsection