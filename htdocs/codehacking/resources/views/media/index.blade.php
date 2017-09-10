@extends('layouts.admin')

@section('content')

    @if($photos)
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>

                <th>Name</th>

                <th>Created date</th>

            </tr>
            </thead>
            <tbody>

            @foreach($photos as $photo)

                <tr>
                    <td> {{$photo->id}}</td>
                    <td><a href="{{}}">{{$photo->file}}</a></td>
                    <td> {{$photo->created_at?$photo->created_at->diffForHumans():'no date'}}</td>

                </tr>
            @endforeach




            </tbody>
        </table>

    @endif
@stop