@extends('posts')
@section('contenu')
 <section>
        
        <div class="box">
                    <div class="box-body">
             <table class="table table-bordered">
               <tr>
                 <th style="width: 10px">ID</th>
                 <th>Title</th>
                   <th>Image</th>
                   <th>Description</th>
                   <th>Category</th>
                   <th>Tags</th>
                 <th>Actions</th>
               </tr>
                  @foreach ($posts as $post)
               <tr>
                 <td>{{ $post->id }}</td>
                 <td>{{ $post->title  }}</td>
                   <td><img src="{{ url('thumbs/' .$post->file )}}"></td>
                   <td>{{ $post->description }}</td>
                   <td>
                   @foreach($categories as $category)
                    @if($category->id == $post->category_id)
                   {{ $category->name }}
                       @endif
                   @endforeach
                   </td>
                   <td>
                    @foreach($post->tags()->get() as $tag)
                            {{ $tag->name }}

                           @endforeach
                   </td>
                           <td style="display: inline-flex;">
                     <a class="btn btn-block btn-info" style="width:150px" href="{{ route('posts.edit', $post->id)}}">edit</a>


                 	<form method="POST" action="{{ route('posts.destroy', $post->id)}}">
   					 {{ csrf_field() }}
   					 {{ method_field('DELETE') }}

                   <button type="submit" style="width:150px; padding: 10px;" class="btn btn-block btn-danger">Delete</button>
</form>

               </td>
               </tr>
               @endforeach

             </table>

           </div>
               </div>
    </section>
    @endsection