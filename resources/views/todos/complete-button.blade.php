<div>
    @if ($todo->completed)
        <span onclick="event.preventDefault(); document.getElementById('{{"form-uncomplete-".$todo->id}}').submit()" class="fas fa-check px-2 text-green-600 cursor-pointer"></span>
        <form style="display: none" id="{{'form-uncomplete-'.$todo->id}}" method="POST" action="{{route('todos.uncomplete', $todo->id)}}">
            @csrf
            @method('delete')
        </form>
    @else
        <span onclick="event.preventDefault(); document.getElementById('{{"form-complete-".$todo->id}}').submit()" class="fas fa-check px-2 text-gray-300 cursor-pointer"></span>
        <form style="display: none" id="{{'form-complete-'.$todo->id}}" method="POST" action="{{route('todos.complete', $todo->id)}}">
            @csrf
            @method('put')
        </form>

    @endif

</div>
