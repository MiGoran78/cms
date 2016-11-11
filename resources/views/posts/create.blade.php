@extends('layouts.app')

@section('content')

    <h1>Create Post</h1>


    {!! Form::open(['method'=>'POST', 'action'=>'PostController@store']) !!}

    {{ csrf_field() }}

    <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class'=>'form-controll']) !!}
    </div>



    <div class="form-group">
        {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
    </div>


    {!! Form::close() !!}


    @if(count($errors) >0)
        <div class="alert-danger">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </div>

    @endif
@endsection