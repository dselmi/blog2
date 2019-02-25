@extends('layouts.template')
@section('contenu')
    <section class="site-section py-lg">
        <div class="container">

            <div class="row blog-entries">
                <div class="col-md-12 col-lg-8 main-content">
                    <h1 class="mb-4">{{$post->title}}</h1>

                    <div class="post-content-body">

<p>{{$post->description}}</p>

                                    <div class="image element-animate" data-animate-effect="fadeIn">
                                        <img src="{{ url('images/' .$post->file )}}" alt="">
                                    </div>








                </div>






            </div>

            <!-- END main-content -->



        </div>
        <!-- END sidebar -->



    </section>



@endsection