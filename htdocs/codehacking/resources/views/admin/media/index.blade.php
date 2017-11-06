@extends('layouts.admin')

@section('content')

    @if($photos)
        <form action="/codehacking/public/delete/media" method="post">
            {{csrf_field()}}

            {{method_field('delete')}}
            <div class="form-group">

                <select name="checkBoxArray" id="">

                    <option value="Delete">Delete</option>
                </select>
            </div>

            <div class="form-group">

                <input type="submit" class="btn-primary">
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th><input type="checkbox" id="options"></th>
                    <th>ID</th>

                    <th>Name</th>

                    <th>Created date</th>

                </tr>
                </thead>
                <tbody>

                @foreach($photos as $photo)

                    <tr>
                        <td><input class="CheckBoxes" type="checkbox" name="checkBoxArray[]" value="{{$photo->id}}"></td>
                        <td> {{$photo->id}}</td>
                        <td><img height="50" src="{{$photo->file}}" alt=""></td>
                        <td> {{$photo->created_at?$photo->created_at->diffForHumans():'no date'}}</td>

                        <td>

                            {!! Form::open(['method'=>'Delete','action'=>['AdminMediasController@destroy',$photo->id]]) !!}




                            <div class="form-group">
                                {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                            </div>


                            {!! Form::close() !!}



                        </td>
                    </tr>
                @endforeach




                </tbody>
            </table>

        </form>
    @endif



@stop

@section('script')
    <script>

        $(document).ready(function () {

            $('#options').click(function () {


                if(this.checked){
                    $('.CheckBoxes').each(function () {
                        this.checked=true;
                    });
                }
                else{

                    $('.CheckBoxes').each(function () {
                        this.checked=false;
                    });


                }
            });

        });


    </script>

@stop