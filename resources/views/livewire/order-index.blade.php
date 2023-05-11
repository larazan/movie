<div class="vs jj ttm vl ou uf na">

<!-- Loading -->
<x-loading-indicator />

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



            <!-- Add customer button -->
            <!-- <button class="btn ho xi ye">
                <svg class="oo sl du bf ub" viewBox="0 0 16 16">
                    <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                </svg>
                <span class="hidden trm nq">Add Order</span>
            </button> -->

        </div>

    </div>

    <!-- Table -->
    <div class="bg-white bd rounded-sm border border-slate-200 rc">
        <header class="vc vu">
            <h2 class="gh text-slate-800">All Orders <span class="gq gp">442</span></h2>
        </header>
        <div x-data="handleSelect">

            <!-- Table -->
            <div class="lf">
                <table class="ux ou le lr">
                    <!-- Table header -->
                    <thead class="go gv text-slate-500 hp co border-slate-200">
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
                                <div class="gh gt">Order ID</div>
                            </th>

                            <th class="vi wy w_ vo lm">
                                <div class="gh gt">Customer</div>
                            </th>
                            <th class="vi wy w_ vo lm">
                                <div class="gh gt">Grand Total</div>
                            </th>
                            <th class="vi wy w_ vo lm">
                                <div class="gh">Status</div>
                            </th>
                            <th class="vi wy w_ vo lm">
                                <div class="gh">Payment</div>
                            </th>
                            <th class="vi wy w_ vo lm">
                                <div class="gh">Date</div>
                            </th>
                            <th class="vi wy w_ vo lm">
                                <span class="gh gt">Action</span>
                            </th>
                        </tr>
                    </thead>
                    <!-- Table body -->
                    <tbody class="text-sm" x-data="{ open: false }">
                        <!-- Row -->
                        <tr>
                            <td class="vi wy w_ vo lm of">
                                <div class="flex items-center">
                                    <label class="inline-flex">
                                        <span class="d">Select</span>
                                        <input class="table-item i" type="checkbox" @click="uncheckParent">
                                    </label>
                                </div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="flex items-center text-slate-800">
                                    <a href="{{ url('admin/orderDetail/2') }}">
                                        <div class="gp text-indigo-500">#143567</div>
                                    </a>
                                </div>
                            </td>

                            <td class="vi wy w_ vo lm">
                                <div class="gp text-slate-800">Dominik Lamakani</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt gp yt">$129.00</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="inline-flex gp hb ya rounded-full gn vp vd">Refunded</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div>payment</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div>22/01/2021</div>
                            </td>

                            <td class="vi wy w_ vo lm of">
                                <div class="fm">
                                    <button class="gq xv rounded-full">
                                        <span class="d">Edit</span>
                                        <svg class="os sf du" viewBox="0 0 32 32">
                                            <path d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z"></path>
                                        </svg>
                                    </button>
                                    <button class="gq xv rounded-full" wire:click="showDetailModal(1)">
                                        <span class="d">detail</span>
                                        <svg class="os sf du" viewBox="0 0 32 32">
                                            <circle cx="16" cy="16" r="2"></circle>
                                            <circle cx="10" cy="16" r="2"></circle>
                                            <circle cx="22" cy="16" r="2"></circle>
                                        </svg>
                                    </button>
                                    <button class="yl xy rounded-full">
                                        <span class="d">Delete</span>
                                        <svg class="os sf du" viewBox="0 0 32 32">
                                            <path d="M13 15h2v6h-2zM17 15h2v6h-2z"></path>
                                            <path d="M20 9c0-.6-.4-1-1-1h-6c-.6 0-1 .4-1 1v2H8v2h1v10c0 .6.4 1 1 1h12c.6 0 1-.4 1-1V13h1v-2h-4V9zm-6 1h4v1h-4v-1zm7 3v9H11v-9h10z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>

                        </tr>

                        @foreach ($orders as $order)
                        <tr>
                            <td class="vi wy w_ vo lm of">
                                <div class="flex items-center">
                                    <label class="inline-flex">
                                        <span class="d">Select</span>
                                        <input class="table-item i" type="checkbox" @click="uncheckParent">
                                    </label>
                                </div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gp text-slate-800">{{ $order->code }}</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gp ">
                                    {{ $order->customer_full_name }}
                                </div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gp ">{{ $order->grand_total }}</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gp ">{{ $order->status }}</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gp ">{{ $order->payment_status }}</div>
                            </td>

                            <td class="vi wy w_ vo lm">
                                <div>{{ $order->created_at->format('d-m-Y') }}</div>
                            </td>

                            <td class="vi wy w_ vo lm of">
                                <div class="fm">
                                    <button class="gq xv rounded-full" wire:click="showEditModal({{ $order->id }})">
                                        <span class=" d">Edit</span>
                                        <svg class="os sf du" viewBox="0 0 32 32">
                                            <path d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z"></path>
                                        </svg>
                                    </button>

                                    <button class="yl xy rounded-full" wire:click="deleteId({{ $order->id }})">
                                        <span class=" d">Delete</span>
                                        <svg class="os sf du" viewBox="0 0 32 32">
                                            <path d="M13 15h2v6h-2zM17 15h2v6h-2z"></path>
                                            <path d="M20 9c0-.6-.4-1-1-1h-6c-.6 0-1 .4-1 1v2H8v2h1v10c0 .6.4 1 1 1h12c.6 0 1-.4 1-1V13h1v-2h-4V9zm-6 1h4v1h-4v-1zm7 3v9H11v-9h10z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach

                        <tr>
                            <td class="vi wy w_ vo lm" colspan="8">No records found</td>
                        </tr>

                    </tbody>

                </table>

            </div>
        </div>
    </div>
    {{ $orders->links() }}

    <!-- modal detail -->
    <x-jet-dialog-modal wire:model="showOrderDetailModal" class="">

        <x-slot name="title" class="border-b bg-slate-200">
            <span class="font-semibold">Detail Order</span>
        </x-slot>


        <x-slot name="content">
            <div class="border-t">
                <div class="vc vu ">
                    <div class="fw">

                        <div class="w-full bg-white lg:w-full xl:w-2/3 lg:mt-20 lg:mb-20 lg:shadow-xl xl:mt-02 xl:mb-20 xl:shadow-xl print:transform print:scale-90">
                            <header class="flex flex-col pt-20 bg-white ">
                                <div class="flex justify-between items-center mt-12 mb-2 ml-0 text-lg font-bold print:text-2xl">
                                    <div class="flex flex-col">
                                        <div class="flex items-center">
                                            <span class="mr-2 text-sm">INVOICE</span>
                                            <span id="invoice_id" class="text-green-700">0196023</span>
                                        </div>

                                        <div class="flex flex-col text-sm text-slate-500 print:text-sm">
                                            <span>Issue date: 2020.09.06</span>
                                            <span>Paid date: 2020.09.07</span>
                                            <span>Due date: 2020.10.06</span>
                                        </div>
                                    </div>
                                    <div class="px-8 py-2 text-3xl font-bold text-green-700 border-4 border-green-700 border-dotted md:absolute md:right-0 md:top-0 md:mr-12 lg:absolute lg:right-0 lg:top-0 xl:absolute xl:right-0 xl:top-0 print:absolute print:right-0 print:top-0 lg:mr-20 xl:mr-20 print:mr-2 print:mt-8">PAID</div>
                                </div>


                                <div class="flex justify-between py-2">
                                    <div>
                                        <span class="font-extrabold md:hidden lg:hidden xl:hidden print:hidden">FROM</span>
                                        <div class="flex flex-col">
                                            <span id="company-name" class="font-bold">BroHosting</span>
                                            <span id="company-country"><span class="flag-icon flag-icon-us"></span> United States</span>
                                            <div class="flex-row">
                                                <span id="c-city">New York</span>,
                                                <span id="c-postal">NY 10023</span>
                                            </div>
                                            <span id="company-address">98-2 W 67th St</span>
                                            <span id="company-phone">+12124567777</span>
                                            <span id="company-mail">info@brohosting.us</span>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="mt-12 font-extrabold md:hidden lg:hidden xl:hidden print:hidden">TO</span>
                                        <div class="flex flex-col md:absolute md:right-0 md:text-right lg:absolute lg:right-0 lg:text-right print:absolute print:right-0 print:text-right">
                                            <span id="person-name" class="font-bold">Cloud Solutions Inc</span>
                                            <span id="person-country"><span class="flag-icon flag-icon-hu"></span> Hungary</span>
                                            <div class="flex-row">
                                                <span id="p-postal">3100</span>
                                                <span id="p-city">Salgótarján</span>,
                                            </div>
                                            <span id="person-address">Rákóczi út 12.</span>
                                            <span id="person-phone">+36300000000</span>
                                            <span id="person-mail">info@cloudsolutions.hu</span>
                                        </div>
                                    </div>
                                </div>
                            </header>
                            <hr class="border-gray-300 md:mt-8 print:hidden">
                            <content>
                                <div id="content" class="flex justify-center md:p-8 lg:p-20 xl:p-20 print:p-2">
                                    <table class="w-full text-left table-auto print:text-sm" id="table-items">
                                        <thead>
                                            <tr class="text-white bg-gray-700 print:bg-gray-300 print:text-black">
                                                <th class="px-4 py-2">Item</th>
                                                <th class="px-4 py-2 text-right">Qty</th>
                                                <th class="px-4 py-2 text-right">Unit Price</th>
                                                <th class="px-4 py-2 text-right">Subtotal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="px-4 py-2 border">Shared Hosting - Simple Plan (Monthly)</td>
                                                <td class="px-4 py-2 text-right border tabular-nums slashed-zero">1</td>
                                                <td class="px-4 py-2 text-right border tabular-nums slashed-zero">$2.45</td>
                                                <td class="px-4 py-2 text-right border tabular-nums slashed-zero">$2.45</td>
                                            </tr>
                                            <tr class="bg-gray-100 print:bg-gray-100">
                                                <td class="px-4 py-2 border">Domain Registration - coolstory.bro - (100% Free for First Year)</td>
                                                <td class="px-4 py-2 text-right border tabular-nums slashed-zero">1</td>
                                                <td class="px-4 py-2 text-right border tabular-nums slashed-zero">$12.00</td>
                                                <td class="px-4 py-2 text-right border tabular-nums slashed-zero">$0.00</td>
                                            </tr>
                                            <tr>
                                                <td class="px-4 py-2 border">
                                                    Dedicated Server - Eco Boost
                                                    <div class="flex flex-col ml-4 text-xs print:hidden">
                                                        <span class="flex items-center">Intel® Xeon® Processor E5-1607 v3</span>
                                                        <span class="uppercase">32GB DDR4 RAM</span>
                                                        <span>1TB NVMe / Raid 1+0</span>
                                                        <span>1Gbps Network + CloudFlare DDoS protection</span>
                                                    </div>
                                                </td>
                                                <td class="px-4 py-2 text-right border tabular-nums slashed-zero">1</td>
                                                <td class="px-4 py-2 text-right border tabular-nums slashed-zero">$214.99</td>
                                                <td class="px-4 py-2 text-right border tabular-nums slashed-zero">$214.99</td>
                                            </tr>
                                            <tr class="bg-gray-100 print:bg-gray-100">
                                                <td class="px-4 py-2 border ">
                                                    Dedicated Server - V8 Turbo
                                                    <div class="flex flex-col ml-4 text-xs print:hidden">
                                                        <span class="flex items-center">AMD EPYC™ 7702P</span>
                                                        <span class="uppercase">128GB DDR4 RAM</span>
                                                        <span>512GB NVMe / Raid 5</span>
                                                        <span>100Mbit Network + CloudFlare DDoS protection</span>
                                                    </div>
                                                </td>
                                                <td class="px-4 py-2 text-right border tabular-nums slashed-zero">1</td>
                                                <td class="px-4 py-2 text-right border tabular-nums slashed-zero">$322.45</td>
                                                <td class="px-4 py-2 text-right border tabular-nums slashed-zero">$322.45</td>
                                            </tr>
                                            <!-- <tr class="text-white bg-gray-700 print:bg-gray-300 print:text-black">
                                        <td class="invisible"></td>
                                        <td class="invisible"></td>
                                        <td class="px-4 py-2 text-right border"><span class="flag-icon flag-icon-hu print:hidden"></span> VAT</td>
                                        <td class="px-4 py-2 text-right border tabular-nums slashed-zero">27%</td>
                                    </tr> -->
                                            <tr class="text-white bg-gray-700 print:bg-gray-300 print:text-black">
                                                <td class="invisible"></td>
                                                <td class="invisible"></td>
                                                <td class="px-4 py-2 text-right border">Tax</td>
                                                <td class="px-4 py-2 text-right border tabular-nums slashed-zero">$145.77</td>
                                            </tr>
                                            <tr class="text-white bg-gray-700 print:bg-gray-300 print:text-black">
                                                <td class="invisible"></td>
                                                <td class="invisible"></td>
                                                <td class="px-4 py-2 text-right border">Shipping</td>
                                                <td class="px-4 py-2 text-right border tabular-nums slashed-zero">$145.77</td>
                                            </tr>
                                            <tr class="text-white bg-gray-700 print:bg-gray-300 print:text-black">
                                                <td class="invisible"></td>
                                                <td class="invisible"></td>
                                                <td class="px-4 py-2 font-extrabold text-right border">Total</td>
                                                <td class="px-4 py-2 text-right border tabular-nums slashed-zero">$685.66</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </content>
                        </div>
                    </div>
                </div>
            </div>
        </x-slot>
        <x-slot name="footer">

        </x-slot>
    </x-jet-dialog-modal>

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

</div>