@extends('Layout.app')


@section('content')
<div class="container">
<h1>Welcome to dashboard</h1>
<form action="{{route('logout')}}" method="get">
    <button type="submit">LogOut</button>
</form>
<table class="table">
    <tr>
        <th>Article Title</th>
        <th>Created by</th>
    </tr>
    @foreach($posts as $value)
    <tr>
        <td>{{$value->title}}</td>
        <td>{{$value->user->name}}</td>
    </tr>
    @endforeach
</table>
</div>
@endsection