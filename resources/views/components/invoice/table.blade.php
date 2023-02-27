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