<x-app-layout>

<div class="vs jj ttm vl ou uf na">

                    <!-- Page header -->
                    <div class="je jd jc ii">

                        <!-- Left: Title -->
                        <div class="ri _y">
                            <h1 class="gu teu text-slate-800 font-bold">Discover Meetups ✨</h1>
                        </div>

                        <!-- Right: Actions -->
                        <div class="sn am jo az jp ft">

                            <!-- Search form -->
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

                            <!-- Add meetup button -->
                            <button class="btn ho xi ye">
                                <svg class="oo sl du bf ub" viewBox="0 0 16 16">
                                    <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                                </svg>
                                <span class="hidden trm nq">Add Meetup</span>
                            </button>

                        </div>

                    </div>

                    <!-- Filters -->
                    <div class="ii">
                        <ul class="flex flex-wrap -m-1">
                            <li class="m-1">
                                <button class="inline-flex items-center justify-center text-sm gp gw rounded-full vn vf border cp bv ho ye wi wu">View All</button>
                            </li>
                            <li class="m-1">
                                <button class="inline-flex items-center justify-center text-sm gp gw rounded-full vn vf border border-slate-200 hover--border-slate-300 bv bg-white text-slate-500 wi wu">Online</button>
                            </li>
                            <li class="m-1">
                                <button class="inline-flex items-center justify-center text-sm gp gw rounded-full vn vf border border-slate-200 hover--border-slate-300 bv bg-white text-slate-500 wi wu">Local</button>
                            </li>
                            <li class="m-1">
                                <button class="inline-flex items-center justify-center text-sm gp gw rounded-full vn vf border border-slate-200 hover--border-slate-300 bv bg-white text-slate-500 wi wu">This Week</button>
                            </li>
                            <li class="m-1">
                                <button class="inline-flex items-center justify-center text-sm gp gw rounded-full vn vf border border-slate-200 hover--border-slate-300 bv bg-white text-slate-500 wi wu">This Month</button>
                            </li>
                            <li class="m-1">
                                <button class="inline-flex items-center justify-center text-sm gp gw rounded-full vn vf border border-slate-200 hover--border-slate-300 bv bg-white text-slate-500 wi wu">Following</button>
                            </li>
                        </ul>                    
                    </div>
                    <div class="text-sm text-slate-500 gm ri">289 Meetups</div>

                    <!-- Content -->
                    <x-blog.card />
                    
                    <!-- Pagination -->
                    <x-pagination />

                </div>

</x-app-layout>