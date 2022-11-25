@extends('Layout.app')


@section('content')
<div class="card" style="width: 25rem; height:25rem; left: 30rem; background-color: grey; ">
<form method="post" action="{{route('registerUser')}}">
    @csrf
  <div class="mb-3">
    <h1>Registration</h1><br>
    <label  for="" class="form-label"><b>Name</b></label>
    <input type="name" name="name"  class="form-control @error('name') is-invalid @enderror"  aria-describedby="emailHelp">
    <span style="color:red;">   @error('name')
    {{$message}}
    @enderror</span>
  </div>

    <label for="exampleInputEmail1" class="form-label"><b>Email address</b></label>
    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"  aria-describedby="emailHelp">
    <span style="color:red;">   @error('email')
    {{$message}}
    @enderror</span>
    <label for="exampleInputPassword1" class="form-label"><b>Password</b></label>
    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
    <span style="color:red;">   @error('password')
    {{$message}}
    @enderror</span><br>
   <button type="submit" class="btn btn-primary">Submit</button>
  </div>

  </form>
</div>

@endsection