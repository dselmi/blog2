@extends('posts')
@section('contenu')
    <section>

        <div class="box">
            <div class="box-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Title</th>
                        <th>description</th>
                    </tr>
                    @foreach ($cat as $cate)
                        <tr>
                            <td>{{ $cate->title }}</td>
                            <td>{{ $cate->description }}</td>

                        </tr>
                    @endforeach

                </table>

            </div>
        </div>
    </section>
@endsection