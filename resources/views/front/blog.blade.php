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
            </div>

                        <br>

            <p> {{ $post->comment()->count() }} Commentaires</p>

       @foreach($post->comment()->latest()->get() as $com)
         <div>  {{$com->description}}
         </div>
       @endforeach
       <form method="POST" action="{{ route('commentpost', $post->id)}}">
               {{ csrf_field() }}


           <textarea class="group-control" name="description" type="text" rows="3" cols="90">
           </textarea>
<br>
               <button type="submit" style="width:150px; padding: 10px;" class="btn btn-block btn-secondary">Commenter</button>
           </form>
   @endsection



   <!-- END main-content -->



</div>
<!-- END sidebar -->


</section>




