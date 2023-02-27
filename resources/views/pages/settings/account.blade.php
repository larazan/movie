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
                        <h2 class="gu text-slate-800 font-bold ii">My Account</h2>

                        <!-- Picture -->
                        <section>
                            <div class="flex items-center">
                                <div class="mr-4">
                                    <img class="ue sg rounded-full" src="{{ asset('images/user-36-01.jpg') }}" width="80" height="80" alt="User upload">
                                </div>
                                <button class="r ho xi ye">Change</button>
                            </div>
                        </section>

                        <!-- Business Profile -->
                        <section>
                            <h3 class="gf gb text-slate-800 font-bold rt">Business Profile</h3>
                            <div class="text-sm">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</div>
                            <div class="je jc fg jm jb rw">
                                <div class="jr">
                                    <label class="block text-sm gp rt" for="name">Business Name</label>
                                    <input id="name" class="s ou" type="text" value="Acme Inc.">
                                </div>
                                <div class="jr">
                                    <label class="block text-sm gp rt" for="business-id">Business ID</label>
                                    <input id="business-id" class="s ou" type="text" value="Kz4tSEqtUmA">
                                </div>
                                <div class="jr">
                                    <label class="block text-sm gp rt" for="location">Location</label>
                                    <input id="location" class="s ou" type="text" value="London, UK">
                                </div>
                            </div>
                        </section>

                        <!-- Email -->
                        <section>
                            <h3 class="gf gb text-slate-800 font-bold rt">Email</h3>
                            <div class="text-sm">Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia.</div>
                            <div class="flex flex-wrap rw">
                                <div class="mr-2">
                                    <label class="d" for="email">Business email</label>
                                    <input id="email" class="s" type="email" value="admin@acmeinc.com">
                                </div>
                                <button class="btn border-slate-200 hover--border-slate-300 bv text-indigo-500">Change</button>
                            </div>
                        </section>

                        <!-- Password -->
                        <section>
                            <h3 class="gf gb text-slate-800 font-bold rt">Password</h3>
                            <div class="text-sm">You can set a permanent password if you don't want to use temporary login codes.</div>
                            <div class="rw">
                                <button class="btn border-slate-200 bv text-indigo-500">Set New Password</button>
                            </div>
                        </section>

                        <!-- Smart Sync -->
                        <section>
                            <h3 class="gf gb text-slate-800 font-bold rt">Smart Sync update for Mac</h3>
                            <div class="flex items-center rw" x-data="{ checked: true }">
                                <div class="c">
                                    <input type="checkbox" id="toggle" class="d" x-model="checked">
                                    <label class="h_" for="toggle">
                                        <span class="bg-white bv" aria-hidden="true"></span>
                                        <span class="d">Enable smart sync</span>
                                    </label>
                                </div>
                                <div class="text-sm gq gm nq" x-text="checked ? 'On' : 'Off'">On</div>
                            </div>
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