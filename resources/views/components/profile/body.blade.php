<div class="uw flex ak za wn wo wu translate-x-0" :class="profileSidebarOpen ? 'translate-x-1/3' : 'translate-x-0'">

    <!-- Profile background -->
    <div class="y sb hu">
        <img class="dy sh ou" src="./images/profile-bg.jpg" width="979" height="220" alt="Profile background">
        <!-- Close button -->
        <button class="qz g ty tf _u ye bl xj" @click.stop="profileSidebarOpen = !profileSidebarOpen" aria-controls="profile-sidebar" :aria-expanded="profileSidebarOpen" aria-expanded="false">
            <span class="d">Close sidebar</span>
            <svg class="oi so du" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z"></path>
            </svg>
        </button>
    </div>

    <!-- Content -->
    <div class="y vs jj mk">

        <!-- Pre-header -->
        <div class="ib rh _x">

            <div class="flex ak items-center ja jd jl">

                <!-- Avatar -->
                <div class="inline-flex rj rq ri _y">
                    <img class="rounded-full ci cc" src="./images/user-128-01.jpg" width="128" height="128" alt="Avatar">
                </div>

                <!-- Actions -->
                <div class="flex fc _k">
                    <button class="ve ub rounded border border-slate-200 hover--border-slate-300 bv">
                        <svg class="oo sd du gq" viewBox="0 0 16 4">
                            <circle cx="8" cy="2" r="2"></circle>
                            <circle cx="2" cy="2" r="2"></circle>
                            <circle cx="14" cy="2" r="2"></circle>
                        </svg>
                    </button>
                    <button class="ve ub rounded border border-slate-200 hover--border-slate-300 bv">
                        <svg class="oo sl du text-indigo-500" viewBox="0 0 16 16">
                            <path d="M8 0C3.6 0 0 3.1 0 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7Zm4 10.8v2.3L8.9 12H8c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8Z"></path>
                        </svg>
                    </button>
                    <button class="r ho xi ye">
                        <svg class="du ub" width="11" height="8" viewBox="0 0 11 8">
                            <path d="m.457 4.516.969-.99 2.516 2.481L9.266.702l.985.99-6.309 6.284z"></path>
                        </svg>
                        <span class="nq">Following</span>
                    </button>
                </div>

            </div>

        </div>

        <!-- Header -->
        <header class="gn qe rh">
            <!-- Name -->
            <div class="inline-flex aj ru">
                <h1 class="gu text-slate-800 font-bold">Carolyn McNeail</h1>
                <svg class="oo sl du ub yn nq" viewBox="0 0 16 16">
                    <path d="M13 6a.75.75 0 0 1-.75-.75 1.5 1.5 0 0 0-1.5-1.5.75.75 0 1 1 0-1.5 1.5 1.5 0 0 0 1.5-1.5.75.75 0 1 1 1.5 0 1.5 1.5 0 0 0 1.5 1.5.75.75 0 1 1 0 1.5 1.5 1.5 0 0 0-1.5 1.5A.75.75 0 0 1 13 6ZM6 16a1 1 0 0 1-1-1 4 4 0 0 0-4-4 1 1 0 0 1 0-2 4 4 0 0 0 4-4 1 1 0 1 1 2 0 4 4 0 0 0 4 4 1 1 0 0 1 0 2 4 4 0 0 0-4 4 1 1 0 0 1-1 1Z"></path>
                </svg>
            </div>
            <!-- Bio -->
            <div class="text-sm ro">Fitness Fanatic, Design Enthusiast, Mentor, Meetup Organizer &amp; PHP Lover.</div>
            <!-- Meta -->
            <div class="flex flex-wrap justify-center jh fy">
                <div class="flex items-center">
                    <svg class="oo sl du ub gq" viewBox="0 0 16 16">
                        <path d="M8 8.992a2 2 0 1 1-.002-3.998A2 2 0 0 1 8 8.992Zm-.7 6.694c-.1-.1-4.2-3.696-4.2-3.796C1.7 10.69 1 8.892 1 6.994 1 3.097 4.1 0 8 0s7 3.097 7 6.994c0 1.898-.7 3.697-2.1 4.996-.1.1-4.1 3.696-4.2 3.796-.4.3-1 .3-1.4-.1Zm-2.7-4.995L8 13.688l3.4-2.997c1-1 1.6-2.198 1.6-3.597 0-2.798-2.2-4.996-5-4.996S3 4.196 3 6.994c0 1.399.6 2.698 1.6 3.697 0-.1 0-.1 0 0Z"></path>
                    </svg>
                    <span class="text-sm gp lm text-slate-500 nq">Milan, IT</span>
                </div>
                <div class="flex items-center">
                    <svg class="oo sl du ub gq" viewBox="0 0 16 16">
                        <path d="M11 0c1.3 0 2.6.5 3.5 1.5 1 .9 1.5 2.2 1.5 3.5 0 1.3-.5 2.6-1.4 3.5l-1.2 1.2c-.2.2-.5.3-.7.3-.2 0-.5-.1-.7-.3-.4-.4-.4-1 0-1.4l1.1-1.2c.6-.5.9-1.3.9-2.1s-.3-1.6-.9-2.2C12 1.7 10 1.7 8.9 2.8L7.7 4c-.4.4-1 .4-1.4 0-.4-.4-.4-1 0-1.4l1.2-1.1C8.4.5 9.7 0 11 0ZM8.3 12c.4-.4 1-.5 1.4-.1.4.4.4 1 0 1.4l-1.2 1.2C7.6 15.5 6.3 16 5 16c-1.3 0-2.6-.5-3.5-1.5C.5 13.6 0 12.3 0 11c0-1.3.5-2.6 1.5-3.5l1.1-1.2c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4L2.9 8.9c-.6.5-.9 1.3-.9 2.1s.3 1.6.9 2.2c1.1 1.1 3.1 1.1 4.2 0L8.3 12Zm1.1-6.8c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-4.2 4.2c-.2.2-.5.3-.7.3-.2 0-.5-.1-.7-.3-.4-.4-.4-1 0-1.4l4.2-4.2Z"></path>
                    </svg>
                    <a class="text-sm gp lm text-indigo-500 xh nq" href="#0">carolinmcneail.com</a>
                </div>
            </div>
        </header>

        <!-- Tabs -->
        <div class="y rh">
            <div class="g te ou sk hu" aria-hidden="true"></div>
            <ul class="y text-sm gp flex a_ nd _m tem lh l">
                <li class="is last--mr-0 wb qr ttx wj qi ttk">
                    <a class="block mg text-indigo-500 lm cu cx" href="#0">General</a>
                </li>
                <li class="is last--mr-0 wb qr ttx wj qi ttk">
                    <a class="block mg text-slate-500 hover--text-slate-600 lm" href="#0">Connections</a>
                </li>
                <li class="is last--mr-0 wb qr ttx wj qi ttk">
                    <a class="block mg text-slate-500 hover--text-slate-600 lm" href="#0">Contributions</a>
                </li>
            </ul>
        </div>

        <!-- Profile content -->
        <div class="flex ak tnq trn">

            <!-- Main content -->
            <div class="fj rc tnc">

                <!-- About Me -->
                <div>
                    <h2 class="text-slate-800 gh ru">About Me</h2>
                    <div class="text-sm fb">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <p>Consectetur adipiscing elit, sed do eiusmod tempor magna aliqua.</p>
                    </div>
                </div>

                <!-- Departments -->
                <div>
                    <h2 class="text-slate-800 gh ru">Departments</h2>
                    <!-- Cards -->
                    <div class="sn tnj fs">

                        <!-- Card -->
                        <div class="bg-white dw border border-slate-200 rounded-sm bv">
                            <!-- Card header -->
                            <div class="uw flex items-center ld ru">
                                <div class="os sf ub flex items-center justify-center hx rounded-full mr-2">
                                    <img class="nz" src="./images/icon-03.svg" width="14" height="14" alt="Icon 03">
                                </div>
                                <div class="ld">
                                    <span class="text-sm gp text-slate-800">Acme Marketing</span>
                                </div>
                            </div>
                            <!-- Card content -->
                            <div class="text-sm ro">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</div>
                            <!-- Card footer -->
                            <div class="flex fe items-center">
                                <!-- Avatars group -->
                                <div class="flex fp it">
                                    <img class="rounded-full cr cc st" src="./images/avatar-02.jpg" width="24" height="24" alt="Avatar">
                                    <img class="rounded-full cr cc st" src="./images/avatar-03.jpg" width="24" height="24" alt="Avatar">
                                    <img class="rounded-full cr cc st" src="./images/avatar-04.jpg" width="24" height="24" alt="Avatar">
                                    <img class="rounded-full cr cc st" src="./images/avatar-05.jpg" width="24" height="24" alt="Avatar">
                                </div>
                                <!-- Link -->
                                <div>
                                    <a class="text-sm gp text-indigo-500 xh" href="#0">View -&gt;</a>
                                </div>
                            </div>
                        </div>

                        <!-- Card -->
                        <div class="bg-white dw border border-slate-200 rounded-sm bv">
                            <!-- Card header -->
                            <div class="uw flex items-center ld ru">
                                <div class="os sf ub flex items-center justify-center hx rounded-full mr-2">
                                    <img class="nz" src="./images/icon-02.svg" width="14" height="14" alt="Icon 02">
                                </div>
                                <div class="ld">
                                    <span class="text-sm gp text-slate-800">Acme Product</span>
                                </div>
                            </div>
                            <!-- Card content -->
                            <div class="text-sm ro">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</div>
                            <!-- Card footer -->
                            <div class="flex fe items-center">
                                <!-- Avatars group -->
                                <div class="flex fp it">
                                    <img class="rounded-full cr cc st" src="./images/avatar-06.jpg" width="24" height="24" alt="Avatar">
                                    <img class="rounded-full cr cc st" src="./images/avatar-03.jpg" width="24" height="24" alt="Avatar">
                                    <img class="rounded-full cr cc st" src="./images/avatar-01.jpg" width="24" height="24" alt="Avatar">
                                </div>
                                <!-- Link -->
                                <div>
                                    <a class="text-sm gp text-indigo-500 xh" href="#0">View -&gt;</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- Work History -->
                <div>
                    <h2 class="text-slate-800 gh ru">Work History</h2>
                    <div class="bg-white dw border border-slate-200 rounded-sm bv">
                        <ul class="fw">

                            <!-- Item -->
                            <li class="je jc jd">
                                <div class="js flex items-center text-sm">
                                    <!-- Icon -->
                                    <div class="os sf rounded-full ub hy ng ra">
                                        <svg class="os sf du yy" viewBox="0 0 32 32">
                                            <path d="M21 14a.75.75 0 0 1-.75-.75 1.5 1.5 0 0 0-1.5-1.5.75.75 0 1 1 0-1.5 1.5 1.5 0 0 0 1.5-1.5.75.75 0 1 1 1.5 0 1.5 1.5 0 0 0 1.5 1.5.75.75 0 1 1 0 1.5 1.5 1.5 0 0 0-1.5 1.5.75.75 0 0 1-.75.75Zm-7 10a1 1 0 0 1-1-1 4 4 0 0 0-4-4 1 1 0 0 1 0-2 4 4 0 0 0 4-4 1 1 0 0 1 2 0 4 4 0 0 0 4 4 1 1 0 0 1 0 2 4 4 0 0 0-4 4 1 1 0 0 1-1 1Z"></path>
                                        </svg>
                                    </div>
                                    <!-- Position -->
                                    <div>
                                        <div class="gp text-slate-800">Senior Product Designer</div>
                                        <div class="flex a_ items-center fc lm">
                                            <div>Remote</div>
                                            <div class="gq">·</div>
                                            <div>April, 2020 - Today</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tags -->
                                <div class="__ rb _j">
                                    <ul class="flex flex-wrap jp -m-1">
                                        <li class="m-1">
                                            <button class="inline-flex items-center justify-center go gp gw rounded-full vp vd border border-slate-200 hover--border-slate-300 bv bg-white text-slate-500 wi wu">Marketing</button>
                                        </li>
                                        <li class="m-1">
                                            <button class="inline-flex items-center justify-center go gp gw rounded-full vp vd border border-slate-200 hover--border-slate-300 bv bg-white text-slate-500 wi wu">+4</button>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <!-- Item -->
                            <li class="je jc jd">
                                <div class="js flex items-center text-sm">
                                    <!-- Icon -->
                                    <div class="os sf rounded-full ub ho ng ra">
                                        <svg class="os sf du text-indigo-50" viewBox="0 0 32 32">
                                            <path d="M8.994 20.006a1 1 0 0 1-.707-1.707l4.5-4.5a1 1 0 0 1 1.414 0l3.293 3.293 4.793-4.793a1 1 0 1 1 1.414 1.414l-5.5 5.5a1 1 0 0 1-1.414 0l-3.293-3.293L9.7 19.713a1 1 0 0 1-.707.293Z"></path>
                                        </svg>
                                    </div>
                                    <!-- Position -->
                                    <div>
                                        <div class="gp text-slate-800">Product Designer</div>
                                        <div class="flex a_ items-center fc lm">
                                            <div>Milan, IT</div>
                                            <div class="gq">·</div>
                                            <div>April, 2018 - April 2020</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tags -->
                                <div class="__ rb _j">
                                    <ul class="flex flex-wrap jp -m-1">
                                        <li class="m-1">
                                            <button class="inline-flex items-center justify-center go gp gw rounded-full vp vd border border-slate-200 hover--border-slate-300 bv bg-white text-slate-500 wi wu">Marketing</button>
                                        </li>
                                        <li class="m-1">
                                            <button class="inline-flex items-center justify-center go gp gw rounded-full vp vd border border-slate-200 hover--border-slate-300 bv bg-white text-slate-500 wi wu">+4</button>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <!-- Item -->
                            <li class="je jc jd">
                                <div class="js flex items-center text-sm">
                                    <!-- Icon -->
                                    <div class="os sf rounded-full ub ho ng ra">
                                        <svg class="os sf du text-indigo-50" viewBox="0 0 32 32">
                                            <path d="M8.994 20.006a1 1 0 0 1-.707-1.707l4.5-4.5a1 1 0 0 1 1.414 0l3.293 3.293 4.793-4.793a1 1 0 1 1 1.414 1.414l-5.5 5.5a1 1 0 0 1-1.414 0l-3.293-3.293L9.7 19.713a1 1 0 0 1-.707.293Z"></path>
                                        </svg>
                                    </div>
                                    <!-- Position -->
                                    <div>
                                        <div class="gp text-slate-800">Product Designer</div>
                                        <div class="flex a_ items-center fc lm">
                                            <div>Milan, IT</div>
                                            <div class="gq">·</div>
                                            <div>April, 2018 - April 2020</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tags -->
                                <div class="__ rb _j">
                                    <ul class="flex flex-wrap jp -m-1">
                                        <li class="m-1">
                                            <button class="inline-flex items-center justify-center go gp gw rounded-full vp vd border border-slate-200 hover--border-slate-300 bv bg-white text-slate-500 wi wu">Marketing</button>
                                        </li>
                                        <li class="m-1">
                                            <button class="inline-flex items-center justify-center go gp gw rounded-full vp vd border border-slate-200 hover--border-slate-300 bv bg-white text-slate-500 wi wu">+4</button>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>

            <!-- Sidebar -->
            <aside class="tnx tnw fw">
                <div class="text-sm">
                    <h3 class="gp text-slate-800">Title</h3>
                    <div>Senior Product Designer</div>
                </div>
                <div class="text-sm">
                    <h3 class="gp text-slate-800">Location</h3>
                    <div>Milan, IT - Remote</div>
                </div>
                <div class="text-sm">
                    <h3 class="gp text-slate-800">Email</h3>
                    <div>carolinmcneail@acme.com</div>
                </div>
                <div class="text-sm">
                    <h3 class="gp text-slate-800">Birthdate</h3>
                    <div>4 April, 1987</div>
                </div>
                <div class="text-sm">
                    <h3 class="gp text-slate-800">Joined Acme</h3>
                    <div>7 April, 2017</div>
                </div>
            </aside>

        </div>

    </div>

</div>