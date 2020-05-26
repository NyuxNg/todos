@extends('todos.layout')

@section('content')
    <div class="flex justify-between border-b pb-4 px-4">
        <h1 class="text-2xl pb-2">Update Todo</h1>
        <a href="{{route('todos.index')}}" class="mx-5 py-2 cursor-pointer text-gray-600">
            <span class="fas fa-arrow-left"></span>
        </a>
    </div>
    <x-alert/>
    <form action="{{route('todos.update', $todo->id)}}" method="POST" class="py-5">
        @csrf
        @method('patch')
        <div class="py-1">
            <input type="text" value="{{$todo->title}}" name="title" id="title" class="py-2 px-2 border rounded">
        </div>
        <div class="py-1">
            <textarea name="description" class="p-2 rounded border" id="" >{{$todo->description}}</textarea>
        </div>
        <div class="py-2">

            @livewire('edit-step', ['steps'=> $todo->steps])

        </div>

        <div class="py-1">
            <input type="submit" value="Update" class="p-2 border rounded">
        </div>


    </form>
@endsection

