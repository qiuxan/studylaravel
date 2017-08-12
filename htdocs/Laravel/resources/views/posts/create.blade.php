@extends('layout.app')

@section('content')

    <form method="post" action="/laravel/public/posts">
        <input type="text"  name="title" placeholder="Enter title4">


        {{csrf_field()}}



        <input type="submit" name="submit">
        
    </form>


@endsection


@section('footer')


@endsection


