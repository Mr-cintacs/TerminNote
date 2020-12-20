
@extends('todos.layout')

@section('content')
    <h1>My List:</h1>
    <button><a href="/todo/create">Create New</a></button>
    <ul>
        @php
            if(!isset($message))
            {
                $message = 'no message yet';
            }
        @endphp

        <h2>{{ $message }}</h2>
        {{ Session::get('message')}}
        @foreach($todos as $todo)
            <li>{{ $todo -> title }}<a href="/todo/edit/{{$todo->id}}"> EDIT</a> </li>
        @endforeach
    </ul>
@endsection