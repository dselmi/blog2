@extends('layouts.template')
@section('contenu')
    <section class="site-section py-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="mb-4">Category: {{ $catt->name }}</h2>
                </div>
            </div>

            <div class="row blog-entries">
                <div class="col-md-12 col-lg-8 main-content">
                        @foreach ($catt->posts()->get() as $cats)


                                <a href="" class="blog-entry element-animate" data-animate-effect="fadeIn">
                                    <div class="post-entry-horzontal">
                                        <a href="#">
                                            <div class="image element-animate" data-animate-effect="fadeIn">
                                                <img src="{{ url('thumbs/' .$cats->file )}}" alt="">
                                            </div>
                                            <span class="text">
                                <div class="post-meta">
                                    <span class="category">{{$cats->title}}</span>
                                    <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                </div>
                                    <h2>{{$cats->description}}</h2>
                                    @endforeach
                                </span>
                                        </a>
                                    </div>
                                </a>




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



                </div>
                <!-- END sidebar -->



    </section>



@endsection