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
                                    <img class="ue sg rounded-full" src="{{ Avatar::create(Auth::user()->first_name.' '.Auth::user()->last_name)->toBase64() }}" width="32" height="32" alt="{{ Auth::user()->first_name }}" width="80" height="80" alt="User upload">
                                    <!-- <img class="w-8 h-8 rounded-full" src="{{ Avatar::create(Auth::user()->first_name.' '.Auth::user()->last_name)->toBase64() }}" width="32" height="32" alt="{{ Auth::user()->first_name }}" /> -->
                                </div>
                                <button class="r ho xi ye" wire:click="showEditModal">Change</button>
                            </div>
                        </section>

                        <!-- Business Profile -->
                        <section>
                            <h3 class="gf gb text-slate-800 font-bold rt">User Profile</h3>
                            <!-- <div class="text-sm">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</div> -->
                            <div class="je jc fg jm jb rw">
                                <div class="jr2 w-full">
                                    <label class="block text-sm gp rt" for="name">First Name</label>
                                    <input id="first_name" class="s ou" type="text" wire:model="firstName">
                                </div>
                            </div>
                            <div class="je jc fg jm jb rw">
                                <div class="jr2 w-full">
                                    <label class="block text-sm gp rt" for="name">Last Name</label>
                                    <input id="last_name" class="s ou" type="text" wire:model="lastName">
                                </div>
                            </div>
                            <div class="je jc fg jm jb rw">
                                <div class="jr2 w-full">
                                    <label class="block text-sm gp rt" for="name">Email</label>
                                    <input id="email" class="s ou" type="email" wire:model="email">
                                </div>
                            </div>
                            <div class="je jc fg jm jb rw">
                                <div class="jr2 w-full">
                                    <label class="block text-sm gp rt" for="name">Phone</label>
                                    <input id="phone" class="s ou" type="phone" wire:model="phone">
                                </div>
                            </div>
                            <div class="je jc fg jm jb rw">
                                <div class="jr2 w-full">
                                    <label class="block text-sm gp rt" for="name">Address</label>
                                    <textarea class="s ou" colspan="50" wire:model="address1">{{ $address1 }}</textarea>
                                </div>
                            </div>
                        </section>

                        <!-- Password -->
                        <section>
                            <h3 class="gf gb text-slate-800 font-bold rt">Password</h3>
                            <div class="text-sm">You can set a permanent password if you don't want to use temporary login codes.</div>
                            <div class="rw">
                                <button class="btn border-slate-200 bv text-indigo-500" wire:click="showUpdateModal">Set New Password</button>
                            </div>
                        </section>

                        <!-- Smart Sync -->
                        
                    </div>

                    <!-- Panel footer -->
                    <footer>
                        <div class="flex ak vm vg co border-slate-200">
                            <div class="flex ls">
                                <button class="btn border-slate-200 hover--border-slate-300 g_">Cancel</button>
                                <button class="btn ho xi ye ml-3" wire:click="updateAccount">Save Changes</button>
                            </div>
                        </div>
                    </footer>

                </div>

            </div>
        </div>

    </div>

    <x-jet-dialog-modal wire:model="showUserModal" class="">
        <x-slot name="title" class="border-b">Update Photo</x-slot>
        <x-slot name="content">
            <div class="border-t">
                <div class="vc vu ">
                    <div class="fw">

                        <form>
                            <div class="">
                                <div class="">
                                    <div class="flex flex-col space-y-3">
                                        <div 
                                            class="col-span-6 sm:col-span-3" 
                                            x-data="{ isUploading: false, progress: 5 }"
                                            x-on:livewire-upload-start="isUploading = true"
                                            x-on:livewire-upload-finish="isUploading = false; progress = 5"
                                            x-on:livewire-upload-error="isUploading = false"
                                            x-on:livewire-upload-progress="progress = $event.detail.progress"
                                        >
                                            <label for="photo" class="block text-sm font-medium text-gray-700">Image Slider
                                            </label>
                                            <input wire:model="file" type="file" autocomplete="given-name"
                                                class="
                                                    file:bg-gradient-to-b file:from-blue-500 file:to-blue-600 
                                                    file:px-6 file:py-3 file:m-5
                                                    file:border-none
                                                    file:rounded
                                                    file:text-white
                                                    file:cursor-pointer
                                                    file:shadow-lg file:shadow-blue-600/50" 
                                            />
                                            <div x-show.transition="isUploading" class="mt-3 w-full bg-slate-100 mb-6">
                                                <div class="ho ye2 rounded text-xs font-medium py-[1px] text-center" x-bind:style="`width: ${progress}%`">%</div>
                                            </div>
                                                @if ($oldImage)
                                                    Photo Preview:
                                                    <img src="{{ asset('storage/'.$oldImage) }}">
                                                @endif
                                                @if ($file)
                                                    Photo Preview:
                                                    <img src="{{ $file->temporaryUrl() }}">
                                                @endif
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </x-slot>
        <x-slot name="footer">
            <div class="border-slate-200">
                <div class="flex flex-wrap justify-end fc">
                    <x-m-button wire:click="closeUserModal" class="border-slate-200 hover:text-white hover--border-slate-300 g_">Cancel</x-m-button>
                    <x-m-button wire:click="updatePhoto" class=" ho xi ye">Update</x-m-button>
                </div>
            </div>

        </x-slot>
    </x-jet-dialog-modal>


    <x-jet-dialog-modal wire:model="showPasswordModal" class="">
        <x-slot name="title" class="border-b">Update Password Slide</x-slot>
        <x-slot name="content">
            <div class="border-t">
                <div class="vc vu ">
                    <div class="fw">

                        <form>
                            <div class="">
                                <div class="">
                                    <div class="flex flex-col space-y-3">
                                        <div class="col-start-1 sm:col-span-3">
                                            <label for="title" class="block text-sm font-medium text-gray-700">
                                                 Current Password
                                            </label>
                                            <input wire:model="currentPassword" type="password" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                        </div>
                                        <div class="col-start-1 sm:col-span-3">
                                            <label for="title" class="block text-sm font-medium text-gray-700">
                                                New Password
                                            </label>
                                            <input wire:model="password" type="password" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                        </div>
                                        <div class="col-start-1 sm:col-span-3">
                                            <label for="title" class="block text-sm font-medium text-gray-700">
                                                Password Confirmation
                                            </label>
                                            <input  type="password" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </x-slot>
        <x-slot name="footer">
            <div class="border-slate-200">
                <div class="flex flex-wrap justify-end fc">
                    <x-m-button wire:click="closePasswordModal" class="border-slate-200 hover:text-white hover--border-slate-300 g_">Cancel</x-m-button>
                    <x-m-button wire:click="updatePassword" class=" ho xi ye">Update</x-m-button>
                </div>
            </div>

        </x-slot>
    </x-jet-dialog-modal>