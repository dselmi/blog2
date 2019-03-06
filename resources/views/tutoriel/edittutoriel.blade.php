@extends('posts')
@section('contenu')
    <section class="content container-fluid">
        <form action="{{ route('tutoriel.update', $tutoedit->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}

            <div class="form-group">
                <label for="id">Name</label>
                <input type="text" class="form-control" id="name" name="name"  value="{{ $tutoedit->name }}" placeholder="Enter title">
            </div>
            <div class="form-group">
                <label for="id">Image</label>
                <input type="file" class="form-control" id="image" name="image" value="{{ $tutoedit->file }}" placeholder="Uppload image">
            </div>
            <div class="form-group">
                <label for="id">Description</label>
                <input type="text" class="form-control" id="description" name="description"  value="{{ $tutoedit->description }}" placeholder="Enter title">
            </div>
            <div class="form-group">
                <label for="name">Tags</label>
                <select multiple="multiple" class="form-control" id="tags[]" name="tags[]">
                    @foreach($tags as $tag)
                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </section>
@endsection
