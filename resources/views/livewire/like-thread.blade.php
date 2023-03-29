<div class="ub">
    @if(Auth::guest())
    <button class="go gh gn sx ow border border-slate-200 hover--border-slate-300 rounded-sm flex ak justify-center items-center">
        <svg class="inline-flex dc if il" width="12" height="6" xmlns="http://www.w3.org/2000/svg">
            <path d="m0 6 6-6 6 6z"></path>
        </svg>
        <div>{{ count($this->thread->likes()) }}</div>
    </button>
    @else
    <button wire:click="toggleLike" class="go gh gn sx ow border cw rounded-sm flex ak justify-center items-center by bb bw">
        <svg class="inline-flex dc if il" width="12" height="6" xmlns="http://www.w3.org/2000/svg">
            <path d="m0 6 6-6 6 6z"></path>
        </svg>
        <div>{{ count($this->thread->likes()) }}</div>
    </button>
    @endif
    
</div>