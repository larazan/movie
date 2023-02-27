<x-app-layout>

    <div class="vs jj ttm vl ou uf na">

        <!-- Page header -->
        <div class="rc">

            <!-- Title -->
            <h1 class="gu teu text-slate-800 font-bold">Account Settings ✨</h1>

        </div>

        <div class="bg-white bd rounded-sm rc">
            <div class="flex ak zc qv">

                <!-- Sidebar -->
                <x-settings.settings-navigation />

                <!-- Panel -->
                <div class="uw">

                    <!-- Panel body -->
                    <div class="d_ fd">

                        <!-- Plans -->
                        <section>
                            <div class="rc">
                                <h2 class="gu text-slate-800 font-bold ri">Plans</h2>
                                <div class="text-sm">This workspace’s Basic Plan is set to <strong class="gp">$34</strong> per month and will renew on <strong class="gp">July 9, 2021</strong>.</div>
                            </div>

                            <!-- Pricing -->
                            <div x-data="{ annual: true }">
                                <!-- Toggle switch -->
                                <div class="flex items-center fl rh">
                                    <div class="text-sm text-slate-500 gp">Monthly</div>
                                    <div class="c">
                                        <input type="checkbox" id="toggle" class="d" x-model="annual">
                                        <label class="h_" for="toggle">
                                            <span class="bg-white bv" aria-hidden="true"></span>
                                            <span class="d">Pay annually</span>
                                        </label>
                                    </div>
                                    <div class="text-sm text-slate-500 gp">Annually <span class="yt">(-20%)</span></div>
                                </div>
                                <!-- Pricing tabs -->
                                <div class="sn ag fn">
                                    <!-- Tab 1 -->
                                    <div class="y tz tns bg-white shadow-md rounded-sm border border-slate-200">
                                        <div class="g k x q s_ hd" aria-hidden="true"></div>
                                        <div class="vc mb mp cs border-slate-200">
                                            <header class="flex items-center ru">
                                                <div class="oi so rounded-full ub pc pv pz ra">
                                                    <svg class="oi so du ye" viewBox="0 0 24 24">
                                                        <path d="M12 17a.833.833 0 01-.833-.833 3.333 3.333 0 00-3.334-3.334.833.833 0 110-1.666 3.333 3.333 0 003.334-3.334.833.833 0 111.666 0 3.333 3.333 0 003.334 3.334.833.833 0 110 1.666 3.333 3.333 0 00-3.334 3.334c0 .46-.373.833-.833.833z"></path>
                                                    </svg>
                                                </div>
                                                <h3 class="ga text-slate-800 gh">Basic</h3>
                                            </header>
                                            <div class="text-sm ru">Ideal for individuals that need a custom solution with custom tools.</div>
                                            <!-- Price -->
                                            <div class="text-slate-800 font-bold ri">
                                                <span class="gu">$</span><span class="text-3xl" x-text="annual ? '14' : '19'">14</span><span class="text-slate-500 gp text-sm">/mo</span>
                                            </div>
                                            <!-- CTA -->
                                            <button class="btn border-slate-200 hover--border-slate-300 g_ ou">Downgrade</button>
                                        </div>
                                        <div class="vc mc mj">
                                            <div class="go text-slate-800 gh gv ri">What's included</div>
                                            <!-- List -->
                                            <ul>
                                                <li class="flex items-center vf">
                                                    <svg class="w-3 h-3 ub du yt mr-2" viewBox="0 0 12 12">
                                                        <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                                    </svg>
                                                    <div class="text-sm">Lorem ipsum dolor sit amet</div>
                                                </li>
                                                <li class="flex items-center vf">
                                                    <svg class="w-3 h-3 ub du yt mr-2" viewBox="0 0 12 12">
                                                        <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                                    </svg>
                                                    <div class="text-sm">Quis nostrud exercitation</div>
                                                </li>
                                                <li class="flex items-center vf">
                                                    <svg class="w-3 h-3 ub du yt mr-2" viewBox="0 0 12 12">
                                                        <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                                    </svg>
                                                    <div class="text-sm">Lorem ipsum dolor sit amet</div>
                                                </li>
                                                <li class="flex items-center vf">
                                                    <svg class="w-3 h-3 ub du yt mr-2" viewBox="0 0 12 12">
                                                        <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                                    </svg>
                                                    <div class="text-sm">Quis nostrud exercitation</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Tab 2 -->
                                    <div class="y tz tns bg-white shadow-md rounded-sm border border-slate-200">
                                        <div class="g k x q s_ hv" aria-hidden="true"></div>
                                        <div class="vc mb mp cs border-slate-200">
                                            <header class="flex items-center ru">
                                                <div class="oi so rounded-full ub pc pm de ra">
                                                    <svg class="oi so du ye" viewBox="0 0 24 24">
                                                        <path d="M12 17a.833.833 0 01-.833-.833 3.333 3.333 0 00-3.334-3.334.833.833 0 110-1.666 3.333 3.333 0 003.334-3.334.833.833 0 111.666 0 3.333 3.333 0 003.334 3.334.833.833 0 110 1.666 3.333 3.333 0 00-3.334 3.334c0 .46-.373.833-.833.833z"></path>
                                                    </svg>
                                                </div>
                                                <h3 class="ga text-slate-800 gh">Standard</h3>
                                            </header>
                                            <div class="text-sm ru">Ideal for individuals that need a custom solution with custom tools.</div>
                                            <!-- Price -->
                                            <div class="text-slate-800 font-bold ri">
                                                <span class="gu">$</span><span class="text-3xl" x-text="annual ? '34' : '39'">34</span><span class="text-slate-500 gp text-sm">/mo</span>
                                            </div>
                                            <!-- CTA -->
                                            <button class="btn border-slate-200 hi gq ou af flex items-center" disabled="">
                                                <svg class="w-3 h-3 ub du mr-2" viewBox="0 0 12 12">
                                                    <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                                </svg>
                                                <span>Current Plan</span>
                                            </button>
                                        </div>
                                        <div class="vc mc mj">
                                            <div class="go text-slate-800 gh gv ri">What's included</div>
                                            <!-- List -->
                                            <ul>
                                                <li class="flex items-center vf">
                                                    <svg class="w-3 h-3 ub du yt mr-2" viewBox="0 0 12 12">
                                                        <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                                    </svg>
                                                    <div class="text-sm">Lorem ipsum dolor sit amet</div>
                                                </li>
                                                <li class="flex items-center vf">
                                                    <svg class="w-3 h-3 ub du yt mr-2" viewBox="0 0 12 12">
                                                        <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                                    </svg>
                                                    <div class="text-sm">Quis nostrud exercitation</div>
                                                </li>
                                                <li class="flex items-center vf">
                                                    <svg class="w-3 h-3 ub du yt mr-2" viewBox="0 0 12 12">
                                                        <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                                    </svg>
                                                    <div class="text-sm">Lorem ipsum dolor sit amet</div>
                                                </li>
                                                <li class="flex items-center vf">
                                                    <svg class="w-3 h-3 ub du yt mr-2" viewBox="0 0 12 12">
                                                        <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                                    </svg>
                                                    <div class="text-sm">Quis nostrud exercitation</div>
                                                </li>
                                                <li class="flex items-center vf">
                                                    <svg class="w-3 h-3 ub du yt mr-2" viewBox="0 0 12 12">
                                                        <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                                    </svg>
                                                    <div class="text-sm">Lorem ipsum dolor sit amet</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Tab 3 -->
                                    <div class="y tz tns bg-white shadow-md rounded-sm border border-slate-200">
                                        <div class="g k x q s_ ho" aria-hidden="true"></div>
                                        <div class="vc mb mp cs border-slate-200">
                                            <header class="flex items-center ru">
                                                <div class="oi so rounded-full ub pc pd pq ra">
                                                    <svg class="oi so du ye" viewBox="0 0 24 24">
                                                        <path d="M12 17a.833.833 0 01-.833-.833 3.333 3.333 0 00-3.334-3.334.833.833 0 110-1.666 3.333 3.333 0 003.334-3.334.833.833 0 111.666 0 3.333 3.333 0 003.334 3.334.833.833 0 110 1.666 3.333 3.333 0 00-3.334 3.334c0 .46-.373.833-.833.833z"></path>
                                                    </svg>
                                                </div>
                                                <h3 class="ga text-slate-800 gh">Plus</h3>
                                            </header>
                                            <div class="text-sm ru">Ideal for individuals that need a custom solution with custom tools.</div>
                                            <!-- Price -->
                                            <div class="text-slate-800 font-bold ri">
                                                <span class="gu">$</span><span class="text-3xl" x-text="annual ? '74' : '79'">74</span><span class="text-slate-500 gp text-sm">/mo</span>
                                            </div>
                                            <!-- CTA -->
                                            <button class="btn ho xi ye ou">Upgrade</button>
                                        </div>
                                        <div class="vc mc mj">
                                            <div class="go text-slate-800 gh gv ri">What's included</div>
                                            <!-- List -->
                                            <ul>
                                                <li class="flex items-center vf">
                                                    <svg class="w-3 h-3 ub du yt mr-2" viewBox="0 0 12 12">
                                                        <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                                    </svg>
                                                    <div class="text-sm">Lorem ipsum dolor sit amet</div>
                                                </li>
                                                <li class="flex items-center vf">
                                                    <svg class="w-3 h-3 ub du yt mr-2" viewBox="0 0 12 12">
                                                        <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                                    </svg>
                                                    <div class="text-sm">Quis nostrud exercitation</div>
                                                </li>
                                                <li class="flex items-center vf">
                                                    <svg class="w-3 h-3 ub du yt mr-2" viewBox="0 0 12 12">
                                                        <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                                    </svg>
                                                    <div class="text-sm">Lorem ipsum dolor sit amet</div>
                                                </li>
                                                <li class="flex items-center vf">
                                                    <svg class="w-3 h-3 ub du yt mr-2" viewBox="0 0 12 12">
                                                        <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                                    </svg>
                                                    <div class="text-sm">Quis nostrud exercitation</div>
                                                </li>
                                                <li class="flex items-center vf">
                                                    <svg class="w-3 h-3 ub du yt mr-2" viewBox="0 0 12 12">
                                                        <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                                    </svg>
                                                    <div class="text-sm">Lorem ipsum dolor sit amet</div>
                                                </li>
                                                <li class="flex items-center vf">
                                                    <svg class="w-3 h-3 ub du yt mr-2" viewBox="0 0 12 12">
                                                        <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                                    </svg>
                                                    <div class="text-sm">Quis nostrud exercitation</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Contact Sales -->
                        <section>
                            <div class="vc vo hm border he rounded-sm gn tru tnp tnz trt tre">
                                <div class="text-slate-800 gh ru tnc">Looking for different configurations?</div>
                                <button class="btn ho xi ye">Contact Sales</button>
                            </div>
                        </section>

                        <!-- FAQs -->
                        <section>
                            <div class="nb">
                                <h2 class="gu text-slate-800 font-bold">FAQs</h2>
                            </div>
                            <ul class="fj">
                                <li>
                                    <div class="gh text-slate-800 rt">
                                        What is the difference between the three versions?
                                    </div>
                                    <div class="text-sm">
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.
                                    </div>
                                </li>
                                <li>
                                    <div class="gh text-slate-800 rt">
                                        Is there any difference between Basic and Plus licenses?
                                    </div>
                                    <div class="text-sm">
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    </div>
                                </li>
                                <li>
                                    <div class="gh text-slate-800 rt">
                                        Got more questions?
                                    </div>
                                    <div class="text-sm">
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum in voluptate velit esse cillum dolore eu fugiat <a class="gp text-indigo-500 xh" href="#0">contact us</a>.
                                    </div>
                                </li>
                            </ul>
                        </section>

                    </div>

                    <!-- Panel footer -->
                    <footer>
                        <div class="flex ak vm vg co border-slate-200">
                            <div class="flex ls">
                                <button class="btn border-slate-200 hover--border-slate-300 g_">Cancel</button>
                                <button class="btn ho xi ye ml-3">Save Changes</button>
                            </div>
                        </div>
                    </footer>

                </div>

            </div>
        </div>

    </div>

</x-app-layout>