@extends('layout.app')

@section('content')
    <h1>Create</h1>

    {{--<form method="post" action="/laravel/public/posts">--}}

    {!! Form::open(['method'=>'POST', 'action'=>'PostsController@store','files'=>true]) !!}










    <div class="form-group">

        {!! Form::label('title',"Title: ") !!}

        {!! Form::text('title',null, ['class'=>'form-control']) !!}

    </div>


        {{csrf_field()}}


    <div class="form-group">



        {!! Form::file('file', ['class'=>'form-control']) !!}

    </div>


    <div class="form-group">
        {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}





    @if(count($errors)>0)

        <div class="alert alert-danger">

            @foreach($errors->all() as $error)

                <li>{{$error}}</li>

            @endforeach

        </div>



    @endif

@endsection


@section('footer')


@endsection


