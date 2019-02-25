@extends('posts')
@section('contenu')
<section class="content container-fluid">
  <form action="{{ route('posts.update', $postedit->id) }}" method="POST">
          {{ csrf_field() }}
          {{ method_field('PATCH') }}
  <div class="form-group">
    <label for="id">Title</label>
    <input type="text" class="form-control" id="id" value="{{ $postedit->title }}" name="title" placeholder="Enter ID">
  </div>
      <div class="form-group">
          <label for="id">Image</label>
          <input type="file" class="form-control" id="image" name="image" value="{{ $postedit->file }}" placeholder="Uppload image">
      </div>
  <div class="form-group">
    <label for="name">Description</label>
    <input type="textarea"  class="form-control" id="description" value="{{ $postedit->description }}" name="description" placeholder="Enter description">
  </div>
      <div class="form-group">
          <label for="name">Categorie</label>
          <select class="form-control" id="categorie" name="category" >
              @foreach($categories as $cat)
                  @if($cat->id == $postedit->category_id)
                  <option value="{{$cat->id}}" selected>{{$cat->name}}</option>
                  @else
                      <option value="{{$cat->id}}">{{$cat->name}}</option>
                      @endif
              @endforeach
          </select>
      </div>

      <div class="form-group">
          <label for="name">Tags</label>
          <select multiple="multiple" class="form-control" id="tags[]" name="tags[]" >
              @foreach($tags as $tag)
                      <option value="{{$tag->id}}" >{{$tag->name}}</option>

              @endforeach
          </select>
      </div>
  
  <button type="submit" class="btn btn-primary">EDIT</button>
</form>
</section>
@endsection










