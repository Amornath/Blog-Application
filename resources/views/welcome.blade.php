@extends('layouts.blog-home')
@section('content')

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                 
                </h1>
                @if($posts)
                @foreach($posts as $post)

                <!-- First Blog Post -->
                <h2>
                    <a href="#">{{ $post->title }}</a>
                </h2>
                <p class="">
                <a href="index.php">{{ $post->user->name }}</a>
                </p>
                
                <hr>
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                <hr>
                <p>
                {{ substr(strip_tags($post->body),0,30) }}
                {{ strlen(strip_tags($post->body)) > 30 ? "...":"" }}
                </p>
                <a class="btn btn-primary" href="{{URL::to('/blog-detail/'.$post->id)}}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>
                @endforeach
               @endif
                <!-- Second Blog Post -->
             

                <!-- Third Blog Post -->
              {{ $posts->links() }}

               
                

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
                @if($categories)
                
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            @foreach($categories as $category)
                            <ul class="list-unstyled">
                                <li><a href="#">{{ $category->name }}</a>
                                </li>
                                
                            </ul>
                             @endforeach
                        </div>
                        <!-- /.col-lg-6 -->
                        
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>
               
                @endif

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>




@endsection
