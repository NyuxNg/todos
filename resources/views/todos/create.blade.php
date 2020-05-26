@extends('todos.layout')
@section('content')
    <div class="flex justify-between border-b pb-4 px-4">
        <h1 class="text-2xl pb-2">All your todos</h1>
        <a href="{{route('todos.index')}}" class="mx-5 py-2 cursor-pointer text-gray-600">
            <span class="fas fa-arrow-left"></span>
        </a>
    </div>
    <x-alert/>
    <form action="{{route('todos.store')}}" method="POST" class="py-5">
        @csrf
        <div class="py-1">
            <input type="text" name="title" id="title" class="py-2 px-2 border rounded" placeholder="Type the title here.">
        </div>
        <div class="py-1">
            <textarea name="description" class="p-2 rounded border" id="" placeholder="Type the description here."></textarea>
        </div>
        <div class="py-2">

            @livewire('step')

        </div>
        <div class="py-1">
            <input type="submit" value="Create" class="p-2 border rounded">
        </div>
    </form>
@endsection
