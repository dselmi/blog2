@extends('layouts.template');
@section('contenu')

    <section class="site-section py-sm">
        <div class="container">
<div class="row mb-4">
    <div class="col-md-6">
        <h1>Contact</h1>
    </div>
</div>
<div class="row blog-entries">
    <div class="col-md-12 col-lg-8 main-content">

        <form action="{{ url('contact') }}" method="post">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-4 form-group">
                    <label for="name">Nom</label>
                    <input type="text" id="name" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }} "
                           placeholder="Votre nom" value="{{ old('nom') }}">
                    {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}

                </div>
                <div class="col-md-4 form-group">
                    <label for="phone">Telephone</label>
                    <input type="text" id="phone" name="phone" class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }} "
                           placeholder="Votre telephone" value="{{ old('phone') }}">
                    {!! $errors->first('phone', '<div class="invalid-feedback">:message</div>') !!}

                </div>
                <div class="col-md-4 form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }} "
                           placeholder="Votre email" value="{{ old('email') }}" >
                    {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}

                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-group">
                    <label for="message">Votre Message</label>
                    <textarea name="message" id="message" name="message" class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }} "
                     cols="30" rows="8" placeholder="Votre message" value="{{ old('message') }}"></textarea>
                    {!! $errors->first('message', '<div class="invalid-feedback">:message</div>') !!}

                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <input type="submit" value="Envoyer Votre Message" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
        <div class="col-md-12 col-lg-4 sidebar">

            <!-- END sidebar-box -->

            <!-- END sidebar-box -->

            <!-- END sidebar-box -->

            <div class="sidebar-box">
                <h3 class="heading">Categories</h3>
                <ul class="categories">
                    @foreach($cat as $cats)
                        <li><a href="#">{{$cats->name}} </a></li>
                    @endforeach




                </ul>
            </div>
            <!-- END sidebar-box -->

            <div class="sidebar-box">
                <h3 class="heading">Tags</h3>
                <ul class="tags">
@foreach($post as $posts)
                    @foreach($posts->tags()->get() as $tag)
                        <li><a href="#">{{ $tag->name }}</a></li>

                    @endforeach

@endforeach








                </ul>
            </div>
        </div>

    </div>

</div>
    </section>
@endsection