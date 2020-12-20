
@extends('todos.layout')

@section('content')
    <div>
        <h1>Will do list:</h1>
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @php
            if(!isset($message))
            {
                $message = 'no message yet';
            }
        @endphp
        <p>{{ $message }}</p>

            <form method="post" action="/todo/create">
                @csrf

                <input type="text" name="title">
                <input type="submit" value='Commit'>
        </form>
    </div>
@endsection
    
