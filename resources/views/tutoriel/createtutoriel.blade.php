@extends('posts')
@section('contenu')
    <section class="content container-fluid">
        <form action="{{ route('tutoriel.store')}}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="id">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter title">
            </div>
            <div class="form-group">
                <label for="id">Image</label>
                <input type="file" class="form-control" id="file" name="file" placeholder="Uppload image">
            </div>
            <div class="form-group">
                <label for="id">Description</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Enter title">
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
