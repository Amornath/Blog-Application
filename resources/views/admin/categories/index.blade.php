@extends('layouts.admin')
@section('content')




<div class="col-sm-6">
  <h1>Create Category</h1>

  <form method="post" action="{{url('/store-category')}}">
    {{ csrf_field() }}
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name" size="50" value=""><br>
  <input type="submit" value="Submit" size="50" class=""><br>
    
  </form>
  
</div>


<div class="col-sm-6">
<h2>All Category</h2>

              
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
         
        <th>Name</th>
         
      </tr>
    </thead>
    <tbody>
      
    	@if($categories)
    	@foreach($categories as $category)
      <tr>
        <td>{{$category->id}}</td>
      
        <td>
          <a href="{{URL::to('/edit-category/'.$category->id)}}">{{$category->name}}
          </a>
        </td>
      
      </tr>
        @endforeach
        @endif
    </tbody>
  </table>
</div>





@endsection
