<div id="messages-sidebar" class="g t_ k te ou zt qo qf ql ih za wn wr wu translate-x-0" :class="msgSidebarOpen ? 'translate-x-0' : '-translate-x-full'">
    <div class="b tm bg-white lc ll l ub ca border-slate-200 zo tny sq">

        <!-- #Marketing group -->
        <div>
            <!-- Group header -->
            <div class="b k tk">
                <div class="flex items-center bg-white cs border-slate-200 vc sa">
                    <div class="ou flex items-center fe">
                        <!-- Channel menu -->
                        <div class="y" x-data="{ open: false }">
                            <button class="uw flex items-center ld" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open" aria-expanded="false">
                                <img class="os sf rounded-full mr-2" src="{{ asset('images/user-avatar-32.png') }}" width="32" height="32" alt="Group 01">
                                <div class="ld">
                                    <span class="gh text-slate-800">#Marketing</span>
                                </div>
                                <svg class="w-3 h-3 ub nz du gq" viewBox="0 0 12 12">
                                    <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                </svg>
                            </button>
                            <div class="uk tk g z x ur bg-white border border-slate-200 va rounded bd la re" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="wt wa wr au" x-transition:enter-start="opacity-0 uq" x-transition:enter-end="ba uj" x-transition:leave="wt wa wr" x-transition:leave-start="ba" x-transition:leave-end="opacity-0" style="display: none;">
                                <ul>
                                    <li>
                                        <a class="gp text-sm g_ xg block va vn" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                            <div class="flex items-center fe">
                                                <div class="uw flex items-center ld">
                                                    <img class="og sw rounded-full mr-2" src="{{ asset('images/channel-01.png') }}" width="28" height="28" alt="Channel 01">
                                                    <div class="ld">#Marketing</div>
                                                </div>
                                                <svg class="w-3 h-3 ub du text-indigo-500 nz" viewBox="0 0 12 12">
                                                    <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                                </svg>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="gp text-sm g_ xg block va vn" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                            <div class="flex items-center fe">
                                                <div class="uw flex items-center ld">
                                                    <img class="og sw rounded-full mr-2" src="./images/channel-02.png" width="28" height="28" alt="Channel 02">
                                                    <div class="ld">#Developing</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="gp text-sm g_ xg block va vn" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                            <div class="flex items-center fe">
                                                <div class="uw flex items-center ld">
                                                    <img class="og sw rounded-full mr-2" src="./images/channel-03.png" width="28" height="28" alt="Channel 03">
                                                    <div class="ld">#ProductSupport</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Edit button -->
                        <button class="ve ub rounded border border-slate-200 hover--border-slate-300 bv nq">
                            <svg class="oo sl du text-slate-500" viewBox="0 0 16 16">
                                <path d="M11.7.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM4.6 14H2v-2.6l6-6L10.6 8l-6 6zM12 6.6L9.4 4 11 2.4 13.6 5 12 6.6z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Group body -->
            <div class="vc vu">
                <!-- Search form -->
                <form class="y">
                    <label for="msg-search" class="d">Search</label>
                    <input id="msg-search" class="s ou me xq" type="search" placeholder="Search…">
                    <button class="g w j kk" type="submit" aria-label="Search">
                        <svg class="oo sl ub du gq kj ml-3 mr-2" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
                            <path d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
                        </svg>
                    </button>
                </form>
                <!-- Direct messages -->
                <div class="io">
                    <div class="go gh gq gv ro">Direct messages</div>
                    <ul class="rh">
                        <li class="nv">
                            <button class="flex items-center fe ou dx rounded hl" @click="msgSidebarOpen = false; $refs.contentarea.scrollTop = 99999999;">
                                <div class="flex items-center ld">
                                    <img class="os sf rounded-full mr-2" src="{{ asset('images/user-36-01.jpg') }}" width="32" height="32" alt="User 01">
                                    <div class="ld">
                                        <span class="text-sm gp text-slate-800">Dominik Lamakani</span>
                                    </div>
                                </div>
                                <div class="flex items-center nq">
                                    <div class="go inline-flex gp pi ye rounded-full gn gw vi">2</div>
                                </div>
                            </button>
                        </li>
                        <li class="nv">
                            <button class="flex items-center fe ou dx rounded" @click="msgSidebarOpen = false; $refs.contentarea.scrollTop = 99999999;">
                                <div class="flex items-center ld">
                                    <img class="os sf rounded-full mr-2" src="{{ asset('images/user-36-02.jpg') }}" width="32" height="32" alt="User 02">
                                    <div class="ld">
                                        <span class="text-sm gp text-slate-800">Tisha Yanchev</span>
                                    </div>
                                </div>
                                <div class="flex items-center nq">
                                    <div class="go inline-flex gp pi ye rounded-full gn gw vi">4</div>
                                </div>
                            </button>
                        </li>
                        <li class="nv">
                            <button class="flex items-center fe ou dx rounded" @click="msgSidebarOpen = false; $refs.contentarea.scrollTop = 99999999;">
                                <div class="flex items-center ld">
                                    <img class="os sf rounded-full mr-2" src="{{ asset('images/user-36-09.jpg') }}" width="32" height="32" alt="User 03">
                                    <div class="ld">
                                        <span class="text-sm gp text-slate-800">Jerzy Wierzy</span>
                                    </div>
                                </div>
                                <div class="flex items-center nq">
                                    <img class="ox su rounded-full ub" src="{{ asset('images/user-36-09.jpg') }}" width="20" height="20" alt="User 03">
                                </div>
                            </button>
                        </li>
                        <li class="nv">
                            <button class="flex items-center fe ou dx rounded" @click="msgSidebarOpen = false; $refs.contentarea.scrollTop = 99999999;">
                                <div class="flex items-center ld">
                                    <img class="os sf rounded-full mr-2" src="{{ asset('images/user-36-04.jpg') }}" width="32" height="32" alt="User 04">
                                    <div class="ld">
                                        <span class="text-sm gp text-slate-800">Adrian Przetocki</span>
                                    </div>
                                </div>
                                <div class="flex items-center nq">
                                    <svg class="w-3 h-3 ub du gq" viewBox="0 0 12 12">
                                        <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"></path>
                                    </svg>
                                </div>
                            </button>
                        </li>
                        <li class="nv">
                            <button class="flex items-center fe ou dx rounded" @click="msgSidebarOpen = false; $refs.contentarea.scrollTop = 99999999;">
                                <div class="flex items-center ld">
                                    <img class="os sf rounded-full mr-2" src="{{ asset('images/user-36-05.jpg') }}" width="32" height="32" alt="User 05">
                                    <div class="ld">
                                        <span class="text-sm gp text-slate-800">Simona Lürwer</span>
                                    </div>
                                </div>
                                <div class="flex items-center nq">
                                    <svg class="w-3 h-3 ub du gq" viewBox="0 0 12 12">
                                        <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"></path>
                                    </svg>
                                </div>
                            </button>
                        </li>
                        <li class="nv">
                            <button class="flex items-center fe ou dx rounded" @click="msgSidebarOpen = false; $refs.contentarea.scrollTop = 99999999;">
                                <div class="flex items-center ld">
                                    <img class="os sf rounded-full mr-2" src="{{ asset('images/user-36-06.jpg') }}" width="32" height="32" alt="User 06">
                                    <div class="ld">
                                        <span class="text-sm gp text-slate-800">Mary Roszczewski</span>
                                    </div>
                                </div>
                                <div class="flex items-center nq">
                                    <svg class="w-3 h-3 ub du gq" viewBox="0 0 12 12">
                                        <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"></path>
                                    </svg>
                                </div>
                            </button>
                        </li>
                    </ul>
                </div>
                <!-- Channels -->
                <div class="io">
                    <div class="go gh gq gv ro">Channels</div>
                    <ul class="rh">
                        <li class="nv">
                            <button class="flex items-center fe ou dx rounded" @click="msgSidebarOpen = false; $refs.contentarea.scrollTop = 99999999;">
                                <div class="flex items-center">
                                    <div class="ld">
                                        <span class="text-sm gp text-slate-800">#New Leads</span>
                                    </div>
                                </div>
                                <div class="flex items-center nq">
                                    <div class="w-2 h-2 pi rounded-full"></div>
                                </div>
                            </button>
                        </li>
                        <li class="nv">
                            <button class="flex items-center fe ou dx rounded" @click="msgSidebarOpen = false; $refs.contentarea.scrollTop = 99999999;">
                                <div class="flex items-center ld">
                                    <div class="ld">
                                        <span class="text-sm gp text-slate-800">#Development Team</span>
                                    </div>
                                </div>
                            </button>
                        </li>
                        <li class="nv">
                            <button class="flex items-center fe ou dx rounded" @click="msgSidebarOpen = false; $refs.contentarea.scrollTop = 99999999;">
                                <div class="flex items-center ld">
                                    <div class="ld">
                                        <span class="text-sm gp text-slate-800">#Product Tips</span>
                                    </div>
                                </div>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>