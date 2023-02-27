<div class="g w _a t_ bg wn wr wu translate-x-0" :class="transactionOpen ? 'translate-x-0' : 'ar'" @click.outside="transactionOpen = false" @keydown.escape.window="transactionOpen = false">
            <div class="b tm hp lc ll l ub cf border-slate-200 ou ji sq">

                <button class="g k q rk is kk dx" @click="transactionOpen = false">
                    <svg class="oo sl dd k_" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                        <path d="m7.95 6.536 4.242-4.243a1 1 0 1 1 1.415 1.414L9.364 7.95l4.243 4.242a1 1 0 1 1-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 0 1-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 0 1 1.414-1.414L7.95 6.536Z"></path>
                    </svg>
                </button>

                <div class="vl vs ttm">
                    <div class="ul na ttn">

                        <div class="text-slate-800 gh gn rt">Bank Transfer</div>
                        <div class="text-sm gn gm">22/01/2022, 8:56 PM</div>

                        <!-- Details -->
                        <div class="b_ i_">
                            <!-- Top -->
                            <div class="bg-white lz vc mq gn">
                                <div class="ro gn">
                                    <img class="inline-flex ow sx rounded-full ij" src="./images/transactions-image-04.svg" width="48" height="48" alt="Transaction 04">
                                </div>
                                <div class="gu gh yt rt">+$2,179.36</div>
                                <div class="text-sm gp text-slate-800 ro">Acme LTD UK</div>
                                <div class="go inline-flex gp hi text-slate-500 rounded-full gn vp vf">Pending</div>
                            </div>
                            <!-- Divider -->
                            <div class="flex fe items-center" aria-hidden="true">
                                <svg class="ox su dl" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 20c5.523 0 10-4.477 10-10S5.523 0 0 0h20v20H0Z"></path>
                                </svg>
                                <div class="uw ou su bg-white flex ak justify-center">
                                    <div class="sk ou co cl border-slate-200"></div>
                                </div>
                                <svg class="ox su dl as" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 20c5.523 0 10-4.477 10-10S5.523 0 0 0h20v20H0Z"></path>
                                </svg>
                            </div>
                            <!-- Bottom -->
                            <div class="bg-white ce dz mz text-sm fw">
                                <div class="flex fe fm">
                                    <span class="gm">IBAN:</span>
                                    <span class="gp gz gr">IT17 2207 1010 0504 0006 88</span>
                                </div>
                                <div class="flex fe fm">
                                    <span class="gm">BIC:</span>
                                    <span class="gp gz gr">BARIT22</span>
                                </div>
                                <div class="flex fe fm">
                                    <span class="gm">Reference:</span>
                                    <span class="gp gz gr">Freelance Work</span>
                                </div>
                                <div class="flex fe fm">
                                    <span class="gm">Emitter:</span>
                                    <span class="gp gz gr">Acme LTD UK</span>
                                </div>
                            </div>
                        </div>

                        <!-- Receipts -->
                        <div class="rk">
                            <div class="text-sm gh text-slate-800 ru">Receipts</div>
                            <form class="rounded hi border cl ck gn vc vl">
                                <svg class="inline-flex oo sl dd ro" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 4c-.3 0-.5.1-.7.3L1.6 10 3 11.4l4-4V16h2V7.4l4 4 1.4-1.4-5.7-5.7C8.5 4.1 8.3 4 8 4ZM1 2h14V0H1v2Z"></path>
                                </svg>
                                <label for="upload" class="block text-sm text-slate-500 gm">We accept PNG, JPEG, and PDF files.</label>
                                <input class="d" id="upload" type="file">
                            </form>
                        </div>

                        <!-- Notes -->
                        <div class="rk">
                            <div class="text-sm gh text-slate-800 ru">Notes</div>
                            <form>
                                <label class="d" for="notes">Write a note</label>
                                <textarea id="notes" class="f ou xq" rows="4" placeholder="Write a note…"></textarea>
                            </form>
                        </div>

                        <!-- Download / Report -->
                        <div class="flex items-center fl rk">
                            <div class="ok">
                                <button class="btn ou border-slate-200 hover--border-slate-300 g_">
                                    <svg class="oo sl du gq ub as" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 4c-.3 0-.5.1-.7.3L1.6 10 3 11.4l4-4V16h2V7.4l4 4 1.4-1.4-5.7-5.7C8.5 4.1 8.3 4 8 4ZM1 2h14V0H1v2Z"></path>
                                    </svg>
                                    <span class="nq">Download</span>
                                </button>
                            </div>
                            <div class="ok">
                                <button class="btn ou border-slate-200 hover--border-slate-300 yl">
                                    <svg class="oo sl du ub" viewBox="0 0 16 16">
                                        <path d="M7.001 3h2v4h-2V3Zm1 7a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM15 16a1 1 0 0 1-.6-.2L10.667 13H1a1 1 0 0 1-1-1V1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1ZM2 11h9a1 1 0 0 1 .6.2L14 13V2H2v9Z"></path>
                                    </svg>
                                    <span class="nq">Report</span>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>