<div class="space-y-2">
    @if(count($immunizations) >= 1)
        @foreach($immunizations as $key => $immunization)
            @continue($loop->last)
        <div class="flex items-center space-x-4" wire:key="form-line-all-{{ $loop->index }}">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4" wire:key="form-line-{{ $loop->index }}">
                <div wire:key="date-box-{{ $loop->index }}">
                    <input wire:key="date-{{ $loop->index }}" class="block form-input w-full max-w-xs" id="immunization_history[{{ $key }}][date]" type="date" name="immunization_history[{{ $key }}][date]" placeholder="Date" value="{{ $immunizations[$key]['date'] }}" />
                </div>
                <div wire:key="type-box-{{ $loop->index }}">
                    <input wire:key="type-{{ $loop->index }}" class="block form-input w-full max-w-xs" id="immunization_history[{{ $key }}][type]" type="text" name="immunization_history[{{ $key }}][type]" placeholder="Type" value="{{ $immunizations[$key]['type'] }}" />
                </div>
                <div wire:key="next-due-box-{{ $loop->index }}">
                    <input wire:key="next-due-{{ $loop->index }}" class="block form-input w-full max-w-xs" id="immunization_history[{{ $key }}][next_due]" type="date" name="immunization_history[{{ $key }}][next_due]" placeholder="Next Due" value="{{ $immunizations[$key]['next_due'] }}" />
                </div>
            </div>
        
            <div wire:key="button-{{ $loop->index }}" class="flex items-center space-x-2">
                <svg wire:key="remove-{{ $loop->index }}" class="w-5 h-5 text-transparent" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path></svg>
                <svg wire:key="add-{{ $loop->index }}" class="w-5 h-5 text-transparent" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"></path></svg>
            </div>
        </div>
        @endforeach
    

        <div class="flex items-center space-x-4">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                <div>
                    <input class="block form-input w-full max-w-xs" id="immunization_history[{{ count($immunizations) - 1 }}][date]" type="date" name="immunization_history[{{ count($immunizations) - 1 }}][date]" placeholder="Date" value="{{ $immunizations[count($immunizations) - 1]['date'] }}" />
                </div>
                <div>
                    <input class="block form-input w-full max-w-xs" id="immunization_history[{{ count($immunizations) - 1 }}][type]" type="text" name="immunization_history[{{ count($immunizations) - 1 }}][type]" placeholder="Type" value="{{ $immunizations[count($immunizations) - 1]['type'] }}" />
                </div>
                <div>
                    <input class="block form-input w-full max-w-xs" id="immunization_history[{{ count($immunizations) - 1 }}][next_due]" type="date" name="immunization_history[{{ count($immunizations) - 1 }}][next_due]" placeholder="Next Due" value="{{ $immunizations[count($immunizations) - 1]['next_due'] }}" />
                </div>
            </div>
        
            <div class="flex items-center space-x-2">
            @if($immunizations)
                <svg wire:click="addAnother" class="w-5 h-5 text-primary-800 cursor-pointer" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"></path></svg>
                <svg wire:click="removeLast" class="w-5 h-5 text-red-500 cursor-pointer" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path></svg>
                @else
                <svg wire:click="addAnother" class="w-5 h-5 text-primary-800 cursor-pointer" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"></path></svg>
                <svg class="w-5 h-5 text-transparent" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"></path></svg>
            @endif
            </div>
        </div>
    @else
        <div>
            <button type="button" class="btn btn-secondary text-xs" wire:click="addAnother">
                Add Immunization History
            </button>
        </div>
    @endif
</div>