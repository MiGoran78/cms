@extends('layouts.app')

@section('content')

    <h1>Contact Page</h1>

    @if(count($people))
        <ul>
        @foreach($people as $people)
            <li>{{$people}}</li>
        @endforeach
        </ul>
    @endif

@stop


@section('footer')
    <script>alert('Hello')</script>
@stop
