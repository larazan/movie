<div class="je jd jc ii">

    <!-- Left side -->
    <div class="ri _y">
        <ul class="flex flex-wrap -m-1">
            <li class="m-1">
                <button class="inline-flex items-center justify-center text-sm gp gw rounded-full vn vf border cp bv ho ye wi wu">All <span class="nz text-indigo-200">67</span></button>
            </li>
            <li class="m-1">
                <button class="inline-flex items-center justify-center text-sm gp gw rounded-full vn vf border border-slate-200 hover--border-slate-300 bv bg-white text-slate-500 wi wu">Paid <span class="nz gq">14</span></button>
            </li>
            <li class="m-1">
                <button class="inline-flex items-center justify-center text-sm gp gw rounded-full vn vf border border-slate-200 hover--border-slate-300 bv bg-white text-slate-500 wi wu">Due <span class="nz gq">34</span></button>
            </li>
            <li class="m-1">
                <button class="inline-flex items-center justify-center text-sm gp gw rounded-full vn vf border border-slate-200 hover--border-slate-300 bv bg-white text-slate-500 wi wu">Overdue <span class="nz gq">19</span></button>
            </li>
        </ul>
    </div>

    <!-- Right side -->
    <div class="sn am jo az jp ft">

        <!-- Delete button -->
        <div class="table-items-action hidden">
            <div class="flex items-center">
                <div class="hidden tnh text-sm gm mr-2 lm"><span class="table-items-count"></span> items selected</div>
                <button class="btn bg-white border-slate-200 hover--border-slate-300 yl xy">Delete</button>
            </div>
        </div>

        <!-- Dropdown -->
        <div class="y" x-data="{ open: false, selected: 2 }">
            <button class="btn fe un bg-white border-slate-200 hover--border-slate-300 text-slate-500 hover--text-slate-600" aria-label="Select date range" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open" aria-expanded="false">
                <span class="flex items-center">
                    <svg class="oo sl du text-slate-500 ub mr-2" viewBox="0 0 16 16">
                        <path d="M15 2h-2V0h-2v2H9V0H7v2H5V0H3v2H1a1 1 0 00-1 1v12a1 1 0 001 1h14a1 1 0 001-1V3a1 1 0 00-1-1zm-1 12H2V6h12v8z"></path>
                    </svg>
                    <span x-text="$refs.options.children[selected].children[1].innerHTML">Last Month</span>
                </span>
                <svg class="ub nz du gq" width="11" height="7" viewBox="0 0 11 7">
                    <path d="M5.4 6.8L0 1.4 1.4 0l4 4 4-4 1.4 1.4z"></path>
                </svg>
            </button>
            <div class="tk g z q ou bg-white border border-slate-200 va rounded bd la re" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="wt wa ws au" x-transition:enter-start="opacity-0 uq" x-transition:enter-end="ba uj" x-transition:leave="wt wa ws" x-transition:leave-start="ba" x-transition:leave-end="opacity-0" style="display: none;">
                <div class="gp text-sm g_" x-ref="options">
                    <button tabindex="0" class="flex items-center ou xr vf vn al" :class="selected === 0 &amp;&amp; 'text-indigo-500'" @click="selected = 0;open = false" @focus="open = true" @focusout="open = false">
                        <svg class="ub mr-2 du text-indigo-500 invisible" :class="selected !== 0 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                            <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                        </svg>
                        <span>Today</span>
                    </button>
                    <button tabindex="0" class="flex items-center ou xr vf vn al" :class="selected === 1 &amp;&amp; 'text-indigo-500'" @click="selected = 1;open = false" @focus="open = true" @focusout="open = false">
                        <svg class="ub mr-2 du text-indigo-500 invisible" :class="selected !== 1 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                            <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                        </svg>
                        <span>Last 7 Days</span>
                    </button>
                    <button tabindex="0" class="flex items-center ou xr vf vn al text-indigo-500" :class="selected === 2 &amp;&amp; 'text-indigo-500'" @click="selected = 2;open = false" @focus="open = true" @focusout="open = false">
                        <svg class="ub mr-2 du text-indigo-500" :class="selected !== 2 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                            <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                        </svg>
                        <span>Last Month</span>
                    </button>
                    <button tabindex="0" class="flex items-center ou xr vf vn al" :class="selected === 3 &amp;&amp; 'text-indigo-500'" @click="selected = 3;open = false" @focus="open = true" @focusout="open = false">
                        <svg class="ub mr-2 du text-indigo-500 invisible" :class="selected !== 3 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                            <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                        </svg>
                        <span>Last 12 Months</span>
                    </button>
                    <button tabindex="0" class="flex items-center ou xr vf vn al" :class="selected === 4 &amp;&amp; 'text-indigo-500'" @click="selected = 4;open = false" @focus="open = true" @focusout="open = false">
                        <svg class="ub mr-2 du text-indigo-500 invisible" :class="selected !== 4 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                            <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                        </svg>
                        <span>All Time</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Filter button -->
        <div class="y inline-flex">
            <button class="btn bg-white border-slate-200 hover--border-slate-300 text-slate-500 hover--text-slate-600">
                <span class="d">Filter</span><wbr>
                <svg class="oo sl du" viewBox="0 0 16 16">
                    <path d="M9 15H7a1 1 0 010-2h2a1 1 0 010 2zM11 11H5a1 1 0 010-2h6a1 1 0 010 2zM13 7H3a1 1 0 010-2h10a1 1 0 010 2zM15 3H1a1 1 0 010-2h14a1 1 0 010 2z"></path>
                </svg>
            </button>
        </div>
    </div>

</div>