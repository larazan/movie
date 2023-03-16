<div class="vs jj ttm vl ou uf na">

                    <!-- Page header -->
                    <div class="je jd jc ii">

                        <!-- Left: Title -->
                        <div class="ri _y">
                            <h1 class="gu teu text-slate-800 font-bold">Basket ✨</h1>
                        </div>

                        <!-- Right: Actions -->
                        <div class="sn am jo az jp ft">

                            <!-- Search form -->
                            <form class="y">
                                <label for="action-search" class="d">Search</label>
                                <input id="action-search" class="s me xq" type="search" placeholder="Search by invoice ID…">
                                <button class="g w j kk" type="submit" aria-label="Search">
                                    <svg class="oo sl ub du gq kj ml-3 mr-2" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
                                        <path d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
                                    </svg>
                                </button>
                            </form>

                            <!-- Create invoice button -->
                            <button class="btn ho xi ye">
                                <svg class="oo sl du bf ub" viewBox="0 0 16 16">
                                    <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                                </svg>
                                <span class="hidden trm nq">Create Invoice</span>
                            </button>

                        </div>

                    </div>

                    <!-- More actions -->
                    <div class="je jd jc ii">
                    
                        <!-- Left side -->
                        <div class="ri _y">
                            
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

                    <!-- Table -->
                    <div class="bg-white bd rounded-sm border border-slate-200 rc">
                        <header class="vc vu">
                            <h2 class="gh text-slate-800">Invoices <span class="gq gp">67</span></h2>
                        </header>
                        <div x-data="handleSelect">

                            <!-- Table -->
                            <div class="lf">
                                <table class="ux ou">
                                    <!-- Table header -->
                                    <thead class="go gh gv text-slate-500 hp co cs border-slate-200">
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
                                                <div class="gh gt">Invoice</div>
                                            </th>
                                            <th class="vi wy w_ vo lm">
                                                <div class="gh gt">Total</div>
                                            </th>
                                            <th class="vi wy w_ vo lm">
                                                <div class="gh gt">Status</div>
                                            </th>
                                            <th class="vi wy w_ vo lm">
                                                <div class="gh gt">Customer</div>
                                            </th>
                                            <th class="vi wy w_ vo lm">
                                                <div class="gh gt">Issued on</div>
                                            </th>
                                            <th class="vi wy w_ vo lm">
                                                <div class="gh gt">Paid on</div>
                                            </th>
                                            <th class="vi wy w_ vo lm">
                                                <div class="gh gt">Type</div>
                                            </th>
                                            <th class="vi wy w_ vo lm">
                                                <div class="gh gt">Actions</div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <!-- Table body -->
                                    <tbody class="text-sm le lr">
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
                                                <div class="gp yv">#143567</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gp yl">$129.00</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="inline-flex gp hf yl rounded-full gn vp vd">Overdue</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gp text-slate-800">Dominik Lamakani</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div>22/07/2021</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div>-</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="flex items-center">
                                                    <svg class="oo sl du gq ub mr-2" viewBox="0 0 16 16">
                                                        <path d="M4.3 4.5c1.9-1.9 5.1-1.9 7 0 .7.7 1.2 1.7 1.4 2.7l2-.3c-.2-1.5-.9-2.8-1.9-3.8C10.1.4 5.7.4 2.9 3.1L.7.9 0 7.3l6.4-.7-2.1-2.1zM15.6 8.7l-6.4.7 2.1 2.1c-1.9 1.9-5.1 1.9-7 0-.7-.7-1.2-1.7-1.4-2.7l-2 .3c.2 1.5.9 2.8 1.9 3.8 1.4 1.4 3.1 2 4.9 2 1.8 0 3.6-.7 4.9-2l2.2 2.2.8-6.4z"></path>
                                                    </svg>
                                                    <div>Subscription</div>
                                                </div>
                                            </td>
                                            <td class="vi wy w_ vo lm of">
                                                <div class="fm">
                                                    <button class="gq xv rounded-full">
                                                        <span class="d">Edit</span>
                                                        <svg class="os sf du" viewBox="0 0 32 32">
                                                            <path d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z"></path>
                                                        </svg>
                                                    </button>
                                                    <button class="gq xv rounded-full">
                                                        <span class="d">Download</span>
                                                        <svg class="os sf du" viewBox="0 0 32 32">
                                                            <path d="M16 20c.3 0 .5-.1.7-.3l5.7-5.7-1.4-1.4-4 4V8h-2v8.6l-4-4L9.6 14l5.7 5.7c.2.2.4.3.7.3zM9 22h14v2H9z"></path>
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
                                                <div class="gp yv">#143536</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gp yt">$59.00</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="inline-flex gp hc ys rounded-full gn vp vd">Paid</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gp text-slate-800">Mark Cameron</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div>19/07/2021</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div>20/07/2021</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="flex items-center">
                                                    <svg class="oo sl du gq ub mr-2" viewBox="0 0 16 16">
                                                        <path d="M4.3 4.5c1.9-1.9 5.1-1.9 7 0 .7.7 1.2 1.7 1.4 2.7l2-.3c-.2-1.5-.9-2.8-1.9-3.8C10.1.4 5.7.4 2.9 3.1L.7.9 0 7.3l6.4-.7-2.1-2.1zM15.6 8.7l-6.4.7 2.1 2.1c-1.9 1.9-5.1 1.9-7 0-.7-.7-1.2-1.7-1.4-2.7l-2 .3c.2 1.5.9 2.8 1.9 3.8 1.4 1.4 3.1 2 4.9 2 1.8 0 3.6-.7 4.9-2l2.2 2.2.8-6.4z"></path>
                                                    </svg>
                                                    <div>Subscription</div>
                                                </div>
                                            </td>
                                            <td class="vi wy w_ vo lm of">
                                                <div class="fm">
                                                    <button class="gq xv rounded-full">
                                                        <span class="d">Edit</span>
                                                        <svg class="os sf du" viewBox="0 0 32 32">
                                                            <path d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z"></path>
                                                        </svg>
                                                    </button>
                                                    <button class="gq xv rounded-full">
                                                        <span class="d">Download</span>
                                                        <svg class="os sf du" viewBox="0 0 32 32">
                                                            <path d="M16 20c.3 0 .5-.1.7-.3l5.7-5.7-1.4-1.4-4 4V8h-2v8.6l-4-4L9.6 14l5.7 5.7c.2.2.4.3.7.3zM9 22h14v2H9z"></path>
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
                                                <div class="gp yv">#143599</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gp yt">$89.00</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="inline-flex gp hc ys rounded-full gn vp vd">Paid</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gp text-slate-800">Sergio Gonnelli</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div>17/07/2021</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div>19/07/2021</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="flex items-center">
                                                    <svg class="oo sl du gq ub mr-2" viewBox="0 0 16 16">
                                                        <path d="M11.4 0L10 1.4l2 2H8.4c-2.8 0-5 2.2-5 5V12l-2-2L0 11.4l3.7 3.7c.2.2.4.3.7.3.3 0 .5-.1.7-.3l3.7-3.7L7.4 10l-2 2V8.4c0-1.7 1.3-3 3-3H12l-2 2 1.4 1.4 3.7-3.7c.4-.4.4-1 0-1.4L11.4 0z"></path>
                                                    </svg>
                                                    <div>One-time</div>
                                                </div>
                                            </td>
                                            <td class="vi wy w_ vo lm of">
                                                <div class="fm">
                                                    <button class="gq xv rounded-full">
                                                        <span class="d">Edit</span>
                                                        <svg class="os sf du" viewBox="0 0 32 32">
                                                            <path d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z"></path>
                                                        </svg>
                                                    </button>
                                                    <button class="gq xv rounded-full">
                                                        <span class="d">Download</span>
                                                        <svg class="os sf du" viewBox="0 0 32 32">
                                                            <path d="M16 20c.3 0 .5-.1.7-.3l5.7-5.7-1.4-1.4-4 4V8h-2v8.6l-4-4L9.6 14l5.7 5.7c.2.2.4.3.7.3zM9 22h14v2H9z"></path>
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
                                                <div class="gp yv">#143567</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gp yn">$129.00</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="inline-flex gp hb ya rounded-full gn vp vd">Due</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gp text-slate-800">Manuel Garbaya</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div>04/07/2021</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div>-</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="flex items-center">
                                                    <svg class="oo sl du gq ub mr-2" viewBox="0 0 16 16">
                                                        <path d="M4.3 4.5c1.9-1.9 5.1-1.9 7 0 .7.7 1.2 1.7 1.4 2.7l2-.3c-.2-1.5-.9-2.8-1.9-3.8C10.1.4 5.7.4 2.9 3.1L.7.9 0 7.3l6.4-.7-2.1-2.1zM15.6 8.7l-6.4.7 2.1 2.1c-1.9 1.9-5.1 1.9-7 0-.7-.7-1.2-1.7-1.4-2.7l-2 .3c.2 1.5.9 2.8 1.9 3.8 1.4 1.4 3.1 2 4.9 2 1.8 0 3.6-.7 4.9-2l2.2 2.2.8-6.4z"></path>
                                                    </svg>
                                                    <div>Subscription</div>
                                                </div>
                                            </td>
                                            <td class="vi wy w_ vo lm of">
                                                <div class="fm">
                                                    <button class="gq xv rounded-full">
                                                        <span class="d">Edit</span>
                                                        <svg class="os sf du" viewBox="0 0 32 32">
                                                            <path d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z"></path>
                                                        </svg>
                                                    </button>
                                                    <button class="gq xv rounded-full">
                                                        <span class="d">Download</span>
                                                        <svg class="os sf du" viewBox="0 0 32 32">
                                                            <path d="M16 20c.3 0 .5-.1.7-.3l5.7-5.7-1.4-1.4-4 4V8h-2v8.6l-4-4L9.6 14l5.7 5.7c.2.2.4.3.7.3zM9 22h14v2H9z"></path>
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
                                                <div class="gp yv">#143636</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gp yn">$129.00</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="inline-flex gp hb ya rounded-full gn vp vd">Due</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gp text-slate-800">Cool Robot</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div>04/07/2021</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div>-</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="flex items-center">
                                                    <svg class="oo sl du gq ub mr-2" viewBox="0 0 16 16">
                                                        <path d="M4.3 4.5c1.9-1.9 5.1-1.9 7 0 .7.7 1.2 1.7 1.4 2.7l2-.3c-.2-1.5-.9-2.8-1.9-3.8C10.1.4 5.7.4 2.9 3.1L.7.9 0 7.3l6.4-.7-2.1-2.1zM15.6 8.7l-6.4.7 2.1 2.1c-1.9 1.9-5.1 1.9-7 0-.7-.7-1.2-1.7-1.4-2.7l-2 .3c.2 1.5.9 2.8 1.9 3.8 1.4 1.4 3.1 2 4.9 2 1.8 0 3.6-.7 4.9-2l2.2 2.2.8-6.4z"></path>
                                                    </svg>
                                                    <div>Subscription</div>
                                                </div>
                                            </td>
                                            <td class="vi wy w_ vo lm of">
                                                <div class="fm">
                                                    <button class="gq xv rounded-full">
                                                        <span class="d">Edit</span>
                                                        <svg class="os sf du" viewBox="0 0 32 32">
                                                            <path d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z"></path>
                                                        </svg>
                                                    </button>
                                                    <button class="gq xv rounded-full">
                                                        <span class="d">Download</span>
                                                        <svg class="os sf du" viewBox="0 0 32 32">
                                                            <path d="M16 20c.3 0 .5-.1.7-.3l5.7-5.7-1.4-1.4-4 4V8h-2v8.6l-4-4L9.6 14l5.7 5.7c.2.2.4.3.7.3zM9 22h14v2H9z"></path>
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
                                                <div class="gp yv">#143535</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gp yt">$129.00</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="inline-flex gp hc ys rounded-full gn vp vd">Paid</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gp text-slate-800">Mark Cameron</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div>04/07/2021</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div>09/07/2021</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="flex items-center">
                                                    <svg class="oo sl du gq ub mr-2" viewBox="0 0 16 16">
                                                        <path d="M11.4 0L10 1.4l2 2H8.4c-2.8 0-5 2.2-5 5V12l-2-2L0 11.4l3.7 3.7c.2.2.4.3.7.3.3 0 .5-.1.7-.3l3.7-3.7L7.4 10l-2 2V8.4c0-1.7 1.3-3 3-3H12l-2 2 1.4 1.4 3.7-3.7c.4-.4.4-1 0-1.4L11.4 0z"></path>
                                                    </svg>
                                                    <div>One-time</div>
                                                </div>
                                            </td>
                                            <td class="vi wy w_ vo lm of">
                                                <div class="fm">
                                                    <button class="gq xv rounded-full">
                                                        <span class="d">Edit</span>
                                                        <svg class="os sf du" viewBox="0 0 32 32">
                                                            <path d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z"></path>
                                                        </svg>
                                                    </button>
                                                    <button class="gq xv rounded-full">
                                                        <span class="d">Download</span>
                                                        <svg class="os sf du" viewBox="0 0 32 32">
                                                            <path d="M16 20c.3 0 .5-.1.7-.3l5.7-5.7-1.4-1.4-4 4V8h-2v8.6l-4-4L9.6 14l5.7 5.7c.2.2.4.3.7.3zM9 22h14v2H9z"></path>
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
                                                <div class="gp yv">#143523</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gp yt">$69.00</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="inline-flex gp hc ys rounded-full gn vp vd">Paid</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gp text-slate-800">Glenn Thomas</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div>01/07/2021</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div>01/07/2021</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="flex items-center">
                                                    <svg class="oo sl du gq ub mr-2" viewBox="0 0 16 16">
                                                        <path d="M11.4 0L10 1.4l2 2H8.4c-2.8 0-5 2.2-5 5V12l-2-2L0 11.4l3.7 3.7c.2.2.4.3.7.3.3 0 .5-.1.7-.3l3.7-3.7L7.4 10l-2 2V8.4c0-1.7 1.3-3 3-3H12l-2 2 1.4 1.4 3.7-3.7c.4-.4.4-1 0-1.4L11.4 0z"></path>
                                                    </svg>
                                                    <div>One-time</div>
                                                </div>
                                            </td>
                                            <td class="vi wy w_ vo lm of">
                                                <div class="fm">
                                                    <button class="gq xv rounded-full">
                                                        <span class="d">Edit</span>
                                                        <svg class="os sf du" viewBox="0 0 32 32">
                                                            <path d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z"></path>
                                                        </svg>
                                                    </button>
                                                    <button class="gq xv rounded-full">
                                                        <span class="d">Download</span>
                                                        <svg class="os sf du" viewBox="0 0 32 32">
                                                            <path d="M16 20c.3 0 .5-.1.7-.3l5.7-5.7-1.4-1.4-4 4V8h-2v8.6l-4-4L9.6 14l5.7 5.7c.2.2.4.3.7.3zM9 22h14v2H9z"></path>
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
                                                <div class="gp yv">#143567</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gp yl">$129.00</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="inline-flex gp hf yl rounded-full gn vp vd">Overdue</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gp text-slate-800">Dominik Lamakani</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div>22/06/2021</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div>-</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="flex items-center">
                                                    <svg class="oo sl du gq ub mr-2" viewBox="0 0 16 16">
                                                        <path d="M4.3 4.5c1.9-1.9 5.1-1.9 7 0 .7.7 1.2 1.7 1.4 2.7l2-.3c-.2-1.5-.9-2.8-1.9-3.8C10.1.4 5.7.4 2.9 3.1L.7.9 0 7.3l6.4-.7-2.1-2.1zM15.6 8.7l-6.4.7 2.1 2.1c-1.9 1.9-5.1 1.9-7 0-.7-.7-1.2-1.7-1.4-2.7l-2 .3c.2 1.5.9 2.8 1.9 3.8 1.4 1.4 3.1 2 4.9 2 1.8 0 3.6-.7 4.9-2l2.2 2.2.8-6.4z"></path>
                                                    </svg>
                                                    <div>Subscription</div>
                                                </div>
                                            </td>
                                            <td class="vi wy w_ vo lm of">
                                                <div class="fm">
                                                    <button class="gq xv rounded-full">
                                                        <span class="d">Edit</span>
                                                        <svg class="os sf du" viewBox="0 0 32 32">
                                                            <path d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z"></path>
                                                        </svg>
                                                    </button>
                                                    <button class="gq xv rounded-full">
                                                        <span class="d">Download</span>
                                                        <svg class="os sf du" viewBox="0 0 32 32">
                                                            <path d="M16 20c.3 0 .5-.1.7-.3l5.7-5.7-1.4-1.4-4 4V8h-2v8.6l-4-4L9.6 14l5.7 5.7c.2.2.4.3.7.3zM9 22h14v2H9z"></path>
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
                                                <div class="gp yv">#143599</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gp yt">$89.00</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="inline-flex gp hc ys rounded-full gn vp vd">Paid</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gp text-slate-800">Brian Halligan</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div>21/06/2021</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div>29/06/2021</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="flex items-center">
                                                    <svg class="oo sl du gq ub mr-2" viewBox="0 0 16 16">
                                                        <path d="M11.4 0L10 1.4l2 2H8.4c-2.8 0-5 2.2-5 5V12l-2-2L0 11.4l3.7 3.7c.2.2.4.3.7.3.3 0 .5-.1.7-.3l3.7-3.7L7.4 10l-2 2V8.4c0-1.7 1.3-3 3-3H12l-2 2 1.4 1.4 3.7-3.7c.4-.4.4-1 0-1.4L11.4 0z"></path>
                                                    </svg>
                                                    <div>One-time</div>
                                                </div>
                                            </td>
                                            <td class="vi wy w_ vo lm of">
                                                <div class="fm">
                                                    <button class="gq xv rounded-full">
                                                        <span class="d">Edit</span>
                                                        <svg class="os sf du" viewBox="0 0 32 32">
                                                            <path d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z"></path>
                                                        </svg>
                                                    </button>
                                                    <button class="gq xv rounded-full">
                                                        <span class="d">Download</span>
                                                        <svg class="os sf du" viewBox="0 0 32 32">
                                                            <path d="M16 20c.3 0 .5-.1.7-.3l5.7-5.7-1.4-1.4-4 4V8h-2v8.6l-4-4L9.6 14l5.7 5.7c.2.2.4.3.7.3zM9 22h14v2H9z"></path>
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
                                                <div class="gp yv">#143262</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gp yn">$129.00</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="inline-flex gp hb ya rounded-full gn vp vd">Due</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gp text-slate-800">Carolyn McNeail</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div>17/06/2021</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div>-</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="flex items-center">
                                                    <svg class="oo sl du gq ub mr-2" viewBox="0 0 16 16">
                                                        <path d="M4.3 4.5c1.9-1.9 5.1-1.9 7 0 .7.7 1.2 1.7 1.4 2.7l2-.3c-.2-1.5-.9-2.8-1.9-3.8C10.1.4 5.7.4 2.9 3.1L.7.9 0 7.3l6.4-.7-2.1-2.1zM15.6 8.7l-6.4.7 2.1 2.1c-1.9 1.9-5.1 1.9-7 0-.7-.7-1.2-1.7-1.4-2.7l-2 .3c.2 1.5.9 2.8 1.9 3.8 1.4 1.4 3.1 2 4.9 2 1.8 0 3.6-.7 4.9-2l2.2 2.2.8-6.4z"></path>
                                                    </svg>
                                                    <div>Subscription</div>
                                                </div>
                                            </td>
                                            <td class="vi wy w_ vo lm of">
                                                <div class="fm">
                                                    <button class="gq xv rounded-full">
                                                        <span class="d">Edit</span>
                                                        <svg class="os sf du" viewBox="0 0 32 32">
                                                            <path d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z"></path>
                                                        </svg>
                                                    </button>
                                                    <button class="gq xv rounded-full">
                                                        <span class="d">Download</span>
                                                        <svg class="os sf du" viewBox="0 0 32 32">
                                                            <path d="M16 20c.3 0 .5-.1.7-.3l5.7-5.7-1.4-1.4-4 4V8h-2v8.6l-4-4L9.6 14l5.7 5.7c.2.2.4.3.7.3zM9 22h14v2H9z"></path>
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
                                }
                            }))
                        })
                    </script>
                    
                    <!-- Pagination -->
                    <div class="flex ak ja jc jd">
                        <nav class="ri _y _f" role="navigation" aria-label="Navigation">
                            <ul class="flex justify-center">
                                <li class="ml-3 first--ml-0">
                                    <a class="btn bg-white border-slate-200 yf af" href="#0" disabled="">&lt;- Previous</a>
                                </li>
                                <li class="ml-3 first--ml-0">
                                    <a class="btn bg-white border-slate-200 hover--border-slate-300 text-indigo-500" href="#0">Next -&gt;</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="text-sm text-slate-500 gn qe">
                            Showing <span class="gp g_">1</span> to <span class="gp g_">10</span> of <span class="gp g_">467</span> results
                        </div>
                    </div>

                </div>