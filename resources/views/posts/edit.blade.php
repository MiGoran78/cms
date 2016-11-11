@extends('layouts.app')

@section('content')

    <h1>Edit Post</h1>

    {{--<form method="post" action="/posts/{{$post->id}}">--}}
        {{--{{ csrf_field() }}--}}

        {{--<input type="hidden" name="_method" value="PUT">--}}

        {{--<input type="text" name="title" placeholder="Enter title" value="{{$post->title}}">--}}
        {{--<input type="submit" value="UPDATE">--}}
    {{--</form>--}}






    {!! Form::model($post, ['method'=>'PATCH', 'action'=>['PostController@update', $post->id]]) !!}

        {{ csrf_field() }}

        <div class="form-group">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, ['class'=>'form-controll']) !!}
        </div>


        <div class="form-group">
            {!! Form::submit('Update Post', ['class'=>'btn btn-info']) !!}
        </div>

    {!! Form::close() !!}




    {!! Form::open(['method'=>'DELETE', 'action'=>['PostController@destroy', $post->id]]) !!}

        <form method="post" action="/posts/{{$post->id}}">
            {{ csrf_field() }}

            {!! Form::submit('Delete Post', ['class'=>'btn btn-danger']) !!}
        </form>

    {!! Form::close() !!}


@endsection