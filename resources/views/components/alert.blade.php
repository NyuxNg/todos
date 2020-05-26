<div>
    {{-- {{$slot}} --}}

    @if (session()->has('message'))
        <div class="py-4 px-2 bg-green-400 alert alert-success">
            {{session()->get('message')}}
        </div>
    @elseif(session()->has('error'))
        <div class="py-4 px-2 bg-red-400 alert alert-danger">
            {{session()->get('error')}}
        </div>
    @endif

    @if ($errors->any())
        <div class="py-4 px-2 bg-red-400 alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>

    @endif

</div>
