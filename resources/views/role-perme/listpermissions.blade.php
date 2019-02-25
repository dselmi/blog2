@extends('posts')
@section('contenu')
    <section>

        <div class="box">
            <br>
            <a type="submit" style="width:100px; text-align: center; margin-left: 400px;" class="btn btn-block btn-primary" name="ADD" href="{{route("permission.create")}}" >ADD</a>
            <div class="box-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                    @foreach($perm as $per)

                        <tr>
                            <td width="600px">
                                {{ $per->name }}
                            </td>
                            <td style="display: inline-flex;">
                                <a class="btn btn-block btn-info" style="width:150px" href="{{ route('permission.edit', $per->id)}}">edit</a>
                                <br>
                                <form method="POST" action="{{ route('permission.destroy', $per->id)}}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button type="submit" style="width:150px; padding: 10px;" class="btn btn-block btn-danger">Delete</button>
                                </form>
                                @endforeach
                            </td>
                        </tr>

                </table>

            </div>
        </div>
    </section>
@endsection