<div class="g k x">
    <button wire:click="toggleLike" class="go gh gt oi rounded-sm flex ak justify-center items-center xm">
        <svg class="inline-flex dd if il" width="12" height="6" xmlns="http://www.w3.org/2000/svg">
            <path d="m0 6 6-6 6 6z"></path>
        </svg>
        <div>{{ count($this->reply->likes()) }}</div>
    </button>
</div>