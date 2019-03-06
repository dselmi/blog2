@extends('layouts.template')
@section('contenu')
    <section class="site-section py-lg">
        <div class="container">

            <div class="row blog-entries">
                <div class="col-md-12 col-lg-8 main-content">
                    <section class="site-section py-lg">
                        <div class="container">

                            <div class="row blog-entries">
                                <div class="col-md-12 col-lg-8 main-content">

                                    <div class="row">
                                        @foreach ($tuto as $tutos)

                                            <div class="col-md-6">
                                                <a href="#" class="blog-entry element-animate" data-animate-effect="fadeIn">
                                                    <div class="mb-2">{{ $tutos->name }} </div>
                                                    <iframe src="https://www.youtube.com/watch?v=8FqZZrbnwkM" frameborder="0" allowfullscreen></iframe>
                                                    <div class="blog-content-body">
                                                        <div class="post-meta">

                                                            @foreach($tutos->tags()->get() as $tut)
                                                                <span class="category">        {{ $tut->name }}
                                                                                                                   </span>

                                                            @endforeach


                                                        </div>


                                                    </div>
                                                </a>
                                            </div>
                                        @endforeach


                                    </div>






                        <!-- END main-content -->

                                </div>

                        </div>
                        <!-- END sidebar -->


                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>


@endsection



