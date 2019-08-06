@extends('base.info')
@section('admin')
<div class="row">
    <div class="col titulo-prinicpal">
    <h2>TABLA DE LIBROS</h2>
    </div>
</div>
<div class="row ">
    <div class="col text-modi">
    <a class="btn btn-danger" href="/books/create"> <i class="fas fa-user-plus"></i> Create New Book</a>
    <br>
    </div>
</div>
<div class="row">
    <div class="col table-s">
    <table class="table table-size">
    <thead class="thead-dark">
        <tr>
        <th scope="col">Nro</th>
        <th scope="col">img</th>
        <th scope="col">Titulo</th>
        <th scope="col">Autor</th>
        <th scope="col">Año</th>
        <th scope="col">ISBN</th>
        <th scope="col">Disponibles</th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
    @foreach($books as $book)
       <tr>       
           <td>{{$book-> id}}</td>
           <td> <img src="img/{{ $book->img }}" width="70" height="70" alt="?"></td>
           
           <td>{{$book-> titulo}}</td>
           <td>{{$book-> autor}}</td>
           <td>{{$book-> agno}}</td>
           <td>{{$book-> isbn}}</td>
           <td>{{$book-> disponibles}}</td>
           <td class="btn-crud">            
            <a class='btn btn-info btn-xs'href="/books/{{$book->id}}/edit"><span  class="glyphicon glyphicon-edit"></span> Edit</a>
            <a class="btn btn-danger btn-xs" href="/books/{{$book->id}}/confirmDelete"><span class="glyphicon glyphicon-remove"></span>Supr</a>
           </td>
       </tr>
        @endforeach
    </tbody>       
    </table>
    </div>
</div>



@endsection
