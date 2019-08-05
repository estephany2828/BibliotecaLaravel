@extends('base.info')
@section('admin')
<div class="row">
    <div class="col titulo-prinicpal">
    <h2>NEW USERS</h2>
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
        <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ old('name')}}" required>
        <label for="title">Email</label>
        <input type="text" class="form-control" id="email" name="email"  aria-describedby="emailHelp" placeholder="Email" value="{{ old('email')}}"  required>
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        <!-- <label for="title">Password</label>
        <input type="password" class="form-control" id="pass" name="pass" placeholder="Password" aria-describedby="passwordHelpInline" required>
        <small id="passwordHelpInline" class="text-muted">Must be 6-20 characters long.</small>
        <label for="title">Verify your password</label>
        <input type="password" class="form-control" id="pass" name="passv" placeholder="Password" aria-describedby="passwordHelpInline" required>  -->
        
        <div >
                            <label for="password" >{{ __('Password') }}</label>

                            <div class="">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="">
                            <label for="password-confirm" >{{ __('Confirm Password') }}</label>

                            <div class="">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
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
            <button type="button" class="btn btn-primary">Delete</button>   
            <a class="btn btn-dark" href="/users">Back</a>
            <button class="btn btn-danger" type="submit"> <i class="fas fa-user-plus"></i> Submit</button>        
           
        </div>
        <!-- <div class="col-1"><button class="btn btn-danger" type="submit">Submit</button></div>  -->
        </div>
    </form>
  </div>
</div>
    
    
    </div>
</div>
@endsection()