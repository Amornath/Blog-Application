@extends('layouts.admin')
@section('content')


<h1>All Media</h1>

 <table class="table">
    <thead>
      <tr>
        <th>ID</th>
         
        <th>Image</th>
        
      </tr>
    </thead>
    <tbody>
     	@if($photo)
    	@foreach($photo as $v_photo)
      <tr>
        <td>{{$v_photo->id}}</td>
      
        <td>
        <a href="{{URL::to('/edit/'.$v_photo->id)}}">
        	<img src="{{URL::to ($v_photo->pic ? $v_photo->pic: 'No Image')}}" style="height: 80px; width:80px">
        	
        </a>
        </td>
        
      </tr>
        @endforeach
        @endif 
 
    </tbody>
  </table>


@endsection

