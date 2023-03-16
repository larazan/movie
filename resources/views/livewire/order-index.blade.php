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
                            <button class="btn ho xi ye">
                                <svg class="oo sl du bf ub" viewBox="0 0 16 16">
                                    <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                                </svg>
                                <span class="hidden trm nq">Add Customer</span>
                            </button>                            
                            
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
                                                <div class="gh gt">Order</div>
                                            </th>
                                            <th class="vi wy w_ vo lm">
                                                <div class="gh gt">Date</div>
                                            </th>
                                            <th class="vi wy w_ vo lm">
                                                <div class="gh gt">Customer</div>
                                            </th>
                                            <th class="vi wy w_ vo lm">
                                                <div class="gh gt">Total</div>
                                            </th>
                                            <th class="vi wy w_ vo lm">
                                                <div class="gh gt">Status</div>
                                            </th>
                                            <th class="vi wy w_ vo lm">
                                                <div class="gh">Items</div>
                                            </th>
                                            <th class="vi wy w_ vo lm">
                                                <div class="gh gt">Location</div>
                                            </th>
                                            <th class="vi wy w_ vo lm">
                                                <div class="gh gt">Payment type</div>
                                            </th>
                                            <th class="vi wy w_ vo lm">
                                                <span class="d">Menu</span>
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
                                                    <div class="od sy ub flex items-center justify-center hi rounded-full mr-2 _b">
                                                        <img class="nz" src="./images/icon-01.svg" width="20" height="20" alt="Icon 01">
                                                    </div>
                                                    <div class="gp yv">#143567</div>
                                                </div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div>22/01/2021</div>
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
                                                <div class="gn">1</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gt">🇨🇳 Shanghai, CN</div>
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
                                                <div class="flex items-center">
                                                    <button class="gq xv au" :class="{ 'as': open }" @click.prevent="open = !open" :aria-expanded="open" aria-controls="description-01" aria-expanded="false">
                                                        <span class="d">Menu</span>
                                                        <svg class="os sf du" viewBox="0 0 32 32">
                                                            <path d="M16 20l-5.4-5.4 1.4-1.4 4 4 4-4 1.4 1.4z"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <!--
                                        Example of content revealing when clicking the button on the right side:
                                        Note that you must set a "colspan" attribute on the <td> element,
                                        and it should match the number of columns in your table
                                        -->
                                        <tr id="description-01" role="region" x-show="open" style="display: none;">
                                            <td colspan="10" class="vi wy w_ vo">
                                                <div class="flex items-center hp dk rz">
                                                    <svg class="oo sl ub du gq mr-2">
                                                        <path d="M1 16h3c.3 0 .5-.1.7-.3l11-11c.4-.4.4-1 0-1.4l-3-3c-.4-.4-1-.4-1.4 0l-11 11c-.2.2-.3.4-.3.7v3c0 .6.4 1 1 1zm1-3.6l10-10L13.6 4l-10 10H2v-1.6z"></path>
                                                    </svg>
                                                    <div class="gm">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
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
                                                    <div class="od sy ub flex items-center justify-center hi rounded-full mr-2 _b">
                                                        <img class="nz" src="./images/icon-01.svg" width="20" height="20" alt="Icon 01">
                                                    </div>
                                                    <div class="gp yv">#227799</div>
                                                </div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div>22/01/2021</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gp text-slate-800">Mark Cameron</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gt gp yt">$89.00</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="inline-flex gp hc ys rounded-full gn vp vd">Approved</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gn">2</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gt">🇲🇽 Mexico City, MX</div>
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
                                                <div class="flex items-center">
                                                    <button class="gq xv au" :class="{ 'as': open }" @click.prevent="open = !open" :aria-expanded="open" aria-controls="description-02" aria-expanded="false">
                                                        <span class="d">Menu</span>
                                                        <svg class="os sf du" viewBox="0 0 32 32">
                                                            <path d="M16 20l-5.4-5.4 1.4-1.4 4 4 4-4 1.4 1.4z"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <!--
                                        Example of content revealing when clicking the button on the right side:
                                        Note that you must set a "colspan" attribute on the <td> element,
                                        and it should match the number of columns in your table
                                        -->
                                        <tr id="description-02" role="region" x-show="open" style="display: none;">
                                            <td colspan="10" class="vi wy w_ vo">
                                                <div class="flex items-center hp dk rz">
                                                    <svg class="oo sl ub du gq mr-2">
                                                        <path d="M1 16h3c.3 0 .5-.1.7-.3l11-11c.4-.4.4-1 0-1.4l-3-3c-.4-.4-1-.4-1.4 0l-11 11c-.2.2-.3.4-.3.7v3c0 .6.4 1 1 1zm1-3.6l10-10L13.6 4l-10 10H2v-1.6z"></path>
                                                    </svg>
                                                    <div class="gm">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
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
                                                    <div class="od sy ub flex items-center justify-center hi rounded-full mr-2 _b">
                                                        <img class="nz" src="./images/icon-02.svg" width="20" height="20" alt="Icon 02">
                                                    </div>
                                                    <div class="gp yv">#143567</div>
                                                </div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div>22/01/2021</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gp text-slate-800">Carolyn McNeail</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gt gp yt">$89.00</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="inline-flex gp hc ys rounded-full gn vp vd">Approved</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gn">2</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gt">🇮🇹 Milan, IT </div>
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
                                                <div class="flex items-center">
                                                    <button class="gq xv au" :class="{ 'as': open }" @click.prevent="open = !open" :aria-expanded="open" aria-controls="description-03" aria-expanded="false">
                                                        <span class="d">Menu</span>
                                                        <svg class="os sf du" viewBox="0 0 32 32">
                                                            <path d="M16 20l-5.4-5.4 1.4-1.4 4 4 4-4 1.4 1.4z"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <!--
                                        Example of content revealing when clicking the button on the right side:
                                        Note that you must set a "colspan" attribute on the <td> element,
                                        and it should match the number of columns in your table
                                        -->
                                        <tr id="description-03" role="region" x-show="open" style="display: none;">
                                            <td colspan="10" class="vi wy w_ vo">
                                                <div class="flex items-center hp dk rz">
                                                    <svg class="oo sl ub du gq mr-2">
                                                        <path d="M1 16h3c.3 0 .5-.1.7-.3l11-11c.4-.4.4-1 0-1.4l-3-3c-.4-.4-1-.4-1.4 0l-11 11c-.2.2-.3.4-.3.7v3c0 .6.4 1 1 1zm1-3.6l10-10L13.6 4l-10 10H2v-1.6z"></path>
                                                    </svg>
                                                    <div class="gm">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
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
                                                    <div class="od sy ub flex items-center justify-center hi rounded-full mr-2 _b">
                                                        <img class="nz" src="./images/icon-01.svg" width="20" height="20" alt="Icon 01">
                                                    </div>
                                                    <div class="gp yv">#664491</div>
                                                </div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div>22/01/2021</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gp text-slate-800">Brian Halligan</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gt gp yt">$59.00</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="inline-flex gp hi text-slate-500 rounded-full gn vp vd">Pending</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gn">1</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gt">🇨🇳 Shanghai, CN</div>
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
                                                <div class="flex items-center">
                                                    <button class="gq xv au" :class="{ 'as': open }" @click.prevent="open = !open" :aria-expanded="open" aria-controls="description-04" aria-expanded="false">
                                                        <span class="d">Menu</span>
                                                        <svg class="os sf du" viewBox="0 0 32 32">
                                                            <path d="M16 20l-5.4-5.4 1.4-1.4 4 4 4-4 1.4 1.4z"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <!--
                                        Example of content revealing when clicking the button on the right side:
                                        Note that you must set a "colspan" attribute on the <td> element,
                                        and it should match the number of columns in your table
                                        -->
                                        <tr id="description-04" role="region" x-show="open" style="display: none;">
                                            <td colspan="10" class="vi wy w_ vo">
                                                <div class="flex items-center hp dk rz">
                                                    <svg class="oo sl ub du gq mr-2">
                                                        <path d="M1 16h3c.3 0 .5-.1.7-.3l11-11c.4-.4.4-1 0-1.4l-3-3c-.4-.4-1-.4-1.4 0l-11 11c-.2.2-.3.4-.3.7v3c0 .6.4 1 1 1zm1-3.6l10-10L13.6 4l-10 10H2v-1.6z"></path>
                                                    </svg>
                                                    <div class="gm">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
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
                                                    <div class="od sy ub flex items-center justify-center hi rounded-full mr-2 _b">
                                                        <img class="nz" src="./images/icon-03.svg" width="20" height="20" alt="Icon 03">
                                                    </div>
                                                    <div class="gp yv">#780044</div>
                                                </div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div>22/01/2021</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gp text-slate-800">Cool Robot</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gt gp yt">$39.00</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="inline-flex gp hb ya rounded-full gn vp vd">Refunded</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gn">1</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gt">🇫🇷 Marseille, FR</div>
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
                                                <div class="flex items-center">
                                                    <button class="gq xv au" :class="{ 'as': open }" @click.prevent="open = !open" :aria-expanded="open" aria-controls="description-05" aria-expanded="false">
                                                        <span class="d">Menu</span>
                                                        <svg class="os sf du" viewBox="0 0 32 32">
                                                            <path d="M16 20l-5.4-5.4 1.4-1.4 4 4 4-4 1.4 1.4z"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <!--
                                        Example of content revealing when clicking the button on the right side:
                                        Note that you must set a "colspan" attribute on the <td> element,
                                        and it should match the number of columns in your table
                                        -->
                                        <tr id="description-05" role="region" x-show="open" style="display: none;">
                                            <td colspan="10" class="vi wy w_ vo">
                                                <div class="flex items-center hp dk rz">
                                                    <svg class="oo sl ub du gq mr-2">
                                                        <path d="M1 16h3c.3 0 .5-.1.7-.3l11-11c.4-.4.4-1 0-1.4l-3-3c-.4-.4-1-.4-1.4 0l-11 11c-.2.2-.3.4-.3.7v3c0 .6.4 1 1 1zm1-3.6l10-10L13.6 4l-10 10H2v-1.6z"></path>
                                                    </svg>
                                                    <div class="gm">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
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
                                                    <div class="od sy ub flex items-center justify-center hi rounded-full mr-2 _b">
                                                        <img class="nz" src="./images/icon-01.svg" width="20" height="20" alt="Icon 01">
                                                    </div>
                                                    <div class="gp yv">#786512</div>
                                                </div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div>21/01/2021</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gp text-slate-800">Sergio Gonnelli</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gt gp yt">$59.00</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="inline-flex gp hc ys rounded-full gn vp vd">Approved</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gn">1</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gt">🇮🇹 Bologna, IT</div>
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
                                                <div class="flex items-center">
                                                    <button class="gq xv au" :class="{ 'as': open }" @click.prevent="open = !open" :aria-expanded="open" aria-controls="description-06" aria-expanded="false">
                                                        <span class="d">Menu</span>
                                                        <svg class="os sf du" viewBox="0 0 32 32">
                                                            <path d="M16 20l-5.4-5.4 1.4-1.4 4 4 4-4 1.4 1.4z"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <!--
                                        Example of content revealing when clicking the button on the right side:
                                        Note that you must set a "colspan" attribute on the <td> element,
                                        and it should match the number of columns in your table
                                        -->
                                        <tr id="description-06" role="region" x-show="open" style="display: none;">
                                            <td colspan="10" class="vi wy w_ vo">
                                                <div class="flex items-center hp dk rz">
                                                    <svg class="oo sl ub du gq mr-2">
                                                        <path d="M1 16h3c.3 0 .5-.1.7-.3l11-11c.4-.4.4-1 0-1.4l-3-3c-.4-.4-1-.4-1.4 0l-11 11c-.2.2-.3.4-.3.7v3c0 .6.4 1 1 1zm1-3.6l10-10L13.6 4l-10 10H2v-1.6z"></path>
                                                    </svg>
                                                    <div class="gm">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
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
                                                    <div class="od sy ub flex items-center justify-center hi rounded-full mr-2 _b">
                                                        <img class="nz" src="./images/icon-03.svg" width="20" height="20" alt="Icon 03">
                                                    </div>
                                                    <div class="gp yv">#664679</div>
                                                </div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div>21/01/2021</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gp text-slate-800">James Gill</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gt gp yt">$89.00</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="inline-flex gp hc ys rounded-full gn vp vd">Approved</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gn">1</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gt">🇫🇷 Paris, FR</div>
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
                                                <div class="flex items-center">
                                                    <button class="gq xv au" :class="{ 'as': open }" @click.prevent="open = !open" :aria-expanded="open" aria-controls="description-07" aria-expanded="false">
                                                        <span class="d">Menu</span>
                                                        <svg class="os sf du" viewBox="0 0 32 32">
                                                            <path d="M16 20l-5.4-5.4 1.4-1.4 4 4 4-4 1.4 1.4z"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <!--
                                        Example of content revealing when clicking the button on the right side:
                                        Note that you must set a "colspan" attribute on the <td> element,
                                        and it should match the number of columns in your table
                                        -->
                                        <tr id="description-07" role="region" x-show="open" style="display: none;">
                                            <td colspan="10" class="vi wy w_ vo">
                                                <div class="flex items-center hp dk rz">
                                                    <svg class="oo sl ub du gq mr-2">
                                                        <path d="M1 16h3c.3 0 .5-.1.7-.3l11-11c.4-.4.4-1 0-1.4l-3-3c-.4-.4-1-.4-1.4 0l-11 11c-.2.2-.3.4-.3.7v3c0 .6.4 1 1 1zm1-3.6l10-10L13.6 4l-10 10H2v-1.6z"></path>
                                                    </svg>
                                                    <div class="gm">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
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
                                                    <div class="od sy ub flex items-center justify-center hi rounded-full mr-2 _b">
                                                        <img class="nz" src="./images/icon-03.svg" width="20" height="20" alt="Icon 03">
                                                    </div>
                                                    <div class="gp yv">#112467</div>
                                                </div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div>21/01/2021</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gp text-slate-800">Alex Brooks</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gt gp yt">$129.00</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="inline-flex gp hc ys rounded-full gn vp vd">Approved</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gn">2</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gt">🇬🇧 London, UK</div>
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
                                                <div class="flex items-center">
                                                    <button class="gq xv au" :class="{ 'as': open }" @click.prevent="open = !open" :aria-expanded="open" aria-controls="description-08" aria-expanded="false">
                                                        <span class="d">Menu</span>
                                                        <svg class="os sf du" viewBox="0 0 32 32">
                                                            <path d="M16 20l-5.4-5.4 1.4-1.4 4 4 4-4 1.4 1.4z"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <!--
                                        Example of content revealing when clicking the button on the right side:
                                        Note that you must set a "colspan" attribute on the <td> element,
                                        and it should match the number of columns in your table
                                        -->
                                        <tr id="description-08" role="region" x-show="open" style="display: none;">
                                            <td colspan="10" class="vi wy w_ vo">
                                                <div class="flex items-center hp dk rz">
                                                    <svg class="oo sl ub du gq mr-2">
                                                        <path d="M1 16h3c.3 0 .5-.1.7-.3l11-11c.4-.4.4-1 0-1.4l-3-3c-.4-.4-1-.4-1.4 0l-11 11c-.2.2-.3.4-.3.7v3c0 .6.4 1 1 1zm1-3.6l10-10L13.6 4l-10 10H2v-1.6z"></path>
                                                    </svg>
                                                    <div class="gm">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
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
                                                    <div class="od sy ub flex items-center justify-center hi rounded-full mr-2 _b">
                                                        <img class="nz" src="./images/icon-02.svg" width="20" height="20" alt="Icon 02">
                                                    </div>
                                                    <div class="gp yv">#379912</div>
                                                </div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div>21/01/2021</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gp text-slate-800">Manuel Garbaya</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gt gp yt">$89.00</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="inline-flex gp hi text-slate-500 rounded-full gn vp vd">Pending</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gn">2</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gt">🇺🇸 New York, USA</div>
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
                                                <div class="flex items-center">
                                                    <button class="gq xv au" :class="{ 'as': open }" @click.prevent="open = !open" :aria-expanded="open" aria-controls="description-09" aria-expanded="false">
                                                        <span class="d">Menu</span>
                                                        <svg class="os sf du" viewBox="0 0 32 32">
                                                            <path d="M16 20l-5.4-5.4 1.4-1.4 4 4 4-4 1.4 1.4z"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <!--
                                        Example of content revealing when clicking the button on the right side:
                                        Note that you must set a "colspan" attribute on the <td> element,
                                        and it should match the number of columns in your table
                                        -->
                                        <tr id="description-09" role="region" x-show="open" style="display: none;">
                                            <td colspan="10" class="vi wy w_ vo">
                                                <div class="flex items-center hp dk rz">
                                                    <svg class="oo sl ub du gq mr-2">
                                                        <path d="M1 16h3c.3 0 .5-.1.7-.3l11-11c.4-.4.4-1 0-1.4l-3-3c-.4-.4-1-.4-1.4 0l-11 11c-.2.2-.3.4-.3.7v3c0 .6.4 1 1 1zm1-3.6l10-10L13.6 4l-10 10H2v-1.6z"></path>
                                                    </svg>
                                                    <div class="gm">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
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
                                                    <div class="od sy ub flex items-center justify-center hi rounded-full mr-2 _b">
                                                        <img class="nz" src="./images/icon-01.svg" width="20" height="20" alt="Icon 01">
                                                    </div>
                                                    <div class="gp yv">#664499</div>
                                                </div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div>21/01/2021</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gp text-slate-800">Glenn Thomas</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gt gp yt">$59.00</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="inline-flex gp hb ya rounded-full gn vp vd">Refunded</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gn">1</div>
                                            </td>
                                            <td class="vi wy w_ vo lm">
                                                <div class="gt">🇬🇧 Sheffield, UK</div>
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
                                                <div class="flex items-center">
                                                    <button class="gq xv au" :class="{ 'as': open }" @click.prevent="open = !open" :aria-expanded="open" aria-controls="description-10" aria-expanded="false">
                                                        <span class="d">Menu</span>
                                                        <svg class="os sf du" viewBox="0 0 32 32">
                                                            <path d="M16 20l-5.4-5.4 1.4-1.4 4 4 4-4 1.4 1.4z"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <!--
                                        Example of content revealing when clicking the button on the right side:
                                        Note that you must set a "colspan" attribute on the <td> element,
                                        and it should match the number of columns in your table
                                        -->
                                        <tr id="description-10" role="region" x-show="open" style="display: none;">
                                            <td colspan="10" class="vi wy w_ vo">
                                                <div class="flex items-center hp dk rz">
                                                    <svg class="oo sl ub du gq mr-2" viewBox="0 0 16 16">
                                                        <path d="M1 16h3c.3 0 .5-.1.7-.3l11-11c.4-.4.4-1 0-1.4l-3-3c-.4-.4-1-.4-1.4 0l-11 11c-.2.2-.3.4-.3.7v3c0 .6.4 1 1 1zm1-3.6l10-10L13.6 4l-10 10H2v-1.6z"></path>
                                                    </svg>
                                                    <div class="gm">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
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