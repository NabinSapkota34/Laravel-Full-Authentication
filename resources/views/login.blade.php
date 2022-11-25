@extends('Layout.app')


@section('content')



<div class="card" style="width: 25rem; height:22rem; left: 30rem; background-color: grey;">
@if(Session::has('fail'))
<div class="alert alert-danger role="alert>
  {{Session::get('fail')}}
</div>

@endif
<h1>Login</h1>
<form method="post" action="{{route('login')}}">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection