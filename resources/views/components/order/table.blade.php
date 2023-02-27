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