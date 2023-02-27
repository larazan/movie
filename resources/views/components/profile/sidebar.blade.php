<div id="profile-sidebar" class="g t_ k te ou zt qo qf ql ih za wn wr wu -translate-x-full" :class="profileSidebarOpen ? 'translate-x-0' : '-translate-x-full'">
    <div class="b tm bg-white lc ll l ub ca border-slate-200 zo tny sq">

        <!-- Profile group -->
        <div>
            <!-- Group header -->
            <div class="b k tk">
                <div class="flex items-center bg-white cs border-slate-200 vc sa">
                    <div class="ou flex items-center fe">
                        <!-- Profile image -->
                        <div class="y">
                            <div class="uw flex items-center ld">
                                <img class="os sf rounded-full mr-2" src="./images/user-avatar-32.png" width="32" height="32" alt="Group 01">
                                <div class="ld">
                                    <span class="gh text-slate-800">Acme Inc.</span>
                                </div>
                            </div>
                        </div>
                        <!-- Add button -->
                        <button class="ve ub rounded border border-slate-200 hover--border-slate-300 bv nq">
                            <svg class="oo sl du text-indigo-500" viewBox="0 0 16 16">
                                <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1Z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Group body -->
            <div class="vc vu">
                <!-- Search form -->
                <form class="y">
                    <label for="profile-search" class="d">Search</label>
                    <input id="profile-search" class="s ou me xq" type="search" placeholder="Search…">
                    <button class="g w j kk" type="submit" aria-label="Search">
                        <svg class="oo sl ub du gq kj ml-3 mr-2" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
                            <path d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
                        </svg>
                    </button>
                </form>
                <!-- Team members -->
                <div class="io">
                    <div class="go gh gq gv ro">Team members</div>
                    <ul class="rh">
                        <li class="nv">
                            <button class="ou dx rounded hl" @click="profileSidebarOpen = false">
                                <div class="flex items-center">
                                    <div class="y mr-2">
                                        <img class="os sf rounded-full" src="./images/user-36-08.jpg" width="32" height="32" alt="User 08">
                                    </div>
                                    <div class="ld">
                                        <span class="text-sm gp text-slate-800">Carolyn McNeail</span>
                                    </div>
                                </div>
                            </button>
                        </li>
                        <li class="nv">
                            <button class="ou dx rounded" @click="profileSidebarOpen = false">
                                <div class="flex items-center ld">
                                    <div class="y mr-2">
                                        <img class="os sf rounded-full" src="./images/user-36-06.jpg" width="32" height="32" alt="User 06">
                                    </div>
                                    <div class="ld">
                                        <span class="text-sm gp text-slate-800">Mary Roszczewski</span>
                                    </div>
                                </div>
                            </button>
                        </li>
                        <li class="nv">
                            <button class="ou dx rounded" @click="profileSidebarOpen = false">
                                <div class="flex items-center ld">
                                    <div class="y mr-2">
                                        <img class="os sf rounded-full" src="./images/user-36-03.jpg" width="32" height="32" alt="User 03">
                                    </div>
                                    <div class="ld">
                                        <span class="text-sm gp text-slate-800">Jerzy Wierzy</span>
                                    </div>
                                </div>
                            </button>
                        </li>
                        <li class="nv">
                            <button class="ou dx rounded" @click="profileSidebarOpen = false">
                                <div class="flex items-center ld">
                                    <div class="y mr-2">
                                        <img class="os sf rounded-full" src="./images/user-36-02.jpg" width="32" height="32" alt="User 02">
                                        <div class="g k q oa sc hd cr cc rounded-full"></div>
                                    </div>
                                    <div class="ld">
                                        <span class="text-sm gp text-slate-800">Tisha Yanchev</span>
                                    </div>
                                </div>
                            </button>
                        </li>
                        <li class="nv">
                            <button class="ou dx rounded" @click="profileSidebarOpen = false">
                                <div class="flex items-center ld">
                                    <div class="y mr-2">
                                        <img class="os sf rounded-full" src="./images/user-36-05.jpg" width="32" height="32" alt="User 05">
                                        <div class="g k q oa sc hd cr cc rounded-full"></div>
                                    </div>
                                    <div class="ld">
                                        <span class="text-sm gp text-slate-800">Simona Lürwer</span>
                                    </div>
                                </div>
                            </button>
                        </li>
                        <li class="nv">
                            <button class="ou dx rounded" @click="profileSidebarOpen = false">
                                <div class="flex items-center ld">
                                    <div class="y mr-2">
                                        <img class="os sf rounded-full" src="./images/user-36-04.jpg" width="32" height="32" alt="User 04">
                                    </div>
                                    <div class="ld">
                                        <span class="text-sm gp text-slate-800">Adrian Przetocki</span>
                                    </div>
                                </div>
                            </button>
                        </li>
                        <li class="nv">
                            <button class="ou dx rounded" @click="profileSidebarOpen = false">
                                <div class="flex items-center ld">
                                    <div class="y mr-2">
                                        <img class="os sf rounded-full" src="./images/user-36-01.jpg" width="32" height="32" alt="User 01">
                                        <div class="g k q oa sc hd cr cc rounded-full"></div>
                                    </div>
                                    <div class="ld">
                                        <span class="text-sm gp text-slate-800">Brian Halligan</span>
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