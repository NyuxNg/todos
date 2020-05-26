@extends('todos.layout')

@section('content')
     <br>

    <div class="flex justify-between border-b pb-4 px-4">
        <h1 class="text-2xl pb-2">{{$todo->title}}</h1>
        <a href="{{route('todos.index')}}" class="mx-5 py-2 cursor-pointer text-gray-600">
            <span class="fas fa-arrow-left"></span>
        </a>
    </div>
    <x-alert/>
    <div>
        <div>
            <h3 class="text-lg">Description</h3>
            <p>{{$todo->description}}</p>
        </div>
        <div class="py-4">

            @if ($todo->steps->count() > 0)
                <h3 class="text-lg">Step for this task</h3>
                @foreach ($todo->steps as $step)
                    <p>{{$step->name}}</p>
                @endforeach
            @else
                <h3 class="text-lg text-muted">No step for this task</h3>
            @endif
        </div>
    </div>

@endsection
