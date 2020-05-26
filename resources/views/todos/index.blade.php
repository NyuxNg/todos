@extends('todos.layout')

@section('content')
    <div class="flex justify-between border-b pb-4 px-4">
        <h1 class="text-2xl">All Your Todos</h1>
        <a href="{{route('todos.create')}}" class="mx-5 py-2 cursor-pointer text-blue-600">
            <span class="fas fa-plus-circle"></span>
        </a>
    </div>
    <x-alert/>
    <ul class="my-5">
        @forelse ($todos as $todo)
            <li class="flex justify-between p-2">

                @include('todos.complete-button')

                @if($todo->completed)
                    <p class="line-through">
                @else
                    <p>
                @endif
                <a href="{{route('todos.show', $todo->id)}}" class="cursor-pointer">{{$todo->title}}</a>
                </p>

                <div>
                    <a href="{{route('todos.edit', $todo->id)}}" class="text-orange-300 cursor-pointer text-white rounded">
                        <span class="fas fa-edit px-2 text-orange-400"></span>
                    </a>

                    <span onclick="event.preventDefault();
                        if(confirm('Are you sure?')){
                            document.getElementById('{{"form-delete-".$todo->id}}').submit()
                        }"
                        class="fas fa-trash text-orange-600 px-2 cursor-pointer"></span>
                    <form style="display: none" id="{{'form-delete-'.$todo->id}}" method="POST" action="{{route('todos.destroy', $todo->id)}}">
                        @csrf
                        @method('delete')
                    </form>
                </div>
            </li>
        @empty
            <p>No Task Available, create one.</p>
        @endforelse
    </ul>
@endsection
