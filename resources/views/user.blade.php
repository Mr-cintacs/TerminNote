@extends('hello')

@section('title', 'user file')

@section('content')
    <ul>
        @foreach($users as $user )
            <li>{{$user}}</li>
        @endforeach
    </ul>
@endsection