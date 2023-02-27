<x-app-layout>

    <div class="vs jj ttm vl ou uf na">

        <!-- Page header -->
        <x-transactions.header />

        <!-- <div class="ii">
            <span>Transactions from </span>
            <div class="y inline-flex" x-data="{ open: false }">
                <button class="inline-flex justify-center items-center kk" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open" aria-expanded="false">
                    <div class="flex items-center ld">
                        <span class="ld gp text-indigo-500 _e">My Personal Account</span>
                        <svg class="w-3 h-3 ub nz du text-indigo-400" viewBox="0 0 12 12">
                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                        </svg>
                    </div>
                </button>
                <div class="uk tk g z x un bg-white border border-slate-200 va rounded bd la re" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="wt wa wr au" x-transition:enter-start="opacity-0 uq" x-transition:enter-end="ba uj" x-transition:leave="wt wa wr" x-transition:leave-start="ba" x-transition:leave-end="opacity-0" style="display: none;">
                    <ul>
                        <li>
                            <a class="gp text-sm g_ xg flex items-center vf vn" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Business Account</a>
                        </li>
                        <li>
                            <a class="gp text-sm g_ xg flex items-center vf vn" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Family Account</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div> -->

        <!-- Filters -->
        <x-transactions.filter />

        <!-- Table -->
        <x-transactions.table />

        <script>
            // A basic demo function to handle "select all" functionality
            document.addEventListener('alpine:init', () => {
                Alpine.data('handleSelect', () => ({
                    selectall: false,
                    selectAction() {
                        countEl = document.querySelector('.table-items-action');
                        if (!countEl) return;
                        checkboxes = document.querySelectorAll('input.table-item:checked');
                        document.querySelector('.table-items-count').innerHTML = checkboxes.length;
                        if (checkboxes.length > 0) {
                            countEl.classList.remove('hidden');
                        } else {
                            countEl.classList.add('hidden');
                        }
                    },
                    toggleAll() {
                        this.selectall = !this.selectall;
                        checkboxes = document.querySelectorAll('input.table-item');
                        [...checkboxes].map((el) => {
                            el.checked = this.selectall;
                        });
                        this.selectAction();
                    },
                    uncheckParent() {
                        this.selectall = false;
                        document.getElementById('parent-checkbox').checked = false;
                        this.selectAction();
                    },
                }))
            })
        </script>

        <!-- Pagination -->
        <x-pagination-table />

    </div>

</x-app-layout>