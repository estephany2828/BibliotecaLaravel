@extends('base.index')
@section('content')
<div class="row">
    <div class="col">
    <h2>TABLA DE RESERVAS</h2>
    </div>
</div>
<div class="row">
    <div class="col text-modi">
    <a class="btn btn-danger" href="/reserves/create"> <i class="fas fa-user-plus"></i> Create New Reserves</a>
    <br>
    </div>
</div>
<div class="row">
    <div class="col table-s">
    <table class="table table-size">
    <thead class="thead-dark">
        <tr>
        <th scope="col">Nro</th>
        <th scope="col">Book</th>
        <th scope="col">Reserved days</th>
        <th scope="col">Reservation day</th>
        <th scope="col">Deadline</th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
    @foreach($reserves as $reserve)
       <tr>       
           <td>{{$reserve-> iduser}}</td>
           <td>{{$reserve-> book}}</td>
           <td>{{$reserve-> selectedReserva}}</td>
           <td>{{$reserve-> dateReserva}}</td>
           <td>{{$reserve-> dateEntrega}}</td>
           <td class="btn-crud">            
            <a class='btn btn-info btn-xs' href="/reserves/{{$reserve->id}}/edit"><span  class="glyphicon glyphicon-edit"></span> Edit</a>
            <a class="btn btn-danger btn-xs" href="/reserves/{{$reserve->id}}/confirmDelete"><span class="glyphicon glyphicon-remove"></span>Supr</a>
           </td>
       </tr>
        @endforeach
    </tbody>       
    </table>
    </div>
</div>
@endsection()
