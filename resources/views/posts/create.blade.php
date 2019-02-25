@extends('posts')
@section('contenu')
 <section class="content container-fluid">
  <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
  <div class="form-group">
    <label for="id">Title</label>
    <input type="text" class="form-control" id="id" name="title" placeholder="Enter title">
  </div>
      <div class="form-group">
          <label for="id">Image</label>
          <input type="file" class="form-control" id="image" name="image" placeholder="Uppload image">
      </div>
  <div class="form-group">
    <label for="name">Description</label>
    <textarea class="form-control" id="name" name="description" placeholder="Enter name"></textarea>
  </div>
      <div class="form-group">
          <label for="name">Categorie</label>
          <select class="form-control" id="categorie" name="category" >
              @foreach($categories as $cat)
              <option value="{{$cat->id}}">{{$cat->name}}</option>
           @endforeach
          </select>
      </div>
      <div class="form-group">
          <label for="name">Tags</label>
          <select multiple="multiple" class="form-control" id="tags[]" name="tags[]">
              @foreach($tags as $tag)
                  <option value="{{$tag->id}}">{{$tag->name}}</option>
              @endforeach
          </select>
      </div>
  <button type="submit" class="btn btn-primary">Add</button>
</form>
</section>
    @endsection