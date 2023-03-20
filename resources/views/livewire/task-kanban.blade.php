<div class="sn ft">

@foreach ($tasks as $task)
<div class="bg-white bd rounded-sm border border-slate-200 dw">
        <!-- Body -->
        <div class="ro">
            <!-- Title -->
            <h2 class="gh text-slate-800 rt">{{ $task->title }}</h2>
            <!-- Content -->
            <div>
                <div class="text-sm">
                {{ $task->body }}
                </div>
            </div>
        </div>
        <!-- Footer -->
        <div class="flex items-center fe">
            <!-- Left side -->
            <button class="dx ub rounded-full bg-white border border-slate-200 hover--border-slate-300 text-indigo-500 wt wi">
                <span class="d">Add</span>
                <svg class="w-3 h-3 du" viewBox="0 0 12 12">
                    <path d="M11 5H7V1a1 1 0 00-2 0v4H1a1 1 0 000 2h4v4a1 1 0 002 0V7h4a1 1 0 000-2z"></path>
                </svg>
            </button>
            <!-- Right side -->
            <div class="flex items-center">
                <!-- Edit button -->
                <button class="flex items-center gq xm ml-1" wire:click="showEditModal({{ $task->id }})">
                    <svg class="os sf du" viewBox="0 0 32 32">
                        <path d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z"></path>
                    </svg>
                </button>
                <!-- Delete button -->
                <button class="flex items-center gq xm ml-1" wire:click="deleteId({{ $task->id }})">
                    <svg class="os sf du" viewBox="0 0 32 32">
                        <path d="M13 15h2v6h-2zM17 15h2v6h-2z"></path>
                        <path d="M20 9c0-.6-.4-1-1-1h-6c-.6 0-1 .4-1 1v2H8v2h1v10c0 .6.4 1 1 1h12c.6 0 1-.4 1-1V13h1v-2h-4V9zm-6 1h4v1h-4v-1zm7 3v9H11v-9h10z"></path>
                    </svg>
                </button>
                
            </div>
        </div>
    </div>
@endforeach
    <!-- Card 1 -->
    <div class="bg-white bd rounded-sm border border-slate-200 dw">
        <!-- Body -->
        <div class="ro">
            <!-- Title -->
            <h2 class="gh text-slate-800 rt">Managing teams (book)</h2>
            <!-- Content -->
            <div>
                <div class="text-sm">
                Dedicated form for a category of users that will perform actions.
                </div>
            </div>
        </div>
        <!-- Footer -->
        <div class="flex items-center fe">
            <!-- Left side -->
            <div class="flex ub fp rd">
                <!-- <a class="block" href="#0">
                    <img class="rounded-full cr cc st" src="./images/user-28-07.jpg" width="28" height="28" alt="User 07">
                </a>
                <a class="block" href="#0">
                    <img class="rounded-full cr cc st" src="./images/user-28-11.jpg" width="28" height="28" alt="User 11">
                </a> -->
            </div>
            <!-- Right side -->
            <div class="flex items-center">
                <!-- Edit button -->
                <button class="flex items-center gq xm ml-1">
                    <svg class="os sf du" viewBox="0 0 32 32">
                        <path d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z"></path>
                    </svg>

                </button>
                <!-- Delete button -->
                <button class="flex items-center gq xm ml-1">
                    <svg class="os sf du" viewBox="0 0 32 32">
                        <path d="M13 15h2v6h-2zM17 15h2v6h-2z"></path>
                        <path d="M20 9c0-.6-.4-1-1-1h-6c-.6 0-1 .4-1 1v2H8v2h1v10c0 .6.4 1 1 1h12c.6 0 1-.4 1-1V13h1v-2h-4V9zm-6 1h4v1h-4v-1zm7 3v9H11v-9h10z"></path>
                    </svg>
                </button>
                <!-- Attach button -->
                <!-- <button class="gq xm ml-3">
                        <svg class="oo sl ub du iu" viewBox="0 0 16 16">
                            <path d="M11 0c1.3 0 2.6.5 3.5 1.5 1 .9 1.5 2.2 1.5 3.5 0 1.3-.5 2.6-1.4 3.5l-1.2 1.2c-.2.2-.5.3-.7.3-.2 0-.5-.1-.7-.3-.4-.4-.4-1 0-1.4l1.1-1.2c.6-.5.9-1.3.9-2.1s-.3-1.6-.9-2.2C12 1.7 10 1.7 8.9 2.8L7.7 4c-.4.4-1 .4-1.4 0-.4-.4-.4-1 0-1.4l1.2-1.1C8.4.5 9.7 0 11 0zM8.3 12c.4-.4 1-.5 1.4-.1.4.4.4 1 0 1.4l-1.2 1.2C7.6 15.5 6.3 16 5 16c-1.3 0-2.6-.5-3.5-1.5C.5 13.6 0 12.3 0 11c0-1.3.5-2.6 1.5-3.5l1.1-1.2c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4L2.9 8.9c-.6.5-.9 1.3-.9 2.1s.3 1.6.9 2.2c1.1 1.1 3.1 1.1 4.2 0L8.3 12zm1.1-6.8c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-4.2 4.2c-.2.2-.5.3-.7.3-.2 0-.5-.1-.7-.3-.4-.4-.4-1 0-1.4l4.2-4.2z"></path>
                        </svg>
                    </button> -->
            </div>
        </div>
    </div>

    <x-jet-dialog-modal wire:model="showTaskModal" class="">

        @if ($taskId)
        <x-slot name="title" class="border-b">Update Task</x-slot>
        @else
        <x-slot name="title" class="border-b bg-slate-200">
            <span class="font-semibold">Create Task</span>
        </x-slot>
        @endif

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
                                                Task Title
                                            </label>
                                            <input wire:model="title" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            @error('title')
                                                <div class="go re yl">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-start-1 sm:col-span-3">
                                            <label for="title" class="block text-sm font-medium text-gray-700">
                                                Body
                                            </label>
                                            <textarea wire:model="body" cols="50" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" ></textarea>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="photo" class="block text-sm font-medium text-gray-700">Person
                                                Image
                                            </label>
                                            <input wire:model="file" type="file" autocomplete="given-name"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                                @if ($oldImage)
                                                    Image Preview:
                                                    <img src="{{ asset('storage/'.$oldImage) }}">
                                                @endif
                                                @if ($file)
                                                    Image Preview:
                                                    <img src="{{ $file->temporaryUrl() }}">
                                                @endif
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="first-name" class="block text-sm font-medium text-gray-700">Status</label>
                                            <select wire:model="taskStatus" class="h-full rounded-r border-t border-r border-b block appearance-none w-full bg-white border-gray-300 text-gray-700 py-2 px-4 pr-8 leading-tight focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none">
                                                <option value="" >Select Option</option>
                                                @foreach($statuses as $status)
                                                <option value="{{ $status }}">{{ $status }}</option>
                                                @endforeach
                                            </select>
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
                    <x-m-button wire:click="closeTaskModal" class="border-slate-200 hover:text-white hover--border-slate-300 g_">Cancel</x-m-button>
                    @if ($taskId)
                    <x-m-button wire:click="updateTask" class=" ho xi ye">Update</x-m-button>
                    @else
                    <x-m-button wire:click="createTask" class=" ho xi ye2">Create</x-m-button>
                    @endif
                </div>
            </div>

        </x-slot>
    </x-jet-dialog-modal>

    <!-- modal delete confirmation -->
    <x-jet-dialog-modal wire:model="showConfirmModal" class="">

        
        <x-slot name="title" class="border-b bg-slate-200">
            <span class="font-semibold">Delete Confirm</span>
        </x-slot>
        

        <x-slot name="content">
            <div class="border-t">
                <div class="vc vu ">
                    <div class="fw">

                        
                            <div class="">
                                <div class="">
                                    <div class="flex flex-col space-y-3">
                                        <div class="flex max-w-auto text-center justify-center items-center">
                                            <div class="text-lg font-semibold ">
                                            <p>Are you sure want to delete?</p>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>
        </x-slot>
        <x-slot name="footer">
            <div class="border-slate-200">
                <div class="flex flex-wrap justify-end fc">
                    <x-m-button wire:click="closeConfirmModal" class="border-slate-200 hover:text-white  g_">Cancel</x-m-button>
                    <x-m-button wire:click.prevent="delete()" class=" ho xi ye2">Delete</x-m-button>
                </div>
            </div>

        </x-slot>
    </x-jet-dialog-modal>

</div>