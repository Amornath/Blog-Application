@extends('layouts.admin')

@section('style')

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/basic.min.css">
@endsection

@section('content')


<h1>Upload Midea</h1>
<form class="dropzone" action="{{url('/store-midea')}}" method="post" 
enctype="multipart/form-data">
	{{ csrf_field() }}

</form>


@endsection

@section('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.js"></script>
@endsection
