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
        <li class="mg is last--mr-0 wb qr ttx wj qi ttk">
            <a class=" @if(in_array(Request::segment(3), ['{{ $board->slug }}'])){{ 'text-indigo-500' }}@else{{ 'text-slate-500 hover--text-slate-600' }}@endif lm" href="{{ url('admin/kanban/' . $board->slug . '/board') }}">{{ $board->title }}</a>
        </li>
        @endforeach
        
        <li class="mg is last--mr-0 wb qr ttx wj qi ttk">
            <a class="text-slate-500 hover--text-slate-600 lm" href="#0">Development</a>
        </li>
    </ul>
</div>

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
                                            <input wire:model="title" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            @error('title')
                                                <div class="go re yl">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-start-1 sm:col-span-3">
                                            <label for="title" class="block text-sm font-medium text-gray-700">
                                                Description
                                            </label>
                                            <textarea wire:model="description" cols="50" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" ></textarea>
                                        </div>
                                       
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="first-name" class="block text-sm font-medium text-gray-700">Status</label>
                                            <select wire:model="boardStatus" class="h-full rounded-r border-t border-r border-b block appearance-none w-full bg-white border-gray-300 text-gray-700 py-2 px-4 pr-8 leading-tight focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none">
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

   