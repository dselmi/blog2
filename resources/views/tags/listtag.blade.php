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
                    @foreach ($tags as $tag)
                        <tr>
                            <td>{{ $tag->id }}</td>
                            <td>{{ $tag->name  }}</td>
                            <td width="" style="display: inline-flex;">
                                <a class="btn btn-block btn-info" style="width:150px" href="{{ route('tag.edit', $tag->id)}}">edit</a>


                                <form method="POST" action="{{ route('tag.destroy', $tag->id)}}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button type="submit" style="width:150px; padding: 10px;" class="btn btn-block btn-danger">Delete</button>
                                </form>

                                <a class="btn btn-block btn-info" style="width:150px" href="{{ route('tag.show', $tag->id)}}">show</a>
                            </td>
                        </tr>
                    @endforeach

                </table>

            </div>
        </div>
    </section>
@endsection