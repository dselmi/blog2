@extends('posts')
@section('contenu')
    <section class="content container-fluid">
        <form action="{{ route('role.update', $roledit->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}

            <div class="form-group">
                <label for="id">Name</label>
                <input type="text" class="form-control" id="name" name="name"  value="{{ $roledit->name }}" placeholder="Enter title">
            </div>

            <div class="form-group">
                <label for="name">Permissions</label>
                <select multiple="multiple" class="form-control" id="perm[]" name="perm[]" >
                    @foreach($perm as $per)
                        <option value="{{$per->id}}" >{{$per->name}}</option>

                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </section>
@endsection