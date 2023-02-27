<x-app-layout>

    <div class="y">

        <!-- Content -->
        <div class="vs jj ttm vl ou uf na uu">

            <!-- Page header -->
            <div class="je jd jc ri qw">

                <!-- Left: Title -->
                <div class="ri _y">
                    <h1 class="gu teu text-slate-800 font-bold">$47,347.09</h1>
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

                    <!-- Search form -->
                    <div class="hidden _q">
                        <form class="y">
                            <label for="action-search" class="d">Search</label>
                            <input id="action-search" class="s me xq" type="search" placeholder="Search…">
                            <button class="g w j kk" type="submit" aria-label="Search">
                                <svg class="oo sl ub du gq kj ml-3 mr-2" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
                                    <path d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
                                </svg>
                            </button>
                        </form>
                    </div>

                    <!-- Export button -->
                    <button class="btn ho xi ye">Export Transactions</button>

                </div>

            </div>

            <div class="ii">
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
            </div>

            <!-- Filters -->
            <div class="ii">
                <ul class="flex flex-wrap -m-1">
                    <li class="m-1">
                        <button class="inline-flex items-center justify-center text-sm gp gw rounded-full vn vf border cp bv ho ye wi wu">View All</button>
                    </li>
                    <li class="m-1">
                        <button class="inline-flex items-center justify-center text-sm gp gw rounded-full vn vf border border-slate-200 hover--border-slate-300 bv bg-white text-slate-500 wi wu">Completed</button>
                    </li>
                    <li class="m-1">
                        <button class="inline-flex items-center justify-center text-sm gp gw rounded-full vn vf border border-slate-200 hover--border-slate-300 bv bg-white text-slate-500 wi wu">Pending</button>
                    </li>
                    <li class="m-1">
                        <button class="inline-flex items-center justify-center text-sm gp gw rounded-full vn vf border border-slate-200 hover--border-slate-300 bv bg-white text-slate-500 wi wu">Canceled</button>
                    </li>
                </ul>
            </div>

            <!-- Table -->
            <div class="bg-white">
                <div x-data="handleSelect">

                    <!-- Table -->
                    <div class="lf">
                        <table class="ux ou" @click.stop="$dispatch('set-transactionopen', true)">
                            <!-- Table header -->
                            <thead class="go gh gv text-slate-500 co cs border-slate-200">
                                <tr>
                                    <th class="vi wy w_ vo lm of">
                                        <div class="flex items-center">
                                            <label class="inline-flex">
                                                <span class="d">Select all</span>
                                                <input id="parent-checkbox" class="i" type="checkbox" @click="toggleAll">
                                            </label>
                                        </div>
                                    </th>
                                    <th class="vi wy w_ vo lm">
                                        <div class="gh gt">Counterparty</div>
                                    </th>
                                    <th class="vi wy w_ vo lm">
                                        <div class="gh gt">Payment Date</div>
                                    </th>
                                    <th class="vi wy w_ vo lm">
                                        <div class="gh gt">Status</div>
                                    </th>
                                    <th class="vi wy w_ vo lm">
                                        <div class="gh gr">Amount</div>
                                    </th>
                                </tr>
                            </thead>
                            <!-- Table body -->
                            <tbody class="text-sm le lr cs border-slate-200">
                                <!-- Row -->
                                <tr class="al">
                                    <td class="vi wy w_ vo lm of">
                                        <div class="flex items-center">
                                            <label class="inline-flex">
                                                <span class="d">Select</span>
                                                <input class="table-item i" type="checkbox" @click.stop="uncheckParent">
                                            </label>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm zi">
                                        <div class="flex items-center">
                                            <div class="op sv ub mr-2 _b">
                                                <img class="op sv rounded-full" src="./images/transactions-image-01.svg" width="36" height="36" alt="Transaction 01">
                                            </div>
                                            <div class="gp text-slate-800">Form Builder CP</div>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt">22/01/2022</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt">
                                            <div class="go inline-flex gp hi text-slate-500 rounded-full gn vp vf">Pending</div>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm of">
                                        <div class="gr gz gp">-$1,299.22</div>
                                    </td>
                                </tr>
                                <!-- Row -->
                                <tr class="al" @click.stop="$dispatch('set-transactionopen', true)">
                                    <td class="vi wy w_ vo lm of">
                                        <div class="flex items-center">
                                            <label class="inline-flex">
                                                <span class="d">Select</span>
                                                <input class="table-item i" type="checkbox" @click.stop="uncheckParent">
                                            </label>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm zi">
                                        <div class="flex items-center">
                                            <div class="op sv ub mr-2 _b">
                                                <img class="op sv rounded-full" src="./images/transactions-image-02.svg" width="36" height="36" alt="Transaction 02">
                                            </div>
                                            <div class="gp text-slate-800">Imperial Hotel ****</div>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt">22/01/2022</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt">
                                            <div class="go inline-flex gp hc ys rounded-full gn vp vf">Completed</div>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm of">
                                        <div class="gr gz gp">-$1,029.77</div>
                                    </td>
                                </tr>
                                <!-- Row -->
                                <tr class="al" @click.stop="$dispatch('set-transactionopen', true)">
                                    <td class="vi wy w_ vo lm of">
                                        <div class="flex items-center">
                                            <label class="inline-flex">
                                                <span class="d">Select</span>
                                                <input class="table-item i" type="checkbox" @click.stop="uncheckParent">
                                            </label>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm zi">
                                        <div class="flex items-center">
                                            <div class="op sv ub mr-2 _b">
                                                <img class="op sv rounded-full" src="./images/user-36-05.jpg" width="36" height="36" alt="Transaction 03">
                                            </div>
                                            <div class="gp text-slate-800">Aprilynne Pills</div>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt">22/01/2022</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt">
                                            <div class="go inline-flex gp hi text-slate-500 rounded-full gn vp vf">Pending</div>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm of">
                                        <div class="gr yt gp">+$499.99</div>
                                    </td>
                                </tr>
                                <!-- Row -->
                                <tr class="al" @click.stop="$dispatch('set-transactionopen', true)">
                                    <td class="vi wy w_ vo lm of">
                                        <div class="flex items-center">
                                            <label class="inline-flex">
                                                <span class="d">Select</span>
                                                <input class="table-item i" type="checkbox" @click.stop="uncheckParent">
                                            </label>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm zi">
                                        <div class="flex items-center">
                                            <div class="op sv ub mr-2 _b">
                                                <img class="op sv rounded-full" src="./images/transactions-image-03.svg" width="36" height="36" alt="Transaction 03">
                                            </div>
                                            <div class="gp text-slate-800">Google Limited UK</div>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt">22/01/2022</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt">
                                            <div class="go inline-flex gp hc ys rounded-full gn vp vf">Completed</div>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm of">
                                        <div class="gr gz gp">-$1,029.77</div>
                                    </td>
                                </tr>
                                <!-- Row -->
                                <tr class="al" @click.stop="$dispatch('set-transactionopen', true)">
                                    <td class="vi wy w_ vo lm of">
                                        <div class="flex items-center">
                                            <label class="inline-flex">
                                                <span class="d">Select</span>
                                                <input class="table-item i" type="checkbox" @click.stop="uncheckParent">
                                            </label>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm zi">
                                        <div class="flex items-center">
                                            <div class="op sv ub mr-2 _b">
                                                <img class="op sv rounded-full" src="./images/transactions-image-04.svg" width="36" height="36" alt="Transaction 04">
                                            </div>
                                            <div class="gp text-slate-800">Acme LTD UK</div>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt">22/01/2022</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt">
                                            <div class="go inline-flex gp hi text-slate-500 rounded-full gn vp vf">Pending</div>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm of">
                                        <div class="gr yt gp">+$2,179.36</div>
                                    </td>
                                </tr>
                                <!-- Row -->
                                <tr class="al" @click.stop="$dispatch('set-transactionopen', true)">
                                    <td class="vi wy w_ vo lm of">
                                        <div class="flex items-center">
                                            <label class="inline-flex">
                                                <span class="d">Select</span>
                                                <input class="table-item i" type="checkbox" @click.stop="uncheckParent">
                                            </label>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm zi">
                                        <div class="flex items-center">
                                            <div class="op sv ub mr-2 _b">
                                                <img class="op sv rounded-full" src="./images/transactions-image-03.svg" width="36" height="36" alt="Transaction 03">
                                            </div>
                                            <div class="gp text-slate-800">Google Limited UK</div>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt">22/01/2022</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt">
                                            <div class="go inline-flex gp hf yl rounded-full gn vp vf">Canceled</div>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm of">
                                        <div class="gr gz gp">-$1,029.77</div>
                                    </td>
                                </tr>
                                <!-- Row -->
                                <tr class="al" @click.stop="$dispatch('set-transactionopen', true)">
                                    <td class="vi wy w_ vo lm of">
                                        <div class="flex items-center">
                                            <label class="inline-flex">
                                                <span class="d">Select</span>
                                                <input class="table-item i" type="checkbox" @click.stop="uncheckParent">
                                            </label>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm zi">
                                        <div class="flex items-center">
                                            <div class="op sv ub mr-2 _b">
                                                <img class="op sv rounded-full" src="./images/transactions-image-05.svg" width="36" height="36" alt="Transaction 05">
                                            </div>
                                            <div class="gp text-slate-800">Uber</div>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt">22/01/2022</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt">
                                            <div class="go inline-flex gp hc ys rounded-full gn vp vf">Completed</div>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm of">
                                        <div class="gr gz gp">-$272.88</div>
                                    </td>
                                </tr>
                                <!-- Row -->
                                <tr class="al" @click.stop="$dispatch('set-transactionopen', true)">
                                    <td class="vi wy w_ vo lm of">
                                        <div class="flex items-center">
                                            <label class="inline-flex">
                                                <span class="d">Select</span>
                                                <input class="table-item i" type="checkbox" @click.stop="uncheckParent">
                                            </label>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm zi">
                                        <div class="flex items-center">
                                            <div class="op sv ub mr-2 _b">
                                                <img class="op sv rounded-full" src="./images/transactions-image-06.svg" width="36" height="36" alt="Transaction 06">
                                            </div>
                                            <div class="gp text-slate-800">PublicOne Inc.</div>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt">22/01/2022</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt">
                                            <div class="go inline-flex gp hc ys rounded-full gn vp vf">Completed</div>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm of">
                                        <div class="gr gz gp">-$199.87</div>
                                    </td>
                                </tr>
                                <!-- Row -->
                                <tr class="al" @click.stop="$dispatch('set-transactionopen', true)">
                                    <td class="vi wy w_ vo lm of">
                                        <div class="flex items-center">
                                            <label class="inline-flex">
                                                <span class="d">Select</span>
                                                <input class="table-item i" type="checkbox" @click.stop="uncheckParent">
                                            </label>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm zi">
                                        <div class="flex items-center">
                                            <div class="op sv ub mr-2 _b">
                                                <img class="op sv rounded-full" src="./images/transactions-image-07.svg" width="36" height="36" alt="Transaction 07">
                                            </div>
                                            <div class="gp text-slate-800">Github Inc.</div>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt">22/01/2022</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt">
                                            <div class="go inline-flex gp hc ys rounded-full gn vp vf">Completed</div>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm of">
                                        <div class="gr gz gp">-$42.87</div>
                                    </td>
                                </tr>
                                <!-- Row -->
                                <tr class="al" @click.stop="$dispatch('set-transactionopen', true)">
                                    <td class="vi wy w_ vo lm of">
                                        <div class="flex items-center">
                                            <label class="inline-flex">
                                                <span class="d">Select</span>
                                                <input class="table-item i" type="checkbox" @click.stop="uncheckParent">
                                            </label>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm zi">
                                        <div class="flex items-center">
                                            <div class="op sv ub mr-2 _b">
                                                <img class="op sv rounded-full" src="./images/transactions-image-08.svg" width="36" height="36" alt="Transaction 07">
                                            </div>
                                            <div class="gp text-slate-800">Form Builder PRO</div>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt">22/01/2022</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt">
                                            <div class="go inline-flex gp hc ys rounded-full gn vp vf">Completed</div>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm of">
                                        <div class="gr gz gp">-$112.44</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
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

        <!-- Transaction Panel -->
        <x-transaction.panel />

    </div>

</x-app-layout>