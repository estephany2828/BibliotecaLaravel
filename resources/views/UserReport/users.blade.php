@extends('base.info')
@section('admin')
<div class="row">
    <div class="col titulo-prinicpal">
    <h2>TABLA DE USUARIOS</h2>
    </div>
</div>
<div class="row ">
    <div class="col text-modi">
    <a class="btn btn-danger" href="/users/create"> <i class="fas fa-user-plus"></i> Create New Users</a>
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
        <th scope="col">Correo</th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
       <tr>       
           <td>{{$user-> id}}</td>
           <td>{{$user-> name}}</td>
           <td>{{$user-> email}}</td>
           <td class="btn-crud">            
            <a class='btn btn-info btn-xs'href="/users/{{$user->id}}/edit"><span  class="glyphicon glyphicon-edit"></span> Edit</a>
            <a class="btn btn-danger btn-xs" href="/users/{{$user->id}}/confirmDelete"><span class="glyphicon glyphicon-remove"></span>Supr</a>
           </td>
       </tr>
        @endforeach
    </tbody>       
    </table>
    </div>
</div>
@endsection()
