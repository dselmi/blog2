@extends('posts');
@section('contenu')
    <section class="content container-fluid">
        <form action="{{  route('commenttuto', $tut->id) }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="id">Description</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Enter title">
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </section>
@endsection
