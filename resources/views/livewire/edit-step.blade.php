<div>
    <div class="flex justify-center pb-4 px-4">
        <h2 class="text-lg">Add Steps for task</h2>
        <span wire:click="increment" class="fas fa-plus px-4 py-1 cursor-pointer"></span>
    </div>


    @foreach ($steps as $step)
    <div class="flex justify-center py-2 px-2" wire:key="{{$loop->index}}">
        <input type="text" name="stepName[]" id="step-{{$loop->index+1}}" class="py-2 px-2 border rounded" placeholder="Type the step-{{$loop->index+1}} here." value="{{$step['name']}}">
        <input type="hidden" name="stepId[]" value="{{$step['id']}}">
        <span wire:click="remove({{$loop->index}})" class="fas fa-times p-2 text-orange-400 cursor-pointer"></span>
    </div>
    @endforeach

</div>
