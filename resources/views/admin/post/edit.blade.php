@extends('layouts.admin')
@section('content')





<h1>Edit Post</h1>
<div class="row">

<!-- {!! Form::open(['url' => '/update/.$user->id','files' => true]) !!} -->
<form class="" action="{{url('/update-post/'.$post->id)}}" method="post">
  {{ csrf_field() }}
  <label for="name">Title:</label><br>
  <input type="text" id="title" name="title" size="50" value="{{ $post->title }}"><br>

  <label for="body">Body:</label><br>
  <textarea id="body" name="body" rows="4" cols="50" value="">{{ $post->body }}</textarea><br>
 

  <label for="Category">Category:</label><br>
  <select id="category_id" name="category_id"  >
    <option>{{ $post->category->name }}</option>
    @foreach ($category as $v_category) { ?>
    <option value="{{$v_category->id}}">{{$v_category->name}}</option>
    @endforeach
  </select><br>
   
  

   <input type="submit" value="Edit" size="50"><br>
</form> 
<!-- {!! Form::close() !!}
 -->
</div>

<div class="">

<form class="" action="{{url('/delete-post/'.$post->id)}}" method="post">
	{{ csrf_field() }}
<input type="submit" value="Delete" size="50" class="btn-btn danger"><br>
</form>
</div>



<div class="row">


@include('includes.form-errors')
</div>

@endsection





 







 