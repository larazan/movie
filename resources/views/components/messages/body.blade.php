<div class="uw flex ak za wn wo wu translate-x-1/3" :class="msgSidebarOpen ? 'translate-x-1/3' : 'translate-x-0'">

                        <!-- Header -->
                        <div class="b tm">
                            <div class="flex items-center fe bg-white cs border-slate-200 vs jj tei sa">
                                <!-- People -->
                                <div class="flex items-center">
                                    <!-- Close button -->
                                    <button class="qz gq xv mr-4" @click.stop="msgSidebarOpen = !msgSidebarOpen" aria-controls="messages-sidebar" :aria-expanded="msgSidebarOpen" aria-expanded="true">
                                        <span class="d">Close sidebar</span>
                                        <svg class="oi so du" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z"></path>
                                        </svg>
                                    </button>
                                    <!-- People list -->
                                    <div class="flex fp rd">
                                        <a class="block" href="#0">
                                            <img class="rounded-full cr cc st" src="./images/user-32-01.jpg" width="32" height="32" alt="User 01">
                                        </a>
                                        <a class="block" href="#0">
                                            <img class="rounded-full cr cc st" src="./images/user-32-07.jpg" width="32" height="32" alt="User 04">
                                        </a>
                                    </div>
                                </div>
                                <!-- Buttons on the right side -->
                                <div class="flex">
                                    <button class="ve ub rounded border border-slate-200 hover--border-slate-300 bv nq">
                                        <svg class="oo sl du gq" viewBox="0 0 16 16">
                                            <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                                        </svg>
                                    </button>
                                    <button class="ve ub rounded border border-slate-200 hover--border-slate-300 bv nq">
                                        <svg class="oo sl du text-indigo-500" viewBox="0 0 16 16">
                                            <path d="M14.3 2.3L5 11.6 1.7 8.3c-.4-.4-1-.4-1.4 0-.4.4-.4 1 0 1.4l4 4c.2.2.4.3.7.3.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4-.4-.4-1-.4-1.4 0z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Body -->
                        <div class="uw vs jj tei vh">
                            <!-- Chat msg -->
                            <div class="flex aj ri ww">
                                <img class="rounded-full mr-4" src="./images/user-40-11.jpg" width="40" height="40" alt="User 01">
                                <div>
                                    <div class="text-sm bg-white text-slate-800 dk lw ct border border-slate-200 shadow-md rt">
                                        Can anyone help? I have a question about Acme Professional
                                    </div>
                                    <div class="flex items-center fe">
                                        <div class="go text-slate-500 gp">2:40 PM</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Chat msg -->
                            <div class="flex aj ri ww">
                                <img class="rounded-full mr-4" src="./images/user-40-12.jpg" width="40" height="40" alt="User 02">
                                <div>
                                    <div class="text-sm ho ye dk lw ct border cp shadow-md rt">
                                        Hey Dominik Lamakani 👋<br>
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est 🙌
                                    </div>
                                    <div class="flex items-center fe">
                                        <div class="go text-slate-500 gp">2:40 PM</div>
                                        <svg class="ox h-3 ub du yt" viewBox="0 0 20 12">
                                            <path d="M10.402 6.988l1.586 1.586L18.28 2.28a1 1 0 011.414 1.414l-7 7a1 1 0 01-1.414 0L8.988 8.402l-2.293 2.293a1 1 0 01-1.414 0l-3-3A1 1 0 013.695 6.28l2.293 2.293L12.28 2.28a1 1 0 011.414 1.414l-3.293 3.293z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <!-- Chat msg -->
                            <div class="flex aj ri ww">
                                <img class="rounded-full mr-4" src="./images/user-40-11.jpg" width="40" height="40" alt="User 01">
                                <div>
                                    <div class="flex items-center">
                                        <img class="lw shadow-md rt" src="./images/chat-image.jpg" width="240" height="180" alt="Chat image">
                                        <button class="ve rounded-full border border-slate-200 rs xf wt wi">
                                            <span class="d">Download</span>
                                            <svg class="oo sl ub du gq" viewBox="0 0 16 16">
                                                <path d="M15 15H1a1 1 0 01-1-1V2a1 1 0 011-1h4v2H2v10h12V3h-3V1h4a1 1 0 011 1v12a1 1 0 01-1 1zM9 7h3l-4 4-4-4h3V1h2v6z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="flex items-center fe">
                                        <div class="go text-slate-500 gp">2:48 PM</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Chat msg -->
                            <div class="flex aj ri ww">
                                <img class="rounded-full mr-4" src="./images/user-40-11.jpg" width="40" height="40" alt="User 01">
                                <div>
                                    <div class="text-sm bg-white text-slate-800 dk lw ct border border-slate-200 shadow-md rt">
                                        What do you think? Duis aute irure dolor in reprehenderit 🔥
                                    </div>
                                    <div class="flex items-center fe">
                                        <div class="go text-slate-500 gp">2:48 PM</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Chat msg -->
                            <div class="flex aj ri ww">
                                <img class="rounded-full mr-4" src="./images/user-40-12.jpg" width="40" height="40" alt="User 02">
                                <div>
                                    <div class="text-sm ho ye dk lw ct border cp shadow-md rt">
                                        Sed euismod nisi porta lorem mollis. Tellus elementum sagittis vitae et leo duis. Viverra justo nec ultrices dui.<br>
                                        Sed lectus vestibulum mattis ullamcorper velit sed. Ut sem nulla pharetra diam sit amet 🎁
                                    </div>
                                    <div class="flex items-center fe">
                                        <div class="go text-slate-500 gp">2:55 PM</div>
                                        <svg class="w-3 h-3 ub du gq" viewBox="0 0 12 12">
                                            <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <!-- Date separator -->
                            <div class="flex justify-center">
                                <div class="inline-flex items-center justify-center go gp vp vf bg-white border border-slate-200 rounded-full ny">
                                    Tuesday, 20 January
                                </div>
                            </div>
                            <!-- Chat msg -->
                            <div class="flex aj ri ww">
                                <img class="rounded-full mr-4" src="./images/user-40-12.jpg" width="40" height="40" alt="User 02">
                                <div>
                                    <div class="text-sm ho ye dk lw ct border cp shadow-md rt">
                                        Can you join <a class="gp" href="#0">@dominik</a>? <a class="br" href="#0">https://meet.google.com/haz-r3gt-idj</a>
                                    </div>
                                    <div class="flex items-center fe">
                                        <div class="go text-slate-500 gp">10:15 AM</div>
                                        <svg class="w-3 h-3 ub du gq" viewBox="0 0 12 12">
                                            <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <!-- Chat msg -->
                            <div class="flex aj ri ww">
                                <img class="rounded-full mr-4" src="./images/user-40-11.jpg" width="40" height="40" alt="User 01">
                                <div>
                                    <div class="text-sm bg-white text-slate-800 dk lw ct border border-slate-200 shadow-md rt">
                                        <svg class="du gq" viewBox="0 0 15 3" width="15" height="3">
                                            <circle cx="1.5" cy="1.5" r="1.5">
                                                <animate attributeName="opacity" dur="1s" values="0;1;0" repeatCount="indefinite" begin="0.1"></animate>
                                            </circle>
                                            <circle cx="7.5" cy="1.5" r="1.5">
                                                <animate attributeName="opacity" dur="1s" values="0;1;0" repeatCount="indefinite" begin="0.2"></animate>
                                            </circle>
                                            <circle cx="13.5" cy="1.5" r="1.5">
                                                <animate attributeName="opacity" dur="1s" values="0;1;0" repeatCount="indefinite" begin="0.3"></animate>
                                            </circle>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Footer -->
                        <div class="b te">
                            <div class="flex items-center fe bg-white co border-slate-200 vs jj tei sa">
                                <!-- Plus button -->
                                <button class="ub gq xv ra">
                                    <span class="d">Add</span>
                                    <svg class="oi so du" viewBox="0 0 24 24">
                                        <path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12C23.98 5.38 18.62.02 12 0zm6 13h-5v5h-2v-5H6v-2h5V6h2v5h5v2z"></path>
                                    </svg>
                                </button>
                                <!-- Message input -->
                                <form class="uw flex">
                                    <div class="uw ra">
                                        <label for="message-input" class="d">Type a message</label>
                                        <input id="message-input" class="s ou hi cp ki xq" type="text" placeholder="Aa">
                                    </div>
                                    <button type="submit" class="btn ho xi ye lm">Send -&gt;</button>
                                </form>
                            </div>
                        </div>

                    </div>