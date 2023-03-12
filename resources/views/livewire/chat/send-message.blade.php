<!-- Footer -->
<div class="b te">
    @if ($selectedConversation)
        <div class="flex items-center fe bg-white co border-slate-200 vs jj tei sa">
            <!-- Plus button -->
            <button class="ub gq xv ra">
                <span class="d">Add</span>
                <svg class="oi so du" viewBox="0 0 24 24">
                    <path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12C23.98 5.38 18.62.02 12 0zm6 13h-5v5h-2v-5H6v-2h5V6h2v5h5v2z"></path>
                </svg>
            </button>
            <!-- Message input -->
            <form wire:submit.prevent='sendMessage' class="uw flex">
                <div class="uw ra">
                    <label for="message-input" class="d">Type a message</label>
                    <input wire:model='body' id="message-input sendMessage" class="s ou hi cp ki xq" type="text" placeholder="Aa">
                </div>
                <button type="submit" class="btn ho xi ye lm">Send -&gt;</button>
            </form>
        </div>
    @endif
</div>