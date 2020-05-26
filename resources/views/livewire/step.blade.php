<div>
    <div class="flex justify-center pb-4 px-4">
        <h2 class="text-lg">Add Steps for task</h2>
        <span wire:click="increment" class="fas fa-plus px-4 py-1 cursor-pointer"></span>
    </div>


    @foreach ($steps as $step)
    <div class="flex justify-center py-2 px-2" wire:key="{{$step}}">
        <input type="text" name="step[]" id="step-{{$step+1}}" class="py-2 px-2 border rounded" placeholder="Type the step-{{$step+1}} here.">
        <span wire:click="remove({{$step}})" class="fas fa-times p-2 text-orange-400 cursor-pointer"></span>
    </div>
    @endforeach

</div>
