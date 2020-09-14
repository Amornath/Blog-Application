@extends('layouts.admin')
@section('content')




<div class="col-sm-6">
  <h1>Edit Category</h1>

  <form method="post" action="{{url('/update-category/'.$category->id)}}">
    {{ csrf_field() }}
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name" size="50" value="{{ $category->name }}"><br>
  <input type="submit" value="Edit" size="50" class=""><br>
    
  </form>

  <form method="post" action="{{url('/delete-category/'.$category->id)}}">
    {{ csrf_field() }}
    <input type="submit" value="Delete" size="50" class=""><br>
  </form>
  
</div>








@endsection
