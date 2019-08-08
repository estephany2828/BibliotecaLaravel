@extends('base.index')
@section('content')
<div class="row">
    <div class="col">
    <h2>TABLA DE CATEGORIAS</h2>
    </div>
</div>
<div class="row">
    <div class="col text-modi">
    <a class="btn btn-danger" href="/categories/create"> <i class="fas fa-user-plus"></i> Create New categories</a>
    <br>
    </div>
</div>
<div class="row">
    <div class="col table-s">
    <table class="table table-size">
    <thead class="thead-dark">
        <tr>
        <th scope="col">Nro</th>
        <th scope="col">Nombre</th>
  
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
    @foreach($categories as $category)
       <tr>       
           <td>{{$category-> id}}</td>
           <td>{{$category-> nombre}}</td>
        
           <td class="btn-crud">            
            <a class='btn btn-info btn-xs' href="/categories/{{$category->id}}/edit"><span  class="glyphicon glyphicon-edit"></span> Edit</a>
            <a class="btn btn-danger btn-xs" href="/categories/{{$category->id}}/confirmDelete"><span class="glyphicon glyphicon-remove"></span>Supr</a>
           </td>
       </tr>
        @endforeach
    </tbody>       
    </table>
    </div>
</div>
@endsection()
