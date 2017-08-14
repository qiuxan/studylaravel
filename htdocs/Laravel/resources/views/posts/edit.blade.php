@extends('layout.app')

@section('content')

    <h1>Edit Post</h1>

    {!! Form::model($post, ['method'=>'PATCH', 'action'=>['PostsController@update',$post->id]]) !!}

    {{--<form method="post" action="/laravel/public/posts/{{$post->id}}">--}}



        {{csrf_field()}}


    {{--<input type="hidden" name="_method" value="PUT">--}}
    {{--<input type="text"  name="title" placeholder="Enter title4" value="{{$post->title}}">--}}


    <div class="form-group">

        {!! Form::label('title',"Title: ") !!}

        {!! Form::text('title',null, ['class'=>'form-control']) !!}

    </div>



        {{--<input type="submit" name="UPDATE">--}}
        {!! Form::submit('Update Post', ['class'=>'btn btn-info']) !!}


    {{--</form>--}}
    {!! Form::close() !!}




    {!! Form::open( ['method'=>'DELETE', 'action'=>['PostsController@destroy',$post->id]]) !!}
    {{--<form method="post" action="/laravel/public/posts/{{$post->id}}">--}}


        {{csrf_field()}}

        {{--<input type="hidden" name="_method" value="DELETE">--}}

        {{--<input type="submit" value="DELETE">--}}

        {!! Form::submit('Delete Post', ['class'=>'btn btn-danger']) !!}






    {{--</form>--}}



    {!! Form::close() !!}











@endsection


@section('footer')


@endsection


