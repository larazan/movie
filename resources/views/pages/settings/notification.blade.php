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
                <h2 class="gu text-slate-800 font-bold ii">My Notifications</h2>

                <!-- General -->
                <section>
                    <h3 class="gf gb text-slate-800 font-bold rt">General</h3>
                    <ul>
                        <li class="flex fe items-center vo cs border-slate-200">
                            <!-- Left -->
                            <div>
                                <div class="text-slate-800 gh">Comments and replies</div>
                                <div class="text-sm">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</div>
                            </div>
                            <!-- Right -->
                            <div class="flex items-center rs" x-data="{ checked: true }">
                                <div class="text-sm gq gm mr-2" x-text="checked ? 'On' : 'Off'">On</div>
                                <div class="c">
                                    <input type="checkbox" id="comments" class="d" x-model="checked">
                                    <label class="h_" for="comments">
                                        <span class="bg-white bv" aria-hidden="true"></span>
                                        <span class="d">Enable smart sync</span>
                                    </label>
                                </div>
                            </div>
                        </li>
                        <li class="flex fe items-center vo cs border-slate-200">
                            <!-- Left -->
                            <div>
                                <div class="text-slate-800 gh">Messages</div>
                                <div class="text-sm">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</div>
                            </div>
                            <!-- Right -->
                            <div class="flex items-center rs" x-data="{ checked: true }">
                                <div class="text-sm gq gm mr-2" x-text="checked ? 'On' : 'Off'">On</div>
                                <div class="c">
                                    <input type="checkbox" id="messages" class="d" x-model="checked">
                                    <label class="h_" for="messages">
                                        <span class="bg-white bv" aria-hidden="true"></span>
                                        <span class="d">Enable smart sync</span>
                                    </label>
                                </div>
                            </div>
                        </li>
                        <li class="flex fe items-center vo cs border-slate-200">
                            <!-- Left -->
                            <div>
                                <div class="text-slate-800 gh">Mentions</div>
                                <div class="text-sm">Excepteur sint occaecat cupidatat non in culpa qui officia deserunt mollit.</div>
                            </div>
                            <!-- Right -->
                            <div class="flex items-center rs" x-data="{ checked: false }">
                                <div class="text-sm gq gm mr-2" x-text="checked ? 'On' : 'Off'">Off</div>
                                <div class="c">
                                    <input type="checkbox" id="mentions" class="d" x-model="checked">
                                    <label class="h_" for="mentions">
                                        <span class="bg-white bv" aria-hidden="true"></span>
                                        <span class="d">Enable smart sync</span>
                                    </label>
                                </div>
                            </div>
                        </li>
                    </ul>
                </section>

                <!-- Shares -->
                <section>
                    <h3 class="gf gb text-slate-800 font-bold rt">Shares</h3>
                    <ul>
                        <li class="flex fe items-center vo cs border-slate-200">
                            <!-- Left -->
                            <div>
                                <div class="text-slate-800 gh">Shares of my content</div>
                                <div class="text-sm">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</div>
                            </div>
                            <!-- Right -->
                            <div class="flex items-center rs">
                                <button class="r border-slate-200 hover--border-slate-300 bv">Manage</button>
                            </div>
                        </li>
                        <li class="flex fe items-center vo cs border-slate-200">
                            <!-- Left -->
                            <div>
                                <div class="text-slate-800 gh">Team invites</div>
                                <div class="text-sm">Excepteur sint occaecat cupidatat non in culpa qui officia deserunt mollit.</div>
                            </div>
                            <!-- Right -->
                            <div class="flex items-center rs">
                                <button class="r border-slate-200 hover--border-slate-300 bv">Manage</button>
                            </div>
                        </li>
                        <li class="flex fe items-center vo cs border-slate-200">
                            <!-- Left -->
                            <div>
                                <div class="text-slate-800 gh">Smart connection</div>
                                <div class="text-sm">Excepteur sint occaecat cupidatat non in culpa qui officia deserunt mollit.</div>
                            </div>
                            <!-- Right -->
                            <div class="flex items-center rs">
                                <div class="text-sm gq gm mr-2 hidden qx">Active</div>
                                <button class="r border-slate-200 hover--border-slate-300 bv yl">Disable</button>
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