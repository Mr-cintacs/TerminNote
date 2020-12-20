@extends('todos.layout')

@section('content')
    <div>
        <h1>Update the list:</h1>
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="post" action="/todo/edit/{{ $todo->id }}">
            @csrf

            @method('put')
            <input type="text" name="title" value="{{ $todo->title }}">
            <input type="submit" value='Update'>
        </form>
    </div>
@endsection
    
