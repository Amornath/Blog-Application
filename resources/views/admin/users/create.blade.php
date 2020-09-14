@extends('layouts.admin')
@section('content')


<h1>Create User</h1>

{!! Form::open(['url' => '/store','files' => true]) !!}
 	{{ csrf_field() }}
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name" size="50"><br>

  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email" size="50"><br>

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

   <input type="submit" value="Submit" size="50"><br>
<!-- </form>  -->
{!! Form::close() !!}


@include('includes.form-errors')


@endsection





 