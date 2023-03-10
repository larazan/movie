<div class="bg-white">
            <div x-data="handleSelect">

                <!-- Table -->
                <div class="lf">
                    <table class="ux ou" @click.stop="$dispatch('set-transactionopen', true)">
                        <!-- Table header -->
                        <thead class="go gh gv text-slate-500 co cs border-slate-200">
                            <tr>
                                <th class="vi wy w_ vo lm of">
                                    <div class="flex items-center">
                                        <label class="inline-flex">
                                            <span class="d">Select all</span>
                                            <input id="parent-checkbox" class="i" type="checkbox" @click="toggleAll">
                                        </label>
                                    </div>
                                </th>
                                <th class="vi wy w_ vo lm">
                                    <div class="gh gt">Counterparty</div>
                                </th>
                                <th class="vi wy w_ vo lm">
                                    <div class="gh gt">Payment Date</div>
                                </th>
                                <th class="vi wy w_ vo lm">
                                    <div class="gh gt">Status</div>
                                </th>
                                <th class="vi wy w_ vo lm">
                                    <div class="gh gr">Amount</div>
                                </th>
                            </tr>
                        </thead>
                        <!-- Table body -->
                        <tbody class="text-sm le lr cs border-slate-200">
                            <!-- Row -->
                            <tr>
                                <td class="vi wy w_ vo lm of">
                                    <div class="flex items-center">
                                        <label class="inline-flex">
                                            <span class="d">Select</span>
                                            <input class="table-item i" type="checkbox" @click.stop="uncheckParent">
                                        </label>
                                    </div>
                                </td>
                                <td class="vi wy w_ vo lm zi">
                                    <div class="flex items-center">
                                        <div class="op sv ub mr-2 _b">
                                            <img class="op sv rounded-full" src="./images/transactions-image-01.svg" width="36" height="36" alt="Transaction 01">
                                        </div>
                                        <div class="gp text-slate-800">Form Builder CP</div>
                                    </div>
                                </td>
                                <td class="vi wy w_ vo lm">
                                    <div class="gt">22/01/2022</div>
                                </td>
                                <td class="vi wy w_ vo lm">
                                    <div class="gt">
                                        <div class="go inline-flex gp hi text-slate-500 rounded-full gn vp vf">Pending</div>
                                    </div>
                                </td>
                                <td class="vi wy w_ vo lm of">
                                    <div class="gr gz gp">-$1,299.22</div>
                                </td>
                            </tr>
                            <!-- Row -->
                            <tr>
                                <td class="vi wy w_ vo lm of">
                                    <div class="flex items-center">
                                        <label class="inline-flex">
                                            <span class="d">Select</span>
                                            <input class="table-item i" type="checkbox" @click.stop="uncheckParent">
                                        </label>
                                    </div>
                                </td>
                                <td class="vi wy w_ vo lm zi">
                                    <div class="flex items-center">
                                        <div class="op sv ub mr-2 _b">
                                            <img class="op sv rounded-full" src="./images/transactions-image-02.svg" width="36" height="36" alt="Transaction 02">
                                        </div>
                                        <div class="gp text-slate-800">Imperial Hotel ****</div>
                                    </div>
                                </td>
                                <td class="vi wy w_ vo lm">
                                    <div class="gt">22/01/2022</div>
                                </td>
                                <td class="vi wy w_ vo lm">
                                    <div class="gt">
                                        <div class="go inline-flex gp hc ys rounded-full gn vp vf">Completed</div>
                                    </div>
                                </td>
                                <td class="vi wy w_ vo lm of">
                                    <div class="gr gz gp">-$1,029.77</div>
                                </td>
                            </tr>
                            <!-- Row -->
                            <tr>
                                <td class="vi wy w_ vo lm of">
                                    <div class="flex items-center">
                                        <label class="inline-flex">
                                            <span class="d">Select</span>
                                            <input class="table-item i" type="checkbox" @click.stop="uncheckParent">
                                        </label>
                                    </div>
                                </td>
                                <td class="vi wy w_ vo lm zi">
                                    <div class="flex items-center">
                                        <div class="op sv ub mr-2 _b">
                                            <img class="op sv rounded-full" src="./images/user-36-05.jpg" width="36" height="36" alt="Transaction 03">
                                        </div>
                                        <div class="gp text-slate-800">Aprilynne Pills</div>
                                    </div>
                                </td>
                                <td class="vi wy w_ vo lm">
                                    <div class="gt">22/01/2022</div>
                                </td>
                                <td class="vi wy w_ vo lm">
                                    <div class="gt">
                                        <div class="go inline-flex gp hi text-slate-500 rounded-full gn vp vf">Pending</div>
                                    </div>
                                </td>
                                <td class="vi wy w_ vo lm of">
                                    <div class="gr yt gp">+$499.99</div>
                                </td>
                            </tr>
                            <!-- Row -->
                            <tr>
                                <td class="vi wy w_ vo lm of">
                                    <div class="flex items-center">
                                        <label class="inline-flex">
                                            <span class="d">Select</span>
                                            <input class="table-item i" type="checkbox" @click.stop="uncheckParent">
                                        </label>
                                    </div>
                                </td>
                                <td class="vi wy w_ vo lm zi">
                                    <div class="flex items-center">
                                        <div class="op sv ub mr-2 _b">
                                            <img class="op sv rounded-full" src="./images/transactions-image-03.svg" width="36" height="36" alt="Transaction 03">
                                        </div>
                                        <div class="gp text-slate-800">Google Limited UK</div>
                                    </div>
                                </td>
                                <td class="vi wy w_ vo lm">
                                    <div class="gt">22/01/2022</div>
                                </td>
                                <td class="vi wy w_ vo lm">
                                    <div class="gt">
                                        <div class="go inline-flex gp hc ys rounded-full gn vp vf">Completed</div>
                                    </div>
                                </td>
                                <td class="vi wy w_ vo lm of">
                                    <div class="gr gz gp">-$1,029.77</div>
                                </td>
                            </tr>
                            <!-- Row -->
                            <tr>
                                <td class="vi wy w_ vo lm of">
                                    <div class="flex items-center">
                                        <label class="inline-flex">
                                            <span class="d">Select</span>
                                            <input class="table-item i" type="checkbox" @click.stop="uncheckParent">
                                        </label>
                                    </div>
                                </td>
                                <td class="vi wy w_ vo lm zi">
                                    <div class="flex items-center">
                                        <div class="op sv ub mr-2 _b">
                                            <img class="op sv rounded-full" src="./images/transactions-image-04.svg" width="36" height="36" alt="Transaction 04">
                                        </div>
                                        <div class="gp text-slate-800">Acme LTD UK</div>
                                    </div>
                                </td>
                                <td class="vi wy w_ vo lm">
                                    <div class="gt">22/01/2022</div>
                                </td>
                                <td class="vi wy w_ vo lm">
                                    <div class="gt">
                                        <div class="go inline-flex gp hi text-slate-500 rounded-full gn vp vf">Pending</div>
                                    </div>
                                </td>
                                <td class="vi wy w_ vo lm of">
                                    <div class="gr yt gp">+$2,179.36</div>
                                </td>
                            </tr>
                            <!-- Row -->
                            <tr>
                                <td class="vi wy w_ vo lm of">
                                    <div class="flex items-center">
                                        <label class="inline-flex">
                                            <span class="d">Select</span>
                                            <input class="table-item i" type="checkbox" @click.stop="uncheckParent">
                                        </label>
                                    </div>
                                </td>
                                <td class="vi wy w_ vo lm zi">
                                    <div class="flex items-center">
                                        <div class="op sv ub mr-2 _b">
                                            <img class="op sv rounded-full" src="./images/transactions-image-03.svg" width="36" height="36" alt="Transaction 03">
                                        </div>
                                        <div class="gp text-slate-800">Google Limited UK</div>
                                    </div>
                                </td>
                                <td class="vi wy w_ vo lm">
                                    <div class="gt">22/01/2022</div>
                                </td>
                                <td class="vi wy w_ vo lm">
                                    <div class="gt">
                                        <div class="go inline-flex gp hf yl rounded-full gn vp vf">Canceled</div>
                                    </div>
                                </td>
                                <td class="vi wy w_ vo lm of">
                                    <div class="gr gz gp">-$1,029.77</div>
                                </td>
                            </tr>
                            <!-- Row -->
                            <tr>
                                <td class="vi wy w_ vo lm of">
                                    <div class="flex items-center">
                                        <label class="inline-flex">
                                            <span class="d">Select</span>
                                            <input class="table-item i" type="checkbox" @click.stop="uncheckParent">
                                        </label>
                                    </div>
                                </td>
                                <td class="vi wy w_ vo lm zi">
                                    <div class="flex items-center">
                                        <div class="op sv ub mr-2 _b">
                                            <img class="op sv rounded-full" src="./images/transactions-image-05.svg" width="36" height="36" alt="Transaction 05">
                                        </div>
                                        <div class="gp text-slate-800">Uber</div>
                                    </div>
                                </td>
                                <td class="vi wy w_ vo lm">
                                    <div class="gt">22/01/2022</div>
                                </td>
                                <td class="vi wy w_ vo lm">
                                    <div class="gt">
                                        <div class="go inline-flex gp hc ys rounded-full gn vp vf">Completed</div>
                                    </div>
                                </td>
                                <td class="vi wy w_ vo lm of">
                                    <div class="gr gz gp">-$272.88</div>
                                </td>
                            </tr>
                            <!-- Row -->
                            <tr>
                                <td class="vi wy w_ vo lm of">
                                    <div class="flex items-center">
                                        <label class="inline-flex">
                                            <span class="d">Select</span>
                                            <input class="table-item i" type="checkbox" @click.stop="uncheckParent">
                                        </label>
                                    </div>
                                </td>
                                <td class="vi wy w_ vo lm zi">
                                    <div class="flex items-center">
                                        <div class="op sv ub mr-2 _b">
                                            <img class="op sv rounded-full" src="./images/transactions-image-06.svg" width="36" height="36" alt="Transaction 06">
                                        </div>
                                        <div class="gp text-slate-800">PublicOne Inc.</div>
                                    </div>
                                </td>
                                <td class="vi wy w_ vo lm">
                                    <div class="gt">22/01/2022</div>
                                </td>
                                <td class="vi wy w_ vo lm">
                                    <div class="gt">
                                        <div class="go inline-flex gp hc ys rounded-full gn vp vf">Completed</div>
                                    </div>
                                </td>
                                <td class="vi wy w_ vo lm of">
                                    <div class="gr gz gp">-$199.87</div>
                                </td>
                            </tr>
                            <!-- Row -->
                            <tr>
                                <td class="vi wy w_ vo lm of">
                                    <div class="flex items-center">
                                        <label class="inline-flex">
                                            <span class="d">Select</span>
                                            <input class="table-item i" type="checkbox" @click.stop="uncheckParent">
                                        </label>
                                    </div>
                                </td>
                                <td class="vi wy w_ vo lm zi">
                                    <div class="flex items-center">
                                        <div class="op sv ub mr-2 _b">
                                            <img class="op sv rounded-full" src="./images/transactions-image-07.svg" width="36" height="36" alt="Transaction 07">
                                        </div>
                                        <div class="gp text-slate-800">Github Inc.</div>
                                    </div>
                                </td>
                                <td class="vi wy w_ vo lm">
                                    <div class="gt">22/01/2022</div>
                                </td>
                                <td class="vi wy w_ vo lm">
                                    <div class="gt">
                                        <div class="go inline-flex gp hc ys rounded-full gn vp vf">Completed</div>
                                    </div>
                                </td>
                                <td class="vi wy w_ vo lm of">
                                    <div class="gr gz gp">-$42.87</div>
                                </td>
                            </tr>
                            <!-- Row -->
                            <tr>
                                <td class="vi wy w_ vo lm of">
                                    <div class="flex items-center">
                                        <label class="inline-flex">
                                            <span class="d">Select</span>
                                            <input class="table-item i" type="checkbox" @click.stop="uncheckParent">
                                        </label>
                                    </div>
                                </td>
                                <td class="vi wy w_ vo lm zi">
                                    <div class="flex items-center">
                                        <div class="op sv ub mr-2 _b">
                                            <img class="op sv rounded-full" src="./images/transactions-image-08.svg" width="36" height="36" alt="Transaction 07">
                                        </div>
                                        <div class="gp text-slate-800">Form Builder PRO</div>
                                    </div>
                                </td>
                                <td class="vi wy w_ vo lm">
                                    <div class="gt">22/01/2022</div>
                                </td>
                                <td class="vi wy w_ vo lm">
                                    <div class="gt">
                                        <div class="go inline-flex gp hc ys rounded-full gn vp vf">Completed</div>
                                    </div>
                                </td>
                                <td class="vi wy w_ vo lm of">
                                    <div class="gr gz gp">-$112.44</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>