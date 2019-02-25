@extends('layouts.template')
@section('contenu')
    <section class="site-section py-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="mb-4">BLOGS</h2>
                </div>
            </div>

            <div class="row blog-entries">
                <div class="col-md-12 col-lg-8 main-content">
                    <div class="row">
                                @foreach ($post as $posts)

                                    <div class="col-md-6">
                            <a href="{{route('blog.show',$posts->id)}}" class="blog-entry element-animate" data-animate-effect="fadeIn">
                                <div class="mb-2">{{ $posts->title }} </div>
                                <img src="{{ url('images/' .$posts->file )}}" alt="">
                                <div class="blog-content-body">
                                    <div class="post-meta">

                                             @foreach($posts->tags()->get() as $tag)
                                                                <span class="category">        {{ $tag->name }}
                                                                                                                   </span>

                                                                       @endforeach


                                    </div>
                                </div>
                            </a>
                        </div>
                                                                             @endforeach


                    </div>



                    <div class="row mb-5 mt-5">

                        <div class="col-md-12">

                            <!-- END post -->


                            <!-- END post -->


                            <!-- END post -->

                        </div>
                    </div>



                </div>

                <!-- END main-content -->

                <div class="col-md-12 col-lg-4 sidebar">

                    <!-- END sidebar-box -->

                    <!-- END sidebar-box -->

                    <!-- END sidebar-box -->

                    <div class="sidebar-box">
                        <h3 class="heading">Categories</h3>
                        <ul class="categories">
                            @foreach($cat as $cats)
                            <li><a href="#">{{$cats->name}} </a></li>
                                @endforeach




                        </ul>
                    </div>
                    <!-- END sidebar-box -->

                    <div class="sidebar-box">
                        <h3 class="heading">Tags</h3>
                        <ul class="tags">
                            @foreach($post as $posts)
                             @foreach($posts->tags()->get() as $tag)
                                                       <li><a href="#">{{ $tag->name }}</a></li>

                                                       @endforeach

@endforeach








                        </ul>
                    </div>
                </div>
                <!-- END sidebar -->

            </div>
        </div>
    </section>






    @endsection