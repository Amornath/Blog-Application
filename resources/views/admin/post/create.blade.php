@extends('layouts.admin')
@section('content')



@include('includes.tinymce')

<h1>Create Post</h1>
<div class="row">

<!-- {!! Form::open(['url' => '/update/.$user->id','files' => true]) !!} -->
<form class="" action="{{url('/store-post')}}" method="post">
  {{ csrf_field() }}
  <label for="name">Title:</label><br>
  <input type="text" id="title" name="title" size="50" value=""><br>

  <label for="body">Body:</label><br>
  <textarea id="body" name="body" rows="4" cols="50"></textarea><br>
 

  <label for="Category">Category:</label><br>
  <select id="category_id" name="category_id" >
    <option>Select Category</option>
    @foreach ($category as $v_category) { ?>
    <option value="{{$v_category->id}}">{{$v_category->name}}</option>
    @endforeach
  </select><br>
   
  

   <input type="submit" value="Create" size="50"><br>
</form> 
<!-- {!! Form::close() !!}
 -->
</div>
<div class="row">


@include('includes.form-errors')
</div>

@endsection





 







 