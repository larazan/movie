<div class="uw flex ak za wn wo wu translate-x-0" :class="inboxSidebarOpen ? 'translate-x-1/3' : 'translate-x-0'">

    <!-- Header -->
    <div class="b tm">
        <div class="flex items-center fe hp cs border-slate-200 vs jj tei sa">
            <!-- Buttons on the left side -->
            <div class="flex">
                <!-- Close button -->
                <button class="qz gq xv mr-4" @click.stop="inboxSidebarOpen = !inboxSidebarOpen" aria-controls="inbox-sidebar" :aria-expanded="inboxSidebarOpen" aria-expanded="false">
                    <span class="d">Close sidebar</span>
                    <svg class="oi so du" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z"></path>
                    </svg>
                </button>
                <button class="ve ub rounded bg-white border border-slate-200 hover--border-slate-300 bv nq">
                    <svg class="oo sl du gq" viewBox="0 0 16 16">
                        <path d="M5 7h2v6H5V7zm4 0h2v6H9V7zm3-6v2h4v2h-1v10c0 .6-.4 1-1 1H2c-.6 0-1-.4-1-1V5H0V3h4V1c0-.6.4-1 1-1h6c.6 0 1 .4 1 1zM6 2v1h4V2H6zm7 3H3v9h10V5z"></path>
                    </svg>
                </button>
                <button class="ve ub rounded bg-white border border-slate-200 hover--border-slate-300 bv nq">
                    <svg class="oo sl du yn" viewBox="0 0 16 16">
                        <path d="M10 5.934 8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                    </svg>
                </button>
                <button class="ve ub rounded bg-white border border-slate-200 hover--border-slate-300 bv nq">
                    <svg class="oo sl du gq" viewBox="0 0 16 16">
                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                    </svg>
                </button>
                <button class="ve ub rounded bg-white border border-slate-200 hover--border-slate-300 bv nq">
                    <svg class="oo sl du text-indigo-500" viewBox="0 0 16 16">
                        <path d="M14.3 2.3L5 11.6 1.7 8.3c-.4-.4-1-.4-1.4 0-.4.4-.4 1 0 1.4l4 4c.2.2.4.3.7.3.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4-.4-.4-1-.4-1.4 0z"></path>
                    </svg>
                </button>
            </div>
            <!-- Buttons on the right side -->
            <div class="flex items-center">
                <div class="go mr-1"><span class="gp">10</span> <span class="text-slate-500">of</span> <span class="gp">467</span></div>
                <button class="ve ub rounded bg-white border border-slate-200 hover--border-slate-300 bv nq">
                    <svg class="oo sl du" viewBox="0 0 16 16">
                        <path d="m10 13.4 1.4-1.4-4-4 4-4L10 2.6 4.6 8z"></path>
                    </svg>
                </button>
                <button class="ve ub rounded bg-white border border-slate-200 hover--border-slate-300 bv nq">
                    <svg class="oo sl du" viewBox="0 0 16 16">
                        <path d="M7 13.4 5.6 12l4-4-4-4L7 2.6 12.4 8z"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Body -->
    <div class="uw vs jj tei vu">

        <!-- Mail subject -->
        <header class="je jf jd ri">
            <h1 class="gf gb text-slate-800 font-bold rt _y nq">Chill your mind with this amazing offer 🎉</h1>
            <button class="go inline-flex gp hh yc rounded-full gn vp vf lm">Exciting news</button>
        </header>

        <!-- Messages box -->
        <div class="bg-white bd rounded-sm border border-slate-200 vm le lr">

            <!-- Mail -->
            <div class="vh" x-data="{ open: false }">
                <!-- Header -->
                <header class="flex aj">
                    <!-- Avatar -->
                    <img class="rounded-full ub ra" src="{{ asset('images/user-36-01.jpg') }}" width="40" height="40" alt="User 11">
                    <!-- Meta -->
                    <div class="uw">
                        <div class="je aj fe n_">
                            <!-- Message author -->
                            <div class="tnp items-center ru _y">
                                <button class="text-sm gh text-slate-800 gt ld" @click.prevent="open = !open">Dominik Lamakani</button>
                                <div class="text-sm gq hidden tnh nl" x-show="open" style="display: none;">·</div>
                                <div class="go" x-show="open" style="display: none;">dominiklama@acme.com</div>
                            </div>
                            <!-- Date -->
                            <div class="go gp text-slate-500 lm ru _y">Sep 3, 3:18 PM</div>
                        </div>
                        <!-- To -->
                        <div class="go gp text-slate-500" x-show="open" style="display: none;">To me, Carolyn</div>
                        <!-- Excerpt -->
                        <div class="text-sm" x-show="!open">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore…</div>
                    </div>
                </header>
                <!-- Body -->
                <div class="text-sm text-slate-800 io fb" x-show="open" style="display: none;">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <p>Consectetur adipiscing elit, sed do eiusmod aliqua? Check below:</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    <p>Cheers,</p>
                    <p class="gp">Dominik Lamakani</p>
                </div>
            </div>

            <!-- Mail -->
            <div class="vh" x-data="{ open: false }">
                <!-- Header -->
                <header class="flex aj">
                    <!-- Avatar -->
                    <img class="rounded-full ub ra" src="{{ asset('images/user-36-02.jpg') }}" width="40" height="40" alt="User 11">
                    <!-- Meta -->
                    <div class="uw">
                        <div class="je aj fe n_">
                            <!-- Message author -->
                            <div class="tnp items-center ru _y">
                                <button class="text-sm gh text-slate-800 gt ld" @click.prevent="open = !open">Acme Inc.</button>
                                <div class="text-sm gq hidden tnh nl" x-show="open" style="display: none;">·</div>
                                <div class="go" x-show="open" style="display: none;">acmeinc@acme.com</div>
                            </div>
                            <!-- Date -->
                            <div class="go gp text-slate-500 lm ru _y">Sep 3, 3:18 PM</div>
                        </div>
                        <!-- To -->
                        <div class="go gp text-slate-500" x-show="open" style="display: none;">To me, Dominik</div>
                        <!-- Excerpt -->
                        <div class="text-sm" x-show="!open">Dominik, lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt…</div>
                    </div>
                </header>
                <!-- Body -->
                <div class="text-sm text-slate-800 io fb" x-show="open" style="display: none;">
                    <p>Dominik, lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <p>Consectetur adipiscing elit, sed do eiusmod aliqua? Check below:</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    <p>Cheers,</p>
                    <p class="gp">Acme Inc.</p>
                </div>
            </div>

            <!-- Mail -->
            <div class="vh" x-data="{ open: true }">
                <!-- Header -->
                <header class="flex aj">
                    <!-- Avatar -->
                    <img class="rounded-full ub ra" src="{{ asset('images/user-36-04.jpg') }}" width="40" height="40" alt="User 11">
                    <!-- Meta -->
                    <div class="uw">
                        <div class="je aj fe n_">
                            <!-- Message author -->
                            <div class="tnp items-center ru _y">
                                <button class="text-sm gh text-slate-800 gt ld" @click.prevent="open = !open">Dominik Lamakani</button>
                                <div class="text-sm gq hidden tnh nl" x-show="open">·</div>
                                <div class="go" x-show="open">dominiklama@acme.com</div>
                            </div>
                            <!-- Date -->
                            <div class="go gp text-slate-500 lm ru _y">Sep 4, 3:37 AM</div>
                        </div>
                        <!-- To -->
                        <div class="go gp text-slate-500" x-show="open">To me, Carolyn</div>
                        <!-- Excerpt -->
                        <div class="text-sm" x-show="!open" style="display: none;">Hey Acme 👋 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt…</div>
                    </div>
                </header>
                <!-- Body -->
                <div class="text-sm text-slate-800 io fb" x-show="open">
                    <p>Hey Acme 👋</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis <span class="br">nostrud exercitation ullamco</span> laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <p>Consectetur adipiscing elit, sed do eiusmod <a class="gp text-indigo-500 xh" href="#0">tempor magna</a> aliqua? Check below:</p>
                    <p>
                        <img src="{{ asset('images/inbox-image.jpg') }}" width="320" height="190" alt="Inbox image">
                    </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    <p>Cheers,</p>
                    <p class="gp">Dominik Lamakani</p>
                </div>
            </div>

        </div>

    </div>

    <!-- Footer -->
    <div class="b te">
        <div class="flex items-center fe bg-white co border-slate-200 vs jj tei sa">
            <!-- Plus button -->
            <button class="ub gq xv ra">
                <span class="d">Add</span>
                <svg class="oi so du" viewBox="0 0 24 24">
                    <path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12C23.98 5.38 18.62.02 12 0zm6 13h-5v5h-2v-5H6v-2h5V6h2v5h5v2z"></path>
                </svg>
            </button>
            <!-- Message input -->
            <form class="uw flex">
                <div class="uw ra">
                    <label for="message-input" class="d">Type a message</label>
                    <input id="message-input" class="s ou hi cp ki xq" type="text" placeholder="Aa">
                </div>
                <button type="submit" class="btn ho xi ye lm">Send -&gt;</button>
            </form>
        </div>
    </div>

</div>