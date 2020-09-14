@extends('layouts.admin')

@section('content')

@if(count($comments)>0)
<h1>All Comments</h1>

   <table class="table">
    <thead>
      <tr>
        <th>ID</th>
         
        <th>Title</th>
         <th>Body</th>
        <th>Email</th>
        <th>Author</th>
        <th>Status</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      
    	
    	@foreach($comments as $comment)
      <tr>
        <td>{{$comment->id}}</td>
      
        <td><a href="{{URL::to('/post/'.$comment->id)}}">{{$comment->post->title}}</a></td>
        <td>{{$comment->body}}</td>
        <td>{{$comment->email}}</td>
        <td>{{$comment->author}}</td>
        <td>
          @if($comment->is_active == 0)

          <form method="post" action="{{url('/update-comment/'.$comment->id)}}">
            {{ csrf_field() }}
            <input type="hidden" name="is_active" value="1">
            <input type="submit" name="" value="Approve">
          </form>

          @else
          <form method="post" action="{{url('/update-comment/'.$comment->id)}}">
            {{ csrf_field() }}
            <input type="hidden" name="is_active" value="0">
            <input type="submit" name="" value="Unapprove">
          </form>

          @endif

        </td>
        <td>
          <form method="post" action="{{url('/delete-comment/'.$comment->id)}}">
            {{ csrf_field() }}
            
            <input type="submit" name="" value="Delete">
          </form>

        </td>
      </tr>
        @endforeach
       
    </tbody>
  </table>





@else
<h1>No Comments</h1>
@endif

@endsection