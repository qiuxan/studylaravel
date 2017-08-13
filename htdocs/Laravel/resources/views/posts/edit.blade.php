@extends('layout.app')

@section('content')

    <h1>Edit Post</h1>

    <form method="post" action="/laravel/public/posts/{{$post->id}}">


        <input type="hidden" name="_method" value="PUT">
        <input type="text"  name="title" placeholder="Enter title4" value="{{$post->title}}">


        {{csrf_field()}}



        <input type="submit" name="submit">

    </form>


@endsection


@section('footer')


@endsection


