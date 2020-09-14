@extends('layouts.admin')
@section('content')


<div class="container">
  <h2 align=""> User Table</h2>
  @if(Session::has('deleted_user'))

   <p>{{ session('deleted_user') }}</p>

  @endif

              
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
         
        <th>Name</th>
        <th>Role</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      
    	@if($users)
    	@foreach($users as $user)
      <tr>
        <td>{{$user->id}}</td>
      
        <td><a href="{{URL::to('/edit/'.$user->id)}}">{{$user->name}}</a></td>
        <td>{{$user->role->name}}</td>
        <td>{{$user->email}}</td>
      </tr>
        @endforeach
        @endif
    </tbody>
  </table>
</div>






@endsection