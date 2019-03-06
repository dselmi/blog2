@extends('posts')
@section('contenu')
    <section>

        <div class="box">
            <div class="box-body">
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Tags</th>
                        <th>Actions</th>
                    </tr>
                    @foreach ($tuto as $tut)
                        <tr>
                            <td>{{ $tut->id }}</td>
                            <td>{{ $tut->Name  }}</td>
                            <td><img src="{{ url('thumbs/' .$tut->file )}}"></td>
                            <td>{{ $tut->description  }}</td>
                            <td>
                                @foreach($tut->tags()->get() as $tag)
                                    {{ $tag->name }}

                                @endforeach
                            </td>
                            <td width="" style="display: inline-flex;">
                                <a class="btn btn-block btn-info" style="width:150px" href="{{ route('tutoriel.edit', $tut->id)}}">edit</a>


                                <form method="POST" action="{{ route('tutoriel.destroy', $tut->id)}}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button type="submit" style="width:150px; padding: 10px;" class="btn btn-block btn-danger">Delete</button>
                                </form>

                                <a class="btn btn-block btn-info" style="width:150px" href="{{ route('tutoriel.show', $tut->id)}}">Add</a>
                            </td>
                        </tr>
                    @endforeach

                </table>

            </div>
        </div>
    </section>
@endsection
