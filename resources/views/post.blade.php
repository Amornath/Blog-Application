@extends('layouts.blog-post')

@section('content')


            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                <!-- Blog Post -->

                <!-- Title -->
                <h1>{{ $post->title }}</h1>

                <!-- Author -->
                <p class="lead">
                    by <a href="#">{{ $post->user->name }}</a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> Posted on August 24, 2013 at 9:00 PM</p>

                <hr>

                <!-- Preview Image -->
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">

                <hr>

                <!-- Post Content -->
                <p class="lead">{!! $post->body !!}</p>

                <hr>

                <!-- Blog Comments -->
                @if(Session::has('comment_message'))
                 {{session('comment_message')}}


                @endif

                <!-- Comments Form -->
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form" action="{{url('/store-comment')}}" method="post">
                    	{{ csrf_field() }}
                        <div class="form-group">
                        	<input type="hidden" name="post_id" value="{{$post->id}}">
                            <textarea class="form-control" rows="3" name="body" id="body"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->
            @if($comments)
                <!-- Comment -->
                @foreach($comments as $comment)
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">{{$comment->author}}
                            <small>August 25, 2014 at 9:30 PM</small>
                        
                        </h4>
                        <p>{{ $comment->body }}</p>

                        <form action="{{url('/store-reply')}}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="comment_id" value="{{$comment->id}}">
                              <textarea class="form-control" rows="1" name="body" id="body"></textarea>
                              <input type="submit" name="" value="reply">  
                        </form>

                           @if(count($comment->replies) > 0)
                           @foreach($comment->replies as $reply)
                           <div class="media" style="padding-left: 30px;" >
                            <a class="pull-left" href="#">
                                <img class="media-object" src="http://placehold.it/64x64" alt="">
                            </a>
                           
                            <div class="media-body">
                                <h4 class="media-heading">{{ $reply->author }}
                                    <small>August 25, 2014 at 9:30 PM</small>
                                
                                </h4>
                                <p>{{$reply->body }}</p> <br>
                            </div>
                            

                             @if(Session::has('reply_message'))
                                {{session('reply_message')}}


                             @endif
                            <form action="{{url('/store-reply')}}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="comment_id" value="{{$comment->id}}">
                              <textarea class="form-control" rows="1" name="body" id="body"></textarea>
                              <input type="submit" name="" value="reply">  
                            </form>
                        </div>
                        <!-- End Nested Comment -->
                        @endforeach

                         @endif

                    </div>
                </div>
                @endforeach
            @endif

            

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>




@endsection