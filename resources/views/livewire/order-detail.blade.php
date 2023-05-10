<div class="vs jj ttm vl ou uf na">

    <!-- Page header -->
    <div class="je jd jc ii">

        <!-- Left: Title -->
        <div class="ri _y">
            <h1 class="gu teu text-slate-800 font-bold">Order ✨</h1>
        </div>

        <!-- Right: Actions -->
        <div class="sn am jo az jp ft">

            <select wire:model="sort" id="sort" class="a">
                <option value="asc">Asc</option>
                <option value="desc">Desc</option>
            </select>

            <select wire:model="perPage" id="filter" class="a">
                <option value="5">5 Per Page</option>
                <option value="10">10 Per Page</option>
                <option value="15">15 Per Page</option>
            </select>

        </div>

    </div>

    <!-- More actions -->
    <div class="je jd jc ii">

        <!-- Left side -->
        <div class="ri _y">

        </div>

        <!-- Right side -->
        <div class="sn am jo az jp ft">

            <!-- Create music button -->
            <button class="btn bg-green-600 ye" wire:click="showCreateModal">
                <span class="hidden trm nq">Save</span>
            </button>
            <button class="btn ho xi ye" wire:click="showCreateModal">
                <span class="hidden trm nq">Print</span>
            </button>
        </div>

    </div>

    <div class="w-full bg-white lg:w-full xl:w-2/3 lg:mt-20 lg:mb-20 lg:shadow-xl xl:mt-02 xl:mb-20 xl:shadow-xl print:transform print:scale-90">
        <header class="flex flex-col pt-20 bg-white ">
            <div class="flex justify-between items-center mt-12 mb-2 ml-0 text-lg font-bold print:text-2xl">
                <div class="flex flex-col">
                    <div class="flex items-center">
                        <span class="mr-2 text-sm">INVOICE</span>
                        <span id="invoice_id" class="text-green-700">0196023</span>
                    </div>

                    <div class="flex flex-col text-sm text-slate-500 print:text-sm">
                        <span>Issue date: 2020.09.06</span>
                        <span>Paid date: 2020.09.07</span>
                        <span>Due date: 2020.10.06</span>
                    </div>
                </div>
                <div class="px-8 py-2 text-3xl font-bold text-green-700 border-4 border-green-700 border-dotted md:absolute md:right-0 md:top-0 md:mr-12 lg:absolute lg:right-0 lg:top-0 xl:absolute xl:right-0 xl:top-0 print:absolute print:right-0 print:top-0 lg:mr-20 xl:mr-20 print:mr-2 print:mt-8">PAID</div>
            </div>


            <div class="flex justify-between py-2">
                <div>
                    <span class="font-extrabold md:hidden lg:hidden xl:hidden print:hidden">FROM</span>
                    <div class="flex flex-col">
                        <span id="company-name" class="font-bold">BroHosting</span>
                        <span id="company-country"><span class="flag-icon flag-icon-us"></span> United States</span>
                        <div class="flex-row">
                            <span id="c-city">New York</span>,
                            <span id="c-postal">NY 10023</span>
                        </div>
                        <span id="company-address">98-2 W 67th St</span>
                        <span id="company-phone">+12124567777</span>
                        <span id="company-mail">info@brohosting.us</span>
                    </div>
                </div>
                <div>
                    <span class="mt-12 font-extrabold md:hidden lg:hidden xl:hidden print:hidden">TO</span>
                    <div class="flex flex-col md:absolute md:right-0 md:text-right lg:absolute lg:right-0 lg:text-right print:absolute print:right-0 print:text-right">
                        <span id="person-name" class="font-bold">Cloud Solutions Inc</span>
                        <span id="person-country"><span class="flag-icon flag-icon-hu"></span> Hungary</span>
                        <div class="flex-row">
                            <span id="p-postal">3100</span>
                            <span id="p-city">Salgótarján</span>,
                        </div>
                        <span id="person-address">Rákóczi út 12.</span>
                        <span id="person-phone">+36300000000</span>
                        <span id="person-mail">info@cloudsolutions.hu</span>
                    </div>
                </div>
            </div>
        </header>
        <hr class="border-gray-300 md:mt-8 print:hidden">
        <content>
            <div id="content" class="flex justify-center md:p-8 lg:p-20 xl:p-20 print:p-2">
                <table class="w-full text-left table-auto print:text-sm" id="table-items">
                    <thead>
                        <tr class="text-white bg-gray-700 print:bg-gray-300 print:text-black">
                            <th class="px-4 py-2">Item</th>
                            <th class="px-4 py-2 text-right">Qty</th>
                            <th class="px-4 py-2 text-right">Unit Price</th>
                            <th class="px-4 py-2 text-right">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-4 py-2 border">Shared Hosting - Simple Plan (Monthly)</td>
                            <td class="px-4 py-2 text-right border tabular-nums slashed-zero">1</td>
                            <td class="px-4 py-2 text-right border tabular-nums slashed-zero">$2.45</td>
                            <td class="px-4 py-2 text-right border tabular-nums slashed-zero">$2.45</td>
                        </tr>
                        <tr class="bg-gray-100 print:bg-gray-100">
                            <td class="px-4 py-2 border">Domain Registration - coolstory.bro - (100% Free for First Year)</td>
                            <td class="px-4 py-2 text-right border tabular-nums slashed-zero">1</td>
                            <td class="px-4 py-2 text-right border tabular-nums slashed-zero">$12.00</td>
                            <td class="px-4 py-2 text-right border tabular-nums slashed-zero">$0.00</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border">
                                Dedicated Server - Eco Boost
                                <div class="flex flex-col ml-4 text-xs print:hidden">
                                    <span class="flex items-center">Intel® Xeon® Processor E5-1607 v3</span>
                                    <span class="uppercase">32GB DDR4 RAM</span>
                                    <span>1TB NVMe / Raid 1+0</span>
                                    <span>1Gbps Network + CloudFlare DDoS protection</span>
                                </div>
                            </td>
                            <td class="px-4 py-2 text-right border tabular-nums slashed-zero">1</td>
                            <td class="px-4 py-2 text-right border tabular-nums slashed-zero">$214.99</td>
                            <td class="px-4 py-2 text-right border tabular-nums slashed-zero">$214.99</td>
                        </tr>
                        <tr class="bg-gray-100 print:bg-gray-100">
                            <td class="px-4 py-2 border ">
                                Dedicated Server - V8 Turbo
                                <div class="flex flex-col ml-4 text-xs print:hidden">
                                    <span class="flex items-center">AMD EPYC™ 7702P</span>
                                    <span class="uppercase">128GB DDR4 RAM</span>
                                    <span>512GB NVMe / Raid 5</span>
                                    <span>100Mbit Network + CloudFlare DDoS protection</span>
                                </div>
                            </td>
                            <td class="px-4 py-2 text-right border tabular-nums slashed-zero">1</td>
                            <td class="px-4 py-2 text-right border tabular-nums slashed-zero">$322.45</td>
                            <td class="px-4 py-2 text-right border tabular-nums slashed-zero">$322.45</td>
                        </tr>
                        <!-- <tr class="text-white bg-gray-700 print:bg-gray-300 print:text-black">
                                                    <td class="invisible"></td>
                                                    <td class="invisible"></td>
                                                    <td class="px-4 py-2 text-right border"><span class="flag-icon flag-icon-hu print:hidden"></span> VAT</td>
                                                    <td class="px-4 py-2 text-right border tabular-nums slashed-zero">27%</td>
                                                </tr> -->
                        <tr class="text-white bg-gray-700 print:bg-gray-300 print:text-black">
                            <td class="invisible"></td>
                            <td class="invisible"></td>
                            <td class="px-4 py-2 text-right border">Tax</td>
                            <td class="px-4 py-2 text-right border tabular-nums slashed-zero">$145.77</td>
                        </tr>
                        <tr class="text-white bg-gray-700 print:bg-gray-300 print:text-black">
                            <td class="invisible"></td>
                            <td class="invisible"></td>
                            <td class="px-4 py-2 text-right border">Shipping</td>
                            <td class="px-4 py-2 text-right border tabular-nums slashed-zero">$145.77</td>
                        </tr>
                        <tr class="text-white bg-gray-700 print:bg-gray-300 print:text-black">
                            <td class="invisible"></td>
                            <td class="invisible"></td>
                            <td class="px-4 py-2 font-extrabold text-right border">Total</td>
                            <td class="px-4 py-2 text-right border tabular-nums slashed-zero">$685.66</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </content>
    </div>

    <div class="je jd jc ii" style="margin-top: 20px;">

        <!-- Left side -->
        <div class="ri _y">
             <!-- Create music button -->
            <button class="btn bg-green-500 ye" wire:click="showCreateModal">
                <span class="hidden trm nq">Procced to Shipment</span>
            </button>
            <button class="btn bg-gray-600 ye" wire:click="showCreateModal">
                <span class="hidden trm nq">Cancel</span>
            </button>
            <button class="btn border-slate-200 hover--border-slate-300 bt" wire:click="showCreateModal">
                <span class="hidden trm nq">Mark as Completed</span>
            </button>
            <button class="btn bg-red-600 ye" wire:click="showCreateModal">
                <span class="hidden trm nq">Remove</span>
            </button>
            <button class="btn ho xi ye" wire:click="showCreateModal">
                <span class="hidden trm nq">Restore</span>
            </button>
            <button class="btn bg-red-600 ye" wire:click="showCreateModal">
                <span class="hidden trm nq">Remove Permanently</span>
            </button>
        </div>

        <!-- Right side -->
        <div class="sn am jo az jp ft">

           
        </div>

    </div>

</div>