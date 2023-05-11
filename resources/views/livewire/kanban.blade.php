<div class="vs jj ttm vl ou uf na" x-data="kanban">

<!-- Loading -->
<x-loading-indicator />

@dump($tasks)
    <!-- Page header -->
    <div class="je jd jc rc">

        <!-- Left: Title -->
        <div class="ri _y">
            <h1 class="gu teu text-slate-800 font-bold">Tasks ✨</h1>
        </div>

        <!-- Right: Actions -->
        <div class="sn am jo az jp ft">

            <!-- Add board button -->
            <div class="btn ho xi ye cursor-pointer" wire:click="showCreateBoardModal">
                <svg class="oo sl du bf ub" viewBox="0 0 16 16">
                    <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                </svg>
                <span class="nq">Add Board</span>
            </div>

        </div>

    </div>

    <!-- Filters -->
    <div class="ri cs border-slate-200 overflow-x-hidden">
        <ul class="text-sm gp flex a_ nd _m tem lh l">
            @foreach ($boards as $board)
            <li class="mg is last--mr-0 wb qr ttx wj qi ttk font-semibold">
                <a class=" @if(in_array(Request::segment(3), ['{{ $board->slug }}'])){{ 'text-indigo-500' }}@else{{ 'text-slate-500 hover--text-slate-600' }}@endif lm capitalize" href="{{ url('admin/kanban/' . $board->slug) }}">{{ $board->title }}</a>
            </li>
            @endforeach
        </ul>
    </div>

    <!-- reveal only if board id -->
    @if ($boardID)
    <div class="flex items-center fe pb-3">
        <!-- Left side -->
        <div class="flex ub fp rd">

        </div>
        <!-- Right side -->
        <div class="flex items-center">
            <!-- Edit button -->
            <div class="flex items-center gq xm ml-1 cursor-pointer" wire:click="showEditBoardModal({{ $boardID }})">
                <svg class="os sf du" viewBox="0 0 32 32">
                    <path d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z"></path>
                </svg>

            </div>
            <!-- Delete button -->
            <div class="flex items-center gq xm ml-1 cursor-pointer" wire:click="removeBoardId({{ $boardID }})">
                <svg class="os sf du text-red-500 hover:text-red-600" viewBox="0 0 32 32">
                    <path d="M13 15h2v6h-2zM17 15h2v6h-2z"></path>
                    <path d="M20 9c0-.6-.4-1-1-1h-6c-.6 0-1 .4-1 1v2H8v2h1v10c0 .6.4 1 1 1h12c.6 0 1-.4 1-1V13h1v-2h-4V9zm-6 1h4v1h-4v-1zm7 3v9H11v-9h10z"></path>
                </svg>
            </div>

        </div>
    </div>
    @endif

    <!-- Cards -->

    @if ($boardID)
    <div class="sn ag fu fa">

        <!-- Tasks cards -->
        @foreach ($sections as $section)
        <!-- Column 1 -->
        <div class="tz _c tnu bd bg-gray-50  rounded overflow-y-auto overflow-x-hidden border border-gray-300">
            <div class="pt-3 w-full bg-{{ $section->color }}-500">

            </div>
            <!-- Column header -->
            <div class="px-3 py-4">
                <div class="flex items-center fe ru">
                    <h2 class="uw gh text-slate-800 ld capitalize">{{ $section->title }}</h2>
                    <div class="ub text-indigo-500 xh nq cursor-pointer" wire:click="showCreateTaskModal({{ $section->id }})">
                        <svg class="oo sl du" viewBox="0 0 16 16">
                            <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                        </svg>
                    </div>
                </div>

                <!-- Cards -->

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
                                <div class="flex items-center gq xm ml-1 cursor-pointer" wire:click="showEditTaskModal({{ $task->id }})">
                                    <svg class="os sf du" viewBox="0 0 32 32">
                                        <path d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z"></path>
                                    </svg>
                                </div>
                                <!-- Delete button -->
                                <div class="flex items-center gq xm ml-1 cursor-pointer" wire:click="removeTaskId({{ $task->id }})">
                                    <svg class="os sf du" viewBox="0 0 32 32">
                                        <path d="M13 15h2v6h-2zM17 15h2v6h-2z"></path>
                                        <path d="M20 9c0-.6-.4-1-1-1h-6c-.6 0-1 .4-1 1v2H8v2h1v10c0 .6.4 1 1 1h12c.6 0 1-.4 1-1V13h1v-2h-4V9zm-6 1h4v1h-4v-1zm7 3v9H11v-9h10z"></path>
                                    </svg>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>

        @endforeach

        <!-- Add Section -->
        <div class="tz _c tnu bdt rounded-lg shadow-lg flex items-center justify-center" style="height:  340px;">
            <div class="flex space-x-1 items-center justify-center w-20 h-20 p-20 rounded-full shadow-xl border  border-indigo-600 hover:bg-indigo-100 cursor-pointer ho xi ye" wire:click="showCreateSectionModal">
                <svg class="oo sl du bf ub" viewBox="0 0 16 16">
                    <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                </svg>
                <span class="text-sm font-semibold nq">Add</span>
            </div>
        </div>

    </div>
    @else
    <div class="ua nt rl">
        <div class="gn vs">
            <div class="inline-flex rc">

            </div>
            <div class="rh">Hmm... Sepertinya belum ada data. Silahkan buat board terlebih dahulu!</div>
            <div class="btn ho xi ye cursor-pointer" wire:click="showCreateBoardModal">
                <svg class="oo sl du bf ub" viewBox="0 0 16 16">
                    <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                </svg>
                <span class="nq">Add Board</span>
            </div>
        </div>
    </div>
    @endif



    <!-- MODAL -->

    <!-- Board -->
    <x-jet-dialog-modal wire:model="showBoardModal" class="">

        @if ($boardId)
        <x-slot name="title" class="border-b">Update Board</x-slot>
        @else
        <x-slot name="title" class="border-b bg-slate-200">
            <span class="font-semibold">Create Board</span>
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
                                                Title
                                            </label>
                                            <input wire:model="boardTitle" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            @error('title')
                                            <div class="go re yl">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-start-1 sm:col-span-3">
                                            <label for="title" class="block text-sm font-medium text-gray-700">
                                                Description
                                            </label>
                                            <textarea wire:model="description" cols="50" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="first-name" class="block text-sm font-medium text-gray-700">Status</label>
                                            <select wire:model="boardStatus" class="h-full rounded-r border-t border-r border-b block appearance-none w-full bg-white border-gray-300 text-gray-700 py-2 px-4 pr-8 leading-tight focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none">
                                                <option value="">Select Option</option>
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
                    <x-m-button wire:click="closeBoardModal" class="border-slate-200 hover:text-white hover--border-slate-300 g_">Cancel</x-m-button>
                    @if ($boardId)
                    <x-m-button wire:click="updateBoard" class=" ho xi ye">Update</x-m-button>
                    @else
                    <x-m-button wire:click="createBoard" class=" ho xi ye2">Create</x-m-button>
                    @endif
                </div>
            </div>

        </x-slot>
    </x-jet-dialog-modal>

    <!-- modal delete confirmation -->
    <x-jet-dialog-modal wire:model="showConfirmBoardModal" class="">

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
                    <x-m-button wire:click="closeConfirmBoardModal" class="border-slate-200 hover:text-white  g_">Cancel</x-m-button>
                    <x-m-button wire:click.prevent="deletedBoard()" class=" ho xi ye2">Delete</x-m-button>
                </div>
            </div>

        </x-slot>
    </x-jet-dialog-modal>
    <!-- End Board -->

    <!-- Section -->
    <x-jet-dialog-modal wire:model="showSectionModal" class="">

        @if ($sectionId)
        <x-slot name="title" class="border-b">Update Section</x-slot>
        @else
        <x-slot name="title" class="border-b bg-slate-200">
            <span class="font-semibold">Create Section</span>
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
                                                Title
                                            </label>
                                            <input wire:model="sectionTitle" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            @error('title')
                                            <div class="go re yl">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-start-1 sm:col-span-3">
                                            <label for="title" class="block text-sm font-medium text-gray-700">
                                                Color {{ $color }}
                                            </label>
                                            <div class="flex flex-wrap items-center ni">
                                                @foreach($colors as $color)
                                                <div class="ns">
                                                    <label class="flex items-center">
                                                        <input type="radio" name="radio-buttons" class="u" wire:model="color" value="{{ $color }}">
                                                        <span class="text-sm nq">
                                                            <div class="w-6 h-6 rounded-full bg-{{ $color }}-500"></div>
                                                        </span>
                                                    </label>
                                                </div>
                                                @endforeach
                                            </div>
                                           
                                            <!-- <div class="px-1">
                                                <div class="flex flex-wrap -mx-2">
                                                    <template x-for="(color, index) in colors" :key="index" wire:model="color">
                                                        <div class="px-2">
                                                            <template x-if="colorSelected.value === color.value">
                                                                <div class="w-8 h-8 inline-flex rounded-full cursor-pointer border-4 border-white" :style="`background: ${color.label}; box-shadow: 0 0 0 2px rgba(0, 0, 0, 0.2);`"></div>
                                                            </template>

                                                            <template x-if="colorSelected.value != color.value">
                                                                <div @click="colorSelected = color" @keydown.enter="colorSelected = color" role="checkbox" tabindex="0" :aria-checked="colorSelected" class="w-8 h-8 inline-flex rounded-full cursor-pointer border-4 border-white focus:outline-none focus:shadow-outline" :style="`background: ${color.label};`"></div>
                                                            </template>
                                                        </div>
                                                    </template>
                                                </div>
                                            </div> -->
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="first-name" class="block text-sm font-medium text-gray-700">Status</label>
                                            <select wire:model="sectionStatus" class="h-full rounded-r border-t border-r border-b block appearance-none w-full bg-white border-gray-300 text-gray-700 py-2 px-4 pr-8 leading-tight focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none">
                                                <option value="">Select Option</option>
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
                    <x-m-button wire:click="closeSectionModal" class="border-slate-200 hover:text-white hover--border-slate-300 g_">Cancel</x-m-button>
                    @if ($sectionId)
                    <x-m-button wire:click="updateSection" class=" ho xi ye">Update</x-m-button>
                    @else
                    <x-m-button wire:click="createSection" class=" ho xi ye2">Create</x-m-button>
                    @endif
                </div>
            </div>

        </x-slot>
    </x-jet-dialog-modal>
    <!-- End Section -->

    <!-- Task -->
    <x-jet-dialog-modal wire:model="showTaskModal" class="">

        @if ($taskId)
        <x-slot name="title" class="border-b">Update Task</x-slot>
        @else
        <x-slot name="title" class="border-b bg-slate-200">
            <span class="font-semibold">Create Task in section <span class="capitalize">{{ $sectionName }}</span> </span>
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
                                            <input type="hidden" wire:model="sectionID"  />
                                            <label for="title" class="block text-sm font-medium text-gray-700">
                                                Task Title
                                            </label>
                                            <input wire:model="taskTitle" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            @error('title')
                                            <div class="go re yl">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-start-1 sm:col-span-3">
                                            <label for="title" class="block text-sm font-medium text-gray-700">
                                                Body
                                            </label>
                                            <textarea wire:model="body" cols="50" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3" x-data="{ isUploading: false, progress: 5 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false; progress = 5" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
                                            <label for="photo" class="block text-sm font-medium text-gray-700">Person
                                                Image
                                            </label>
                                            <input wire:model="file" type="file" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            <div x-show.transition="isUploading" class="mt-3 w-full bg-slate-100 mb-6">
                                                <div class="ho ye2 rounded text-xs font-medium py-[1px] text-center" x-bind:style="`width: ${progress}%`">%</div>
                                            </div>
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
                                                <option value="">Select Option</option>
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
    <x-jet-dialog-modal wire:model="showConfirmTaskModal" class="">

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
                    <x-m-button wire:click="closeConfirmTaskModal" class="border-slate-200 hover:text-white  g_">Cancel</x-m-button>
                    <x-m-button wire:click.prevent="deletedTask()" class=" ho xi ye2">Delete</x-m-button>
                </div>
            </div>

        </x-slot>
    </x-jet-dialog-modal>
    <!-- End Task -->

    <!-- END MODAL -->

</div>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('kanban', () => ({
            openModal: false,
            initialData: JSON.parse(JSON.stringify($cont)),
            
            colors: [{
                    label: '#3182ce',
                    value: 'blue'
                },
                {
                    label: '#38a169',
                    value: 'green'
                },
                {
                    label: '#805ad5',
                    value: 'purple'
                },
                {
                    label: '#e53e3e',
                    value: 'red'
                },
                {
                    label: '#dd6b20',
                    value: 'orange'
                },
                {
                    label: '#5a67d8',
                    value: 'indigo'
                },
                {
                    label: '#319795',
                    value: 'teal'
                },
                {
                    label: '#718096',
                    value: 'gray'
                },
                {
                    label: '#d69e2e',
                    value: 'yellow'
                }
            ],
            colorSelected: {
                label: '#3182ce',
                value: 'blue'
            },
            showModal(board) {
                this.task.boardName = board;
                this.openModal = true;
                setTimeout(() => this.$refs.taskName.focus(), 200);
            },
            saveEditTask(task) {
                if (task.name == '') return;
                let taskIndex = this.tasks.findIndex(t => t.uuid === task.uuid);
                this.tasks[taskIndex].name = task.name;
                this.tasks[taskIndex].date = new Date();
                this.tasks[taskIndex].edit = false;
                // Get the existing data
                let existing = JSON.parse(localStorage.getItem('TG-tasks'));
                // Add new data to localStorage Array
                existing[taskIndex].name = task.name;
                existing[taskIndex].date = new Date();
                existing[taskIndex].edit = false;
                // Save back to localStorage
                localStorage.setItem('TG-tasks', JSON.stringify(existing));
                this.dispatchCustomEvents('flash', 'Task detail updated');
            },
            getTasks() {
                // Get Default Settings
                const themeFromLocalStorage = JSON.parse(localStorage.getItem('TG-theme'));
                this.dateDisplay = localStorage.getItem('TG-dateDisplay') || 'toLocaleDateString';
                this.username = localStorage.getItem('TG-username') || '';
                this.bannerImage = localStorage.getItem('TG-bannerImage') || '';
                this.colorSelected = themeFromLocalStorage || {
                    label: '#3182ce',
                    value: 'blue'
                };
                if (localStorage.getItem('TG-tasks')) {
                    const tasksFromLocalStorage = JSON.parse(localStorage.getItem('TG-tasks'));
                    this.tasks = tasksFromLocalStorage.map(t => {
                        return {
                            id: t.id,
                            uuid: t.uuid,
                            name: t.name,
                            status: t.status,
                            boardName: t.boardName,
                            date: t.date,
                            edit: false
                        }
                    });
                } else {
                    this.tasks = [];
                }
            },
            addTask() {
                if (this.task.name == '') return;
                // data to save
                const taskData = {
                    uuid: this.generateUUID(),
                    name: this.task.name,
                    status: 'pending',
                    boardName: this.task.boardName,
                    date: new Date()
                };
                // Save to localStorage
                this.saveDataToLocalStorage(taskData, 'TG-tasks');
                // Refetch all tasks
                this.getTasks();
                // Show Flash message
                this.dispatchCustomEvents('flash', 'New task added');
                // Reset the form
                this.task.name = '';
                this.task.boardName = '';
                // close the modal
                this.openModal = false;
            },

            onDragStart(event, uuid) {
                event.dataTransfer.setData('text/plain', uuid);
                event.target.classList.add('opacity-5');
            },
            onDragOver(event) {
                event.preventDefault();
                return false;
            },
            onDragEnter(event) {
                event.target.classList.add('bg-gray-200');
            },
            onDragLeave(event) {
                event.target.classList.remove('bg-gray-200');
            },
            onDrop(event, boardName) {
                event.stopPropagation(); // Stops some browsers from redirecting.
                event.preventDefault();
                event.target.classList.remove('bg-gray-200');
                // console.log('Dropped', this);
                const id = event.dataTransfer.getData('text');
                const draggableElement = document.getElementById(id);
                const dropzone = event.target;
                dropzone.appendChild(draggableElement);
                // Update
                // Get the existing data
                let existing = JSON.parse(localStorage.getItem('TG-tasks'));
                let taskIndex = existing.findIndex(t => t.uuid === id);
                // Add new data to localStorage Array
                existing[taskIndex].boardName = boardName;
                existing[taskIndex].date = new Date();
                // Save back to localStorage
                localStorage.setItem('TG-tasks', JSON.stringify(existing));
                // Get Updated Tasks
                this.getTasks();
                // Show flash message
                this.dispatchCustomEvents('flash', 'Task moved to ' + boardName);
                event.dataTransfer.clearData();
            },
        }))
    })
</script>

@push('styles')
<style>
    .bdt {
        border: 2px dotted blue;
    }
</style>
@endpush