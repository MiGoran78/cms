@extends('layouts.app')

@section('content')

    <h1>Create Post</h1>


    {!! Form::open(['method'=>'POST', 'action'=>'PostController@store']) !!}

        {{ csrf_field() }}

        <input type="text" name="title" placeholder="Enter title">
        <input type="submit" name="submit">
    </form>




@endsection