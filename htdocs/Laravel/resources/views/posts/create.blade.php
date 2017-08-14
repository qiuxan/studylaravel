@extends('layout.app')

@section('content')
    <h1>Create</h1>

    {{--<form method="post" action="/laravel/public/posts">--}}

    {!! Form::open(['method'=>'POST', 'action'=>'PostsController@store']) !!}


    <div class="form-group">

        {!! Form::label('title',"Title: ") !!}

        {!! Form::text('title',null, ['class'=>'form-control']) !!}

    </div>


        {{csrf_field()}}


    <div class="form-group">


        {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}

    </div>

{!! Form::close() !!}

@endsection


@section('footer')


@endsection


