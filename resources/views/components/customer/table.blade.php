<div class="bg-white bd rounded-sm border border-slate-200">
    <header class="vc vu">
        <h2 class="gh text-slate-800">All Customers <span class="gq gp">248</span></h2>
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
                        <th class="vi wy w_ vo lm of">
                            <span class="d">Favourite</span>
                        </th>
                        <th class="vi wy w_ vo lm">
                            <div class="gh gt">Order</div>
                        </th>
                        <th class="vi wy w_ vo lm">
                            <div class="gh gt">Email</div>
                        </th>
                        <th class="vi wy w_ vo lm">
                            <div class="gh gt">Location</div>
                        </th>
                        <th class="vi wy w_ vo lm">
                            <div class="gh">Orders</div>
                        </th>
                        <th class="vi wy w_ vo lm">
                            <div class="gh gt">Last order</div>
                        </th>
                        <th class="vi wy w_ vo lm">
                            <div class="gh gt">Total spent</div>
                        </th>
                        <th class="vi wy w_ vo lm">
                            <div class="gh">Refunds</div>
                        </th>
                        <th class="vi wy w_ vo lm">
                            <span class="d">Menu</span>
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
                        <td class="vi wy w_ vo lm of">
                            <div class="flex items-center y">
                                <button>
                                    <svg class="oo sl ub du yn" viewBox="0 0 16 16">
                                        <path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path>
                                    </svg>
                                </button>
                            </div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="flex items-center">
                                <div class="od sy ub mr-2 _b">
                                    <img class="rounded-full" src="./images/user-36-01.jpg" width="40" height="40" alt="User 01">
                                </div>
                                <div class="gp text-slate-800">Patricia Semklo</div>
                            </div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gt">patricia.semklo@app.com</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gt">🇬🇧 London, UK</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gn">24</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gt gp yv">#123567</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gt gp yt">$2,890.66</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gn">-</div>
                        </td>
                        <td class="vi wy w_ vo lm of">
                            <button class="gq xv rounded-full">
                                <span class="d">Menu</span>
                                <svg class="os sf du" viewBox="0 0 32 32">
                                    <circle cx="16" cy="16" r="2"></circle>
                                    <circle cx="10" cy="16" r="2"></circle>
                                    <circle cx="22" cy="16" r="2"></circle>
                                </svg>
                            </button>
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
                            <div class="flex items-center y">
                                <button>
                                    <svg class="oo sl ub du yf" viewBox="0 0 16 16">
                                        <path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path>
                                    </svg>
                                </button>
                            </div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="flex items-center">
                                <div class="od sy ub mr-2 _b">
                                    <img class="rounded-full" src="./images/user-36-02.jpg" width="40" height="40" alt="User 02">
                                </div>
                                <div class="gp text-slate-800">Dominik Lamakani</div>
                            </div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gt">dominik.lamakani@gmail.com</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gt">🇩🇪 Dortmund, DE</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gn">77</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gt gp yv">#779912</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gt gp yt">$14,767.04</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gn">4</div>
                        </td>
                        <td class="vi wy w_ vo lm of">
                            <button class="gq xv rounded-full">
                                <span class="d">Menu</span>
                                <svg class="os sf du" viewBox="0 0 32 32">
                                    <circle cx="16" cy="16" r="2"></circle>
                                    <circle cx="10" cy="16" r="2"></circle>
                                    <circle cx="22" cy="16" r="2"></circle>
                                </svg>
                            </button>
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
                            <div class="flex items-center y">
                                <button>
                                    <svg class="oo sl ub du yn" viewBox="0 0 16 16">
                                        <path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path>
                                    </svg>
                                </button>
                            </div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="flex items-center">
                                <div class="od sy ub mr-2 _b">
                                    <img class="rounded-full" src="./images/user-36-03.jpg" width="40" height="40" alt="User 03">
                                </div>
                                <div class="gp text-slate-800">Ivan Mesaros</div>
                            </div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gt">imivanmes@gmail.com</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gt">🇫🇷 Paris, FR</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gn">44</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gt gp yv">#889924</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gt gp yt">$4,996.00</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gn">1</div>
                        </td>
                        <td class="vi wy w_ vo lm of">
                            <button class="gq xv rounded-full">
                                <span class="d">Menu</span>
                                <svg class="os sf du" viewBox="0 0 32 32">
                                    <circle cx="16" cy="16" r="2"></circle>
                                    <circle cx="10" cy="16" r="2"></circle>
                                    <circle cx="22" cy="16" r="2"></circle>
                                </svg>
                            </button>
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
                            <div class="flex items-center y">
                                <button>
                                    <svg class="oo sl ub du yf" viewBox="0 0 16 16">
                                        <path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path>
                                    </svg>
                                </button>
                            </div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="flex items-center">
                                <div class="od sy ub mr-2 _b">
                                    <img class="rounded-full" src="./images/user-36-04.jpg" width="40" height="40" alt="User 04">
                                </div>
                                <div class="gp text-slate-800">Maria Martinez</div>
                            </div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gt">martinezhome@gmail.com</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gt">🇮🇹 Bologna, IT</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gn">29</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gt gp yv">#897726</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gt gp yt">$3,220.66</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gn">2</div>
                        </td>
                        <td class="vi wy w_ vo lm of">
                            <button class="gq xv rounded-full">
                                <span class="d">Menu</span>
                                <svg class="os sf du" viewBox="0 0 32 32">
                                    <circle cx="16" cy="16" r="2"></circle>
                                    <circle cx="10" cy="16" r="2"></circle>
                                    <circle cx="22" cy="16" r="2"></circle>
                                </svg>
                            </button>
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
                            <div class="flex items-center y">
                                <button>
                                    <svg class="oo sl ub du yn" viewBox="0 0 16 16">
                                        <path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path>
                                    </svg>
                                </button>
                            </div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="flex items-center">
                                <div class="od sy ub mr-2 _b">
                                    <img class="rounded-full" src="./images/user-36-05.jpg" width="40" height="40" alt="User 05">
                                </div>
                                <div class="gp text-slate-800">Vicky Jung</div>
                            </div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gt">itsvicky@contact.com</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gt">🇬🇧 London, UK</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gn">22</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gt gp yv">#123567</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gt gp yt">$2,890.66</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gn">-</div>
                        </td>
                        <td class="vi wy w_ vo lm of">
                            <button class="gq xv rounded-full">
                                <span class="d">Menu</span>
                                <svg class="os sf du" viewBox="0 0 32 32">
                                    <circle cx="16" cy="16" r="2"></circle>
                                    <circle cx="10" cy="16" r="2"></circle>
                                    <circle cx="22" cy="16" r="2"></circle>
                                </svg>
                            </button>
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
                            <div class="flex items-center y">
                                <button>
                                    <svg class="oo sl ub du yn" viewBox="0 0 16 16">
                                        <path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path>
                                    </svg>
                                </button>
                            </div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="flex items-center">
                                <div class="od sy ub mr-2 _b">
                                    <img class="rounded-full" src="./images/user-36-06.jpg" width="40" height="40" alt="User 06">
                                </div>
                                <div class="gp text-slate-800">Tisho Yanchev</div>
                            </div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gt">tisho.y@kurlytech.com</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gt">🇬🇧 London, UK</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gn">14</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gt gp yv">#896644</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gt gp yt">$1,649.99</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gn">1</div>
                        </td>
                        <td class="vi wy w_ vo lm of">
                            <button class="gq xv rounded-full">
                                <span class="d">Menu</span>
                                <svg class="os sf du" viewBox="0 0 32 32">
                                    <circle cx="16" cy="16" r="2"></circle>
                                    <circle cx="10" cy="16" r="2"></circle>
                                    <circle cx="22" cy="16" r="2"></circle>
                                </svg>
                            </button>
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
                            <div class="flex items-center y">
                                <button>
                                    <svg class="oo sl ub du yn" viewBox="0 0 16 16">
                                        <path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path>
                                    </svg>
                                </button>
                            </div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="flex items-center">
                                <div class="od sy ub mr-2 _b">
                                    <img class="rounded-full" src="./images/user-36-07.jpg" width="40" height="40" alt="User 07">
                                </div>
                                <div class="gp text-slate-800">James Cameron</div>
                            </div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gt">james.ceo@james.tech</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gt">🇫🇷 Marseille, FR</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gn">34</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gt gp yv">#136988</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gt gp yt">$3,569.87</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gn">2</div>
                        </td>
                        <td class="vi wy w_ vo lm of">
                            <button class="gq xv rounded-full">
                                <span class="d">Menu</span>
                                <svg class="os sf du" viewBox="0 0 32 32">
                                    <circle cx="16" cy="16" r="2"></circle>
                                    <circle cx="10" cy="16" r="2"></circle>
                                    <circle cx="22" cy="16" r="2"></circle>
                                </svg>
                            </button>
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
                            <div class="flex items-center y">
                                <button>
                                    <svg class="oo sl ub du yf" viewBox="0 0 16 16">
                                        <path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path>
                                    </svg>
                                </button>
                            </div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="flex items-center">
                                <div class="od sy ub mr-2 _b">
                                    <img class="rounded-full" src="./images/user-36-08.jpg" width="40" height="40" alt="User 08">
                                </div>
                                <div class="gp text-slate-800">Haruki Masuno</div>
                            </div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gt">haruki@supermail.jp</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gt">🇯🇵 Tokio, JP</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gn">112</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gt gp yv">#442206</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gt gp yt">$19,246.07</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gn">6</div>
                        </td>
                        <td class="vi wy w_ vo lm of">
                            <button class="gq xv rounded-full">
                                <span class="d">Menu</span>
                                <svg class="os sf du" viewBox="0 0 32 32">
                                    <circle cx="16" cy="16" r="2"></circle>
                                    <circle cx="10" cy="16" r="2"></circle>
                                    <circle cx="22" cy="16" r="2"></circle>
                                </svg>
                            </button>
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
                            <div class="flex items-center y">
                                <button>
                                    <svg class="oo sl ub du yn" viewBox="0 0 16 16">
                                        <path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path>
                                    </svg>
                                </button>
                            </div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="flex items-center">
                                <div class="od sy ub mr-2 _b">
                                    <img class="rounded-full" src="./images/user-36-09.jpg" width="40" height="40" alt="User 09">
                                </div>
                                <div class="gp text-slate-800">Joe Huang</div>
                            </div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gt">joehuang@hotmail.com</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gt">🇨🇳 Shanghai, CN</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gn">64</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gt gp yv">#764321</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gt gp yt">$12,276.92</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gn">-</div>
                        </td>
                        <td class="vi wy w_ vo lm of">
                            <button class="gq xv rounded-full">
                                <span class="d">Menu</span>
                                <svg class="os sf du" viewBox="0 0 32 32">
                                    <circle cx="16" cy="16" r="2"></circle>
                                    <circle cx="10" cy="16" r="2"></circle>
                                    <circle cx="22" cy="16" r="2"></circle>
                                </svg>
                            </button>
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
                            <div class="flex items-center y">
                                <button>
                                    <svg class="oo sl ub du yf" viewBox="0 0 16 16">
                                        <path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path>
                                    </svg>
                                </button>
                            </div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="flex items-center">
                                <div class="od sy ub mr-2 _b">
                                    <img class="rounded-full" src="./images/user-36-05.jpg" width="40" height="40" alt="User 10">
                                </div>
                                <div class="gp text-slate-800">Carolyn McNeail</div>
                            </div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gt">carolynlove@gmail.com</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gt">🇮🇹 Milan, IT</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gn">19</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gt gp yv">#908764</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gt gp yt">$1,289.97</div>
                        </td>
                        <td class="vi wy w_ vo lm">
                            <div class="gn">2</div>
                        </td>
                        <td class="vi wy w_ vo lm of">
                            <button class="gq xv rounded-full">
                                <span class="d">Menu</span>
                                <svg class="os sf du" viewBox="0 0 32 32">
                                    <circle cx="16" cy="16" r="2"></circle>
                                    <circle cx="10" cy="16" r="2"></circle>
                                    <circle cx="22" cy="16" r="2"></circle>
                                </svg>
                            </button>
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