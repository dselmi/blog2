@extends('posts')
@section('contenu')

    <section class="content container-fluid">
        <form action="{{ route('permission.store') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="id">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter title">
            </div>
            <div class="form-group">
                <label for="id">Guard_name</label>
                <input type="text" class="form-control" id="guard_name" name="guard_name" value ="web" placeholder="Enter title">
            </div>


            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </section>
@endsection