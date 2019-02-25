@extends('posts')
@section('contenu')
    <section>

        <div class="box">
            <div class="box-body">
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                    @foreach ($categories as $cat)
                        <tr>
                            <td>{{ $cat->id }}</td>
                            <td>{{ $cat->name  }}</td>
                            <td width="" style="display: inline-flex;">
                                <a class="btn btn-block btn-info" style="width:150px" href="{{ route('category.edit', $cat->id)}}">edit</a>


                                <form method="POST" action="{{ route('category.destroy', $cat->id)}}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button type="submit" style="width:150px; padding: 10px;" class="btn btn-block btn-danger">Delete</button>
                                </form>

                                <a class="btn btn-block btn-info" style="width:150px" href="{{ route('category.show', $cat->id)}}">show</a>
                            </td>
                        </tr>
                    @endforeach

                </table>

            </div>
        </div>
    </section>
@endsection