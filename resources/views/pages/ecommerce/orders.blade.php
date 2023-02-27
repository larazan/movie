<x-app-layout>

<div class="vs jj ttm vl ou uf na">

<!-- Page header -->
<div class="je jd jc rc">

    <!-- Left: Title -->
    <div class="ri _y">
        <h1 class="gu teu text-slate-800 font-bold">Orders ✨</h1>
    </div>

    <!-- Right: Actions -->
    <div class="sn am jo az jp ft">

        <!-- Delete button -->
        <div class="table-items-action hidden">
            <div class="flex items-center">
                <div class="hidden tnh text-sm gm mr-2 lm"><span class="table-items-count"></span> items selected</div>
                <button class="btn bg-white border-slate-200 hover--border-slate-300 yl xy">Delete</button>
            </div>
        </div>

        <!-- Dropdown -->
        <x-sort-dropdown />

        <!-- Filter button -->
        <div class="y inline-flex">
            <button class="btn bg-white border-slate-200 hover--border-slate-300 text-slate-500 hover--text-slate-600">
                <span class="d">Filter</span><wbr>
                <svg class="oo sl du" viewBox="0 0 16 16">
                    <path d="M9 15H7a1 1 0 010-2h2a1 1 0 010 2zM11 11H5a1 1 0 010-2h6a1 1 0 010 2zM13 7H3a1 1 0 010-2h10a1 1 0 010 2zM15 3H1a1 1 0 010-2h14a1 1 0 010 2z"></path>
                </svg>
            </button>
        </div>

        <!-- Add customer button -->
        <button class="btn ho xi ye">
            <svg class="oo sl du bf ub" viewBox="0 0 16 16">
                <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
            </svg>
            <span class="hidden trm nq">Add Customer</span>
        </button>                            
        
    </div>

</div>

<!-- Table -->
<x-order.table />

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
            }
        }))
    })
</script>

<!-- Pagination -->
<x-pagination-table />

</div>

</x-app-layout>