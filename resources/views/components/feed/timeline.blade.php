<div class="ug qb tnf 2xl:mx-8">
    <div class="ter">

        <!-- Blocks -->
        <div class="fg">

            <!-- Post Block -->
            <x-feed.post />

            <!-- Post 1 -->
            <div class="bg-white shadow-md rounded border border-slate-200 dz">
                <!-- Header -->
                <header class="flex fe aj fl ro">
                    <!-- User -->
                    <div class="flex aj fl">
                        <img class="rounded-full ub" src="./images/user-36-03.jpg" width="40" height="40" alt="User 03">
                        <div>
                            <div class="gx">
                                <a class="text-sm gh text-slate-800" href="#0">Dominik Lamakani</a>
                            </div>
                            <div class="go text-slate-500">Yesterday at 10:48 AM</div>
                        </div>
                    </div>
                    <!-- Menu button -->
                    <div class="y">
                        <div class="g k q inline-flex" x-data="{ open: false }">
                            <button class="gq xv rounded-full" :class="{ 'hi text-slate-500': open }" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open" aria-expanded="false">
                                <span class="d">Menu</span>
                                <svg class="os sf du" viewBox="0 0 32 32">
                                    <circle cx="16" cy="16" r="2"></circle>
                                    <circle cx="10" cy="16" r="2"></circle>
                                    <circle cx="22" cy="16" r="2"></circle>
                                </svg>
                            </button>
                            <div class="uk tk g z q us bg-white border border-slate-200 va rounded bd la re" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="wt wa wr au" x-transition:enter-start="opacity-0 uq" x-transition:enter-end="ba uj" x-transition:leave="wt wa wr" x-transition:leave-start="ba" x-transition:leave-end="opacity-0" style="display: none;">
                                <ul>
                                    <li>
                                        <a class="gp text-sm g_ xg flex vf vn" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Option 1</a>
                                    </li>
                                    <li>
                                        <a class="gp text-sm g_ xg flex vf vn" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Option 2</a>
                                    </li>
                                    <li>
                                        <a class="gp text-sm yl xy flex vf vn" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Remove</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- Body -->
                <div class="text-sm text-slate-800 fb ii">
                    <p>👋</p>
                    <p>It's more likely that people reading your blog will opt in with their email addresses if you give them something highly relevant in return. Ditch that too-general lead magnet and create "content upgrades" for your highest-traffic articles.</p>
                    <p>Thread 👇</p>
                </div>
                <!-- Footer -->
                <footer class="flex items-center fy">
                    <!-- Like button -->
                    <button class="flex items-center gq xm">
                        <svg class="oo sl ub du iu" viewBox="0 0 16 16">
                            <path d="M14.682 2.318A4.485 4.485 0 0011.5 1 4.377 4.377 0 008 2.707 4.383 4.383 0 004.5 1a4.5 4.5 0 00-3.182 7.682L8 15l6.682-6.318a4.5 4.5 0 000-6.364zm-1.4 4.933L8 12.247l-5.285-5A2.5 2.5 0 014.5 3c1.437 0 2.312.681 3.5 2.625C9.187 3.681 10.062 3 11.5 3a2.5 2.5 0 011.785 4.251h-.003z"></path>
                        </svg>
                        <div class="text-sm text-slate-500">4</div>
                    </button>
                    <!-- Share button -->
                    <button class="flex items-center gq xm">
                        <svg class="oo sl ub du iu" viewBox="0 0 16 16">
                            <path d="M13 7h2v6a1 1 0 0 1-1 1H4v2l-4-3 4-3v2h9V7ZM3 9H1V3a1 1 0 0 1 1-1h10V0l4 3-4 3V4H3v5Z"></path>
                        </svg>
                        <div class="text-sm text-slate-500">44</div>
                    </button>
                    <!-- Replies button -->
                    <button class="flex items-center gq xm">
                        <svg class="oo sl ub du iu" viewBox="0 0 16 16">
                            <path d="M8 0C3.6 0 0 3.1 0 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L8.9 12H8c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path>
                        </svg>
                        <div class="text-sm text-slate-500">7</div>
                    </button>
                </footer>
            </div>

            <!-- Post 2 -->
            <div class="bg-white shadow-md rounded border border-slate-200 dz">
                <!-- Header -->
                <header class="flex fe aj fl ro">
                    <!-- User -->
                    <div class="flex aj fl">
                        <img class="rounded-full ub" src="./images/user-36-06.jpg" width="40" height="40" alt="User 06">
                        <div>
                            <div class="gx">
                                <a class="text-sm gh text-slate-800" href="#0">Mark Karimani</a>
                            </div>
                            <div class="inline-flex items-center">
                                <svg class="w-3 h-3 ub df mr-1" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.953 4.29a.5.5 0 0 0-.454-.29H6.14L6.984.62A.5.5 0 0 0 6.12.174l-6 7A.5.5 0 0 0 .499 8h5.359l-.844 3.38a.5.5 0 0 0 .864.445l6-7a.5.5 0 0 0 .075-.534Z"></path>
                                </svg>
                                <div class="go text-slate-500">Sponsored</div>
                            </div>
                        </div>
                    </div>
                    <!-- Menu button -->
                    <div class="y">
                        <div class="g k q inline-flex" x-data="{ open: false }">
                            <button class="gq xv rounded-full" :class="{ 'hi text-slate-500': open }" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open" aria-expanded="false">
                                <span class="d">Menu</span>
                                <svg class="os sf du" viewBox="0 0 32 32">
                                    <circle cx="16" cy="16" r="2"></circle>
                                    <circle cx="10" cy="16" r="2"></circle>
                                    <circle cx="22" cy="16" r="2"></circle>
                                </svg>
                            </button>
                            <div class="uk tk g z q us bg-white border border-slate-200 va rounded bd la re" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="wt wa wr au" x-transition:enter-start="opacity-0 uq" x-transition:enter-end="ba uj" x-transition:leave="wt wa wr" x-transition:leave-start="ba" x-transition:leave-end="opacity-0" style="display: none;">
                                <ul>
                                    <li>
                                        <a class="gp text-sm g_ xg flex vf vn" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Option 1</a>
                                    </li>
                                    <li>
                                        <a class="gp text-sm g_ xg flex vf vn" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Option 2</a>
                                    </li>
                                    <li>
                                        <a class="gp text-sm yl xy flex vf vn" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Remove</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- Body -->
                <div class="text-sm text-slate-800 fb ii">
                    <p>Designing an Earth-positive future, together 🌿</p>
                    <div class="y !my-4">
                        <img class="block ou" src="./images/feed-image-01.jpg" width="590" height="332" alt="Feed 01">
                        <div class="g x q te dw hq pa bq">
                            <div class="flex items-center fe">
                                <div class="go gp yf">togethernature.com</div>
                                <a class="go gp text-indigo-400 xb" href="#0">Learn More -&gt;</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer -->
                <footer class="flex items-center fy">
                    <!-- Like button -->
                    <button class="flex items-center gq xm">
                        <svg class="oo sl ub du iu" viewBox="0 0 16 16">
                            <path d="M14.682 2.318A4.485 4.485 0 0011.5 1 4.377 4.377 0 008 2.707 4.383 4.383 0 004.5 1a4.5 4.5 0 00-3.182 7.682L8 15l6.682-6.318a4.5 4.5 0 000-6.364zm-1.4 4.933L8 12.247l-5.285-5A2.5 2.5 0 014.5 3c1.437 0 2.312.681 3.5 2.625C9.187 3.681 10.062 3 11.5 3a2.5 2.5 0 011.785 4.251h-.003z"></path>
                        </svg>
                        <div class="text-sm text-slate-500">4</div>
                    </button>
                    <!-- Share button -->
                    <button class="flex items-center gq xm">
                        <svg class="oo sl ub du iu" viewBox="0 0 16 16">
                            <path d="M13 7h2v6a1 1 0 0 1-1 1H4v2l-4-3 4-3v2h9V7ZM3 9H1V3a1 1 0 0 1 1-1h10V0l4 3-4 3V4H3v5Z"></path>
                        </svg>
                        <div class="text-sm text-slate-500">44</div>
                    </button>
                    <!-- Replies button -->
                    <button class="flex items-center gq xm">
                        <svg class="oo sl ub du iu" viewBox="0 0 16 16">
                            <path d="M8 0C3.6 0 0 3.1 0 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L8.9 12H8c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path>
                        </svg>
                        <div class="text-sm text-slate-500">7</div>
                    </button>
                </footer>
            </div>

            <!-- Post 3 -->
            <div class="bg-white shadow-md rounded border border-slate-200 dz">
                <!-- Header -->
                <header class="flex fe aj fl ro">
                    <!-- User -->
                    <div class="flex aj fl">
                        <img class="rounded-full ub" src="./images/user-36-04.jpg" width="40" height="40" alt="User 04">
                        <div>
                            <div class="gx">
                                <a class="text-sm gh text-slate-800" href="#0">Erica Spriggs</a>
                            </div>
                            <div class="go text-slate-500">Yesterday at 2:34 PM</div>
                        </div>
                    </div>
                    <!-- Menu button -->
                    <div class="y">
                        <div class="g k q inline-flex" x-data="{ open: false }">
                            <button class="gq xv rounded-full" :class="{ 'hi text-slate-500': open }" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open" aria-expanded="false">
                                <span class="d">Menu</span>
                                <svg class="os sf du" viewBox="0 0 32 32">
                                    <circle cx="16" cy="16" r="2"></circle>
                                    <circle cx="10" cy="16" r="2"></circle>
                                    <circle cx="22" cy="16" r="2"></circle>
                                </svg>
                            </button>
                            <div class="uk tk g z q us bg-white border border-slate-200 va rounded bd la re" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="wt wa wr au" x-transition:enter-start="opacity-0 uq" x-transition:enter-end="ba uj" x-transition:leave="wt wa wr" x-transition:leave-start="ba" x-transition:leave-end="opacity-0" style="display: none;">
                                <ul>
                                    <li>
                                        <a class="gp text-sm g_ xg flex vf vn" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Option 1</a>
                                    </li>
                                    <li>
                                        <a class="gp text-sm g_ xg flex vf vn" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Option 2</a>
                                    </li>
                                    <li>
                                        <a class="gp text-sm yl xy flex vf vn" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Remove</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- Body -->
                <div class="text-sm text-slate-800 fb ii">
                    <p>Any book recommendations for a first-time entrepreneur? 📚</p>
                </div>
                <!-- Footer -->
                <footer class="flex items-center fy">
                    <!-- Like button -->
                    <button class="flex items-center gq xm">
                        <svg class="oo sl ub du iu" viewBox="0 0 16 16">
                            <path d="M14.682 2.318A4.485 4.485 0 0011.5 1 4.377 4.377 0 008 2.707 4.383 4.383 0 004.5 1a4.5 4.5 0 00-3.182 7.682L8 15l6.682-6.318a4.5 4.5 0 000-6.364zm-1.4 4.933L8 12.247l-5.285-5A2.5 2.5 0 014.5 3c1.437 0 2.312.681 3.5 2.625C9.187 3.681 10.062 3 11.5 3a2.5 2.5 0 011.785 4.251h-.003z"></path>
                        </svg>
                        <div class="text-sm text-slate-500">122</div>
                    </button>
                    <!-- Share button -->
                    <button class="flex items-center gq xm">
                        <svg class="oo sl ub du iu" viewBox="0 0 16 16">
                            <path d="M13 7h2v6a1 1 0 0 1-1 1H4v2l-4-3 4-3v2h9V7ZM3 9H1V3a1 1 0 0 1 1-1h10V0l4 3-4 3V4H3v5Z"></path>
                        </svg>
                        <div class="text-sm text-slate-500">7</div>
                    </button>
                    <!-- Replies button -->
                    <button class="flex items-center gq xm">
                        <svg class="oo sl ub du iu" viewBox="0 0 16 16">
                            <path d="M8 0C3.6 0 0 3.1 0 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L8.9 12H8c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path>
                        </svg>
                        <div class="text-sm text-slate-500">298</div>
                    </button>
                </footer>
                <!-- Comments -->
                <div class="rw mt co border-slate-200">
                    <ul class="fb ro">
                        <!-- Comment -->
                        <li class="dk hp rounded">
                            <div class="flex aj fl">
                                <img class="rounded-full ub" src="./images/user-36-04.jpg" width="32" height="32" alt="User 04">
                                <div>
                                    <div class="go text-slate-500">
                                        <a class="gh text-slate-800" href="#0">Sophie Wenner</a> · 44min
                                    </div>
                                    <div class="text-sm"><a class="gp text-indigo-500 xh" href="#0">@EricaSpriggs</a> Reading through and really enjoying "Zero to Sold" by Arvid.</div>
                                </div>
                            </div>
                        </li>
                        <!-- Comment -->
                        <li class="dk hp rounded">
                            <div class="flex aj fl">
                                <img class="rounded-full ub" src="./images/user-36-05.jpg" width="32" height="32" alt="User 05">
                                <div>
                                    <div class="go text-slate-500">
                                        <a class="gh text-slate-800" href="#0">Kyla Scanlon</a> · 1h
                                    </div>
                                    <div class="text-sm">Depends on the company you're running, but if I had to choose just one book, it'd be The Personal MBA by Josh Kaufman.</div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!-- Comments footer -->
                    <div class="flex fe fc">
                        <div class="text-sm text-slate-500"><span class="gp g_">2</span> of <span class="gp g_">67</span> comments</div>
                        <button class="text-sm  gp text-indigo-500 xh">View More Comments</button>
                    </div>
                    <!-- Comment form -->
                    <div class="flex items-center fl nk">
                        <img class="rounded-full ub" src="./images/user-36-02.jpg" width="32" height="32" alt="User 02">
                        <div class="uw">
                            <label for="comment-form" class="d">Write a comment…</label>
                            <input id="comment-form" class="s ou hi cp ki xq bu" type="text" placeholder="Write a comment…">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Post 4 -->
            <div class="bg-white shadow-md rounded border border-slate-200 dz">
                <!-- Header -->
                <header class="flex fe aj fl ro">
                    <!-- User -->
                    <div class="flex aj fl">
                        <img class="rounded-full ub" src="./images/user-36-08.jpg" width="40" height="40" alt="User 08">
                        <div>
                            <div class="gx">
                                <a class="text-sm gh text-slate-800" href="#0">Margaret Sullivan</a>
                            </div>
                            <div class="go text-slate-500">Yesterday at 4:56 PM</div>
                        </div>
                    </div>
                    <!-- Menu button -->
                    <div class="y">
                        <div class="g k q inline-flex" x-data="{ open: false }">
                            <button class="gq xv rounded-full" :class="{ 'hi text-slate-500': open }" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open" aria-expanded="false">
                                <span class="d">Menu</span>
                                <svg class="os sf du" viewBox="0 0 32 32">
                                    <circle cx="16" cy="16" r="2"></circle>
                                    <circle cx="10" cy="16" r="2"></circle>
                                    <circle cx="22" cy="16" r="2"></circle>
                                </svg>
                            </button>
                            <div class="uk tk g z q us bg-white border border-slate-200 va rounded bd la re" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="wt wa wr au" x-transition:enter-start="opacity-0 uq" x-transition:enter-end="ba uj" x-transition:leave="wt wa wr" x-transition:leave-start="ba" x-transition:leave-end="opacity-0" style="display: none;">
                                <ul>
                                    <li>
                                        <a class="gp text-sm g_ xg flex vf vn" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Option 1</a>
                                    </li>
                                    <li>
                                        <a class="gp text-sm g_ xg flex vf vn" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Option 2</a>
                                    </li>
                                    <li>
                                        <a class="gp text-sm yl xy flex vf vn" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Remove</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- Body -->
                <div class="text-sm text-slate-800 fb ii">
                    <p>Kyla Network - Make new connections, join communities, and access exclusive experiences. 🧑‍🤝‍🧑</p>
                    <div class="y flex items-center justify-center !my-4">
                        <img class="block ou" src="./images/feed-image-02.jpg" width="590" height="332" alt="Feed 01">
                        <button class="g kk">
                            <svg class="ov sa" width="64" height="64" xmlns="http://www.w3.org/2000/svg">
                                <circle class="dl bl _n wt" cx="32" cy="32" r="32"></circle>
                                <path class="dc" d="M40 33a.999.999 0 0 0-.427-.82l-10-7A1 1 0 0 0 28 26v14.002a.999.999 0 0 0 1.573.819l10-7A.995.995 0 0 0 40 33V33c0 .002 0 .002 0 0Z"></path>
                            </svg>
                        </button>
                        <div class="g tf tl tc">
                            <div class="flex items-center fm">
                                <div class="go gp yf vi vf hq pa">0:48</div>
                                <div class="go gp yf vi vf hq pa">1M Views</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer -->
                <footer class="flex items-center fy">
                    <!-- Like button -->
                    <button class="flex items-center text-indigo-400">
                        <svg class="oo sl ub du iu" viewBox="0 0 16 16">
                            <path d="M14.682 2.318A4.485 4.485 0 0011.5 1 4.377 4.377 0 008 2.707 4.383 4.383 0 004.5 1a4.5 4.5 0 00-3.182 7.682L8 15l6.682-6.318a4.5 4.5 0 000-6.364zm-1.4 4.933L8 12.247l-5.285-5A2.5 2.5 0 014.5 3c1.437 0 2.312.681 3.5 2.625C9.187 3.681 10.062 3 11.5 3a2.5 2.5 0 011.785 4.251h-.003z"></path>
                        </svg>
                        <div class="text-sm text-indigo-500">2.2K</div>
                    </button>
                    <!-- Share button -->
                    <button class="flex items-center gq xm">
                        <svg class="oo sl ub du iu" viewBox="0 0 16 16">
                            <path d="M13 7h2v6a1 1 0 0 1-1 1H4v2l-4-3 4-3v2h9V7ZM3 9H1V3a1 1 0 0 1 1-1h10V0l4 3-4 3V4H3v5Z"></path>
                        </svg>
                        <div class="text-sm text-slate-500">4.3K</div>
                    </button>
                    <!-- Replies button -->
                    <button class="flex items-center gq xm">
                        <svg class="oo sl ub du iu" viewBox="0 0 16 16">
                            <path d="M8 0C3.6 0 0 3.1 0 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L8.9 12H8c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path>
                        </svg>
                        <div class="text-sm text-slate-500">92</div>
                    </button>
                </footer>
            </div>

        </div>

    </div>
</div>