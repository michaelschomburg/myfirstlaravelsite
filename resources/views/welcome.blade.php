@extends('layout')

@section('content')
    {{--<h1>My First Website</h1>
    <ul>
        <?php foreach ($tasks as $task) : ?>
            <li><?= $task; ?></li>
        <?php endforeach; ?>
    </ul>--}}
    <h1>My First {{$foo}} Website</h1>
    <ul>
        @foreach($tasks as $task)
            <li>{{$task}}</li>
        @endforeach
    </ul>
@endsection
