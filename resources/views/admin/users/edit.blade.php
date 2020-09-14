@extends('layouts.admin')
@section('content')





<h1>Create User</h1>

<!-- {!! Form::open(['url' => '/update/.$user->id','files' => true]) !!} -->
<form class="" action="{{url('/update/'.$user->id)}}" method="post">
  {{ csrf_field() }}
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name" size="50" value="{{ $user->name}}"><br>

  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email" size="50" value="{{ $user->email}}">
  <br>

  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password" size="50"><br>

  <label for="Role">Role:</label><br>
  <select id="role_id" name="role_id" >
    <option>Select Role</option>
    @foreach ($role as $v_role) { ?>
    <option value="{{$v_role->id}}">{{$v_role->name}}</option>
    @endforeach
  </select><br>

  <label for="status">Status:</label><br>
  <select style="width:auto;" name="is_active" id="is_active">
  <option value="1">Active</option>
  <option value="0">Unactive</option>
  </select><br>
   
   <label for="file">Select a Photo:</label>
   <input type="file" id="photo" name="photo"> 

   <input type="submit" value="Update" size="50"><br>
</form> 
<!-- {!! Form::close() !!}
 -->

<form class="" action="{{url('/delete/'.$user->id)}}" method="post">
  {{ csrf_field() }}

<input type="submit" value="Delete" size="50"><br>
</form>

@include('includes.form-errors')


@endsection





 







 