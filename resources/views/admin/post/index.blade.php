@extends('layouts.admin')
@section('content')


<div class="container">
  <h2 align=""> Posts Table</h2>
<!--   @if(Session::has('deleted_user'))

   <p>{{ session('deleted_user') }}</p>

  @endif -->

              
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
         
        <th>Title</th>
         <th>Body</th>
         <th>View</th>
         <th>Comments</th>
        <th>User ID</th>
        <th>Category ID</th>
      </tr>
    </thead>
    <tbody>
      
    	@if($posts)
    	@foreach($posts as $post)
      <tr>
        <td>{{$post->id}}</td>
      
        <td><a href="{{URL::to('/edit-post/'.$post->id)}}">{{$post->title}}</a></td>
        <td>{{str_limit($post->body, 7)}}</td>
         <td><a href="{{URL::to('/post/'.$post->id)}}">View post</a></td>
         <td><a href="{{URL::to('/post-comment/'.$post->id)}}">View Comments</a></td>
        <td>{{$post->user->name}}</td>
        <td>{{$post->category->name}}</td>
      </tr>
        @endforeach
        @endif
    </tbody>
  </table>
</div>



@endsection
