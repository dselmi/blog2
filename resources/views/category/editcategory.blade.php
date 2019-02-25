@extends('posts')
@section('contenu')
    <section class="content container-fluid">
        <form action="{{ route('category.update', $catedit->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}

            <div class="form-group">
                <label for="id">Name</label>
                <input type="text" class="form-control" id="name" name="name"  value="{{ $catedit->name }}" placeholder="Enter title">
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </section>
@endsection