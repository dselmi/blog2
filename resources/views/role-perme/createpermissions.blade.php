@extends('posts')
@section('contenu')

    <section class="content container-fluid">
        <form action="{{ route('permission.store') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="id">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter title">
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </section>
@endsection
