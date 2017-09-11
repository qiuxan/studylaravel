@extends('layouts.admin')

@section('style')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/min/dropzone.min.css">

@stop

@section('content')


    <H1>Create media</H1>



    {!! Form::open(['method'=>'POST','action'=>'AdminMediasController@store','class'=>'dropzone']) !!}





    {!! Form::close() !!}





@stop

@section('script')


    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/min/dropzone.min.js"></script>
@stop