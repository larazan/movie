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
                        <div>
                            <h2 class="gu text-slate-800 font-bold ri">Billing &amp; Invoices</h2>
                            <div class="text-sm">This workspace’s Basic Plan is set to <strong class="gp">$34</strong> per month and will renew on <strong class="gp">July 9, 2021</strong>.</div>
                        </div>

                        <!-- Billing Information -->
                        <section>
                            <h3 class="gf gb text-slate-800 font-bold rt">Billing Information</h3>
                            <ul>
                                <li class="q_ zm zp vo cs border-slate-200">
                                    <!-- Left -->
                                    <div class="text-sm text-slate-800 gp">Payment Method</div>
                                    <!-- Right -->
                                    <div class="text-sm text-slate-800ml-4">
                                        <span class="ra">Mastercard ending 9282</span>
                                        <a class="gp text-indigo-500 xh" href="#0">Edit</a>
                                    </div>
                                </li>
                                <li class="q_ zm zp vo cs border-slate-200">
                                    <!-- Left -->
                                    <div class="text-sm text-slate-800 gp">Billing Interval</div>
                                    <!-- Right -->
                                    <div class="text-sm text-slate-800ml-4">
                                        <span class="ra">Annually</span>
                                        <a class="gp text-indigo-500 xh" href="#0">Edit</a>
                                    </div>
                                </li>
                                <li class="q_ zm zp vo cs border-slate-200">
                                    <!-- Left -->
                                    <div class="text-sm text-slate-800 gp">VAT/GST Number</div>
                                    <!-- Right -->
                                    <div class="text-sm text-slate-800ml-4">
                                        <span class="ra">UK849700927</span>
                                        <a class="gp text-indigo-500 xh" href="#0">Edit</a>
                                    </div>
                                </li>
                                <li class="q_ zm zp vo cs border-slate-200">
                                    <!-- Left -->
                                    <div class="text-sm text-slate-800 gp">Your Address</div>
                                    <!-- Right -->
                                    <div class="text-sm text-slate-800ml-4">
                                        <span class="ra">34 Savoy Street, London, UK, 24E8X</span>
                                        <a class="gp text-indigo-500 xh" href="#0">Edit</a>
                                    </div>
                                </li>
                                <li class="q_ zm zp vo cs border-slate-200">
                                    <!-- Left -->
                                    <div class="text-sm text-slate-800 gp">Billing Address</div>
                                    <!-- Right -->
                                    <div class="text-sm text-slate-800ml-4">
                                        <span class="ra">hello@cruip.com</span>
                                        <a class="gp text-indigo-500 xh" href="#0">Edit</a>
                                    </div>
                                </li>
                            </ul>
                        </section>

                        <!-- Invoices -->
                        <section>
                            <h3 class="gf gb text-slate-800 font-bold rt">Invoices</h3>
                            <!-- Table -->
                            <table class="ux ou">
                                <!-- Table header -->
                                <thead class="go gv gq">
                                    <tr class="flex flex-wrap qq md:flex-no-wrap">
                                        <th class="ou block zt qj vr">
                                            <div class="gh gt">Year</div>
                                        </th>
                                        <th class="ou hidden zt qj vr">
                                            <div class="gh gt">Plan</div>
                                        </th>
                                        <th class="ou hidden zt qj vr">
                                            <div class="gh gt">Amount</div>
                                        </th>
                                        <th class="ou hidden zt qj vr">
                                            <div class="gh gr"></div>
                                        </th>
                                    </tr>
                                </thead>
                                <!-- Table body -->
                                <tbody class="text-sm">
                                    <!-- Row -->
                                    <tr class="flex flex-wrap qq md:flex-no-wrap cs border-slate-200 vr tet">
                                        <td class="ou block zt qj vd ten">
                                            <div class="gt gp text-slate-800">2021</div>
                                        </td>
                                        <td class="ou block zt qj vd ten">
                                            <div class="gt">Basic Plan - Annualy</div>
                                        </td>
                                        <td class="ou block zt qj vd ten">
                                            <div class="gt gp">$349.00</div>
                                        </td>
                                        <td class="ou block zt qj vd ten">
                                            <div class="gr flex items-center zv">
                                                <a class="gp text-indigo-500 xh" href="#0">HTML</a>
                                                <span class="block of sl hu nf" aria-hidden="true"></span>
                                                <a class="gp text-indigo-500 xh" href="#0">PDF</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Row -->
                                    <tr class="flex flex-wrap qq md:flex-no-wrap cs border-slate-200 vr tet">
                                        <td class="ou block zt qj vd ten">
                                            <div class="gt gp text-slate-800">2020</div>
                                        </td>
                                        <td class="ou block zt qj vd ten">
                                            <div class="gt">Basic Plan - Annualy</div>
                                        </td>
                                        <td class="ou block zt qj vd ten">
                                            <div class="gt gp">$349.00</div>
                                        </td>
                                        <td class="ou block zt qj vd ten">
                                            <div class="gr flex items-center zv">
                                                <a class="gp text-indigo-500 xh" href="#0">HTML</a>
                                                <span class="block of sl hu nf" aria-hidden="true"></span>
                                                <a class="gp text-indigo-500 xh" href="#0">PDF</a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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