<div class="sn ag fu fa">

    <!-- Tasks cards -->
    @foreach ($sections as $section)
    <!-- Column 1 -->
    <div class="tz _c tnu bd bg-gray-50  rounded overflow-y-auto overflow-x-hidden border border-gray-300">
        <div class="pt-3 w-full bg-indigo-500">

        </div>
        <!-- Column header -->
        <div class="px-3 py-4">
            <div class="flex items-center fe ru">
                <h2 class="uw gh text-slate-800 ld">To Do’s 🖋️</h2>
                <button class="ub text-indigo-500 xh nq">
                    <svg class="oo sl du" viewBox="0 0 16 16">
                        <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                    </svg>
                </button>
            </div>

            <!-- Cards -->
            <div class="sn ft">

                <!-- Card 1 -->
                <div class="bg-white bd rounded-sm border border-slate-200 dw">
                    <!-- Body -->
                    <div class="ro">
                        <!-- Title -->
                        <h2 class="gh text-slate-800 rt">Managing teams (book)</h2>
                        <!-- Content -->
                        <div>
                            <div class="text-sm">#7764 created by <a class="gp text-slate-800 xx" href="#0">markus-james</a></div>
                        </div>
                    </div>
                    <!-- Footer -->
                    <div class="flex items-center fe">
                        <!-- Left side -->
                        <div class="flex ub fp rd">
                            <a class="block" href="#0">
                                <img class="rounded-full cr cc st" src="./images/user-28-07.jpg" width="28" height="28" alt="User 07">
                            </a>
                            <a class="block" href="#0">
                                <img class="rounded-full cr cc st" src="./images/user-28-11.jpg" width="28" height="28" alt="User 11">
                            </a>
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

            </div>
        </div>
    </div>

    @endforeach

    <!-- Add Section -->
    <div class="tz _c tnu bdt rounded-lg shadow-lg flex items-center justify-center" style="height:  340px;">

        <button class="flex space-x-1 items-center justify-center w-20 h-20 p-20 rounded-full shadow-xl border  border-indigo-600 hover:bg-indigo-100 cursor-pointer ho xi ye" wire:click="showCreateSectionModal">
            <svg class="oo sl du bf ub" viewBox="0 0 16 16">
                <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
            </svg>
            <span class="text-sm font-semibold nq">Add</span>
        </button>

    </div>

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
                                            <input wire:model="title" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            @error('title')
                                                <div class="go re yl">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-start-1 sm:col-span-3">
                                            <label for="title" class="block text-sm font-medium text-gray-700">
                                                Color
                                            </label>
                                            <div class="px-1">
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
                                        </div>
                                        </div>
                                       
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="first-name" class="block text-sm font-medium text-gray-700">Status</label>
                                            <select wire:model="sectionStatus" class="h-full rounded-r border-t border-r border-b block appearance-none w-full bg-white border-gray-300 text-gray-700 py-2 px-4 pr-8 leading-tight focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none">
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

</div>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('kanban', () => ({

            colors: [
                {
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
                },
            ],
            colorSelected: {
                label: '#3182ce',
                value: 'blue'
            },
        }))
    })
</script>