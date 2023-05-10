<div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto" x-data="calendar" x-init="initCalendar">
@dump($events)
    <!-- Page header -->
    <div class="sm:flex sm:justify-between sm:items-center mb-4">

        <!-- Left: Title -->
        <div class="mb-4 sm:mb-0">
            <h1 class="text-2xl md:text-3xl text-gray-800 font-bold"><span x-text="`${monthNames[month]} ${year}`"></span> ✨</h1>
        </div>

        <!-- Right: Actions -->
        <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">

            <!-- Previous month button -->
            <button class="btn px-2.5 bg-white border-gray-200 hover:border-gray-300 text-gray-500 hover:text-gray-600 disabled:border-gray-200 disabled:bg-gray-100 disabled:text-gray-400 disabled:cursor-not-allowed" :disabled="month === 0 ? true : false" @click="month--; getDays()">
                <span class="sr-only">Previous month</span><wbr />
                <svg class="h-4 w-4 fill-current" viewBox="0 0 16 16">
                    <path d="M9.4 13.4l1.4-1.4-4-4 4-4-1.4-1.4L4 8z" />
                </svg>
            </button>

            <!-- Next month button -->
            <button class="btn px-2.5 bg-white border-gray-200 hover:border-gray-300 text-gray-500 hover:text-gray-600 disabled:border-gray-200 disabled:bg-gray-100 disabled:text-gray-400 disabled:cursor-not-allowed" :disabled="month === 11 ? true : false" @click="month++; getDays()">
                <span class="sr-only">Next month</span><wbr />
                <svg class="h-4 w-4 fill-current" viewBox="0 0 16 16">
                    <path d="M6.6 13.4L5.2 12l4-4-4-4 1.4-1.4L12 8z" />
                </svg>
            </button>

            <hr class="w-px h-full bg-gray-200 mx-1" />

            <!-- Create event button -->
            <button class="btn bg-indigo-500 hover:bg-indigo-600 text-white" wire:click="showCreateModal">
                <svg class="w-4 h-4 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                    <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                </svg>
                <span class="hidden xs:block ml-2">Create Event</span>
            </button>

        </div>

    </div>

    <!-- Filters and view buttons -->
    <div class="sm:flex sm:justify-between sm:items-center mb-4">

        <!-- Filters  -->
        <div class="mb-4 sm:mb-0 mr-2">
            <ul class="flex flex-wrap items-center -m-1">
                <li class="m-1">
                    <button class="btn-sm bg-white border-gray-200 hover:border-gray-300 text-gray-500">
                        <div class="w-1 h-3.5 bg-green-500 shrink-0"></div>
                        <span class="ml-1.5">Acme Inc.</span>
                    </button>
                </li>
                <li class="m-1">
                    <button class="btn-sm bg-white border-gray-200 hover:border-gray-300 text-gray-500">
                        <div class="w-1 h-3.5 bg-green-500 shrink-0"></div>
                        <span class="ml-1.5">Life & Family</span>
                    </button>
                </li>
                <li class="m-1">
                    <button class="btn-sm bg-white border-gray-200 hover:border-gray-300 text-gray-500">
                        <div class="w-1 h-3.5 bg-indigo-500 shrink-0"></div>
                        <span class="ml-1.5">Reservations</span>
                    </button>
                </li>
                <li class="m-1">
                    <button class="btn-sm bg-white border-gray-200 hover:border-gray-300 text-gray-500">
                        <div class="w-1 h-3.5 bg-red-400 shrink-0"></div>
                        <span class="ml-1.5">Events</span>
                    </button>
                </li>
                <li class="m-1">
                    <button class="btn-sm bg-white border-gray-200 hover:border-gray-300 text-gray-500">
                        <div class="w-1 h-3.5 bg-yellow-500 shrink-0"></div>
                        <span class="ml-1.5">Misc</span>
                    </button>
                </li>
                <li class="m-1">
                    <button class="btn-sm bg-white border-gray-200 hover:border-gray-300 text-indigo-500">+Add New</button>
                </li>
            </ul>
        </div>

        <!-- View buttons (requires custom integration) -->
        <div class="flex flex-nowrap -space-x-px">
            <button class="btn bg-gray-50 border-gray-200 hover:bg-gray-50 text-indigo-500 rounded-none first:rounded-l last:rounded-r">Month</button>
            <button class="btn bg-white border-gray-200 hover:bg-gray-50 text-gray-600 rounded-none first:rounded-l last:rounded-r">Week</button>
            <button class="btn bg-white border-gray-200 hover:bg-gray-50 text-gray-600 rounded-none first:rounded-l last:rounded-r">Day</button>
        </div>
    </div>

    <!-- Calendar table -->
    <div class="bg-white rounded-sm shadow overflow-hidden" x-cloak>

        <!-- Days of the week -->
        <div class="grid grid-cols-7 gap-px border-b border-gray-200">
            <template x-for="(day, index) in dayNames" :key="index">
                <div class="px-1 py-3">
                    <div class="text-gray-500 text-sm font-medium text-center lg:hidden" x-text="day.substring(0,3)"></div>
                    <div class="text-gray-500 text-sm font-medium text-center hidden lg:block" x-text="day"></div>
                </div>
            </template>
        </div>

        <!-- Day cells -->
        <div class="grid grid-cols-7 gap-px bg-gray-200">
            <!-- Diagonal stripes pattern -->
            <svg class="sr-only">
                <defs>
                    <pattern id="stripes" patternUnits="userSpaceOnUse" width="5" height="5" patternTransform="rotate(135)">
                        <line class="stroke-current text-gray-200 opacity-50" x1="0" y="0" x2="0" y2="5" stroke-width="2" />
                    </pattern>
                </defs>
            </svg>
            <!-- Empty cells (previous month) -->
            <template x-for="blankday in startingBlankDays">
                <div class="bg-gray-50 h-20 sm:h-28 lg:h-36">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
                        <rect width="100%" height="100%" fill="url(#stripes)" />
                    </svg>
                </div>
            </template>
            <!-- Days of the current month -->
            <template x-for="(day, dayIndex) in daysInMonth" :key="dayIndex">
                <div class="relative bg-white h-20 sm:h-28 lg:h-36 overflow-hidden">
                    <div class="h-full flex flex-col justify-between">
                        <!-- Events -->
                        <div class="grow flex flex-col relative p-0.5 sm:p-1.5 overflow-hidden">
                            <template x-for="event in getEvents(day)">
                                <button class="relative w-full text-left mb-1" :key="event.eventId" @click="showDeleteModal(event.eventId)">
                                    <div class="px-2 py-0.5 rounded overflow-hidden" :class="{
                                        'text-white bg-green-500': event.eventColor === 'green',
                                        'text-white bg-indigo-500': event.eventColor === 'indigo',
                                        'text-white bg-yellow-500': event.eventColor === 'yellow',
                                        'text-white bg-green-500': event.eventColor === 'green',
                                        'text-white bg-red-400': event.eventColor === 'red',
                                    }">
                                        <!-- Event name -->
                                        <div class="text-xs font-semibold truncate" x-text="event.eventName"></div>
                                        <!-- Event time -->
                                        <div class="text-xs uppercase truncate hidden sm:block">
                                            <!-- Start date -->
                                            <template x-if="event.eventStart">
                                                <span x-text="event.eventStart.toLocaleTimeString([], {hour12: true, hour: 'numeric', minute:'numeric'})"></span>
                                            </template>
                                            <!-- End date -->
                                            <template x-if="event.eventEnd">
                                                <span>
                                                    - <span x-text="event.eventEnd.toLocaleTimeString([], {hour12: true, hour: 'numeric', minute:'numeric'})"></span>
                                                </span>
                                            </template>
                                        </div>
                                    </div>
                                </button>
                            </template>
                            <div class="absolute bottom-0 left-0 right-0 h-4 bg-gradient-to-t from-white to-transparent pointer-events-none" aria-hidden="true"></div>
                        </div>
                        <!-- Cell footer -->
                        <div class="flex justify-between items-center p-0.5 sm:p-1.5">
                            <!-- More button (if more than 2 events) -->
                            <template x-if="getEvents(day).length > 2">
                                <button class="text-xs text-gray-500 font-medium whitespace-nowrap text-center sm:py-0.5 px-0.5 sm:px-2 border border-gray-200 rounded">
                                    <span class="md:hidden">+</span><span x-text="getEvents(day).length - 2"></span> <span class="hidden md:inline">more</span>
                                </button>
                            </template>
                            <!-- Day number -->
                            <button class="inline-flex ml-auto w-6 h-6 items-center justify-center text-xs sm:text-sm font-medium text-center rounded-full hover:bg-indigo-100" :class="{'bg-indigo-600 text-white': isToday(day) }" x-text="day" @click="showEventModal2(day)"></button>
                        </div>
                    </div>
                </div>
            </template>
            <!-- Empty cells (next month) -->
            <template x-for="blankday in endingBlankDays">
                <div class="bg-gray-50 h-20 sm:h-28 lg:h-36">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
                        <rect width="100%" height="100%" fill="url(#stripes)" />
                    </svg>
                </div>
            </template>
        </div>
    </div>

    <x-jet-dialog-modal wire:model="showEventModal" class="">

        @if ($eventId)
        <x-slot name="title" class="border-b">Update Event</x-slot>
        @else
        <x-slot name="title" class="border-b bg-slate-200">
            <span class="font-semibold">Create Event</span>
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
                                                Name
                                            </label>
                                            <input wire:model="name" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            @error('name')
                                            <div class="go re yl">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="flex space-x-4">
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="title" class="block text-sm font-medium text-gray-700">
                                                    Start
                                                </label>
                                                <x-flatpicker wire:model="start"></x-flatpicker>
                                                @error('start')
                                                <div class="go re yl">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="title" class="block text-sm font-medium text-gray-700">
                                                    End
                                                </label>
                                                <x-flatpicker wire:model="end"></x-flatpicker>
                                                @error('end')
                                                <div class="go re yl">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="first-name" class="block text-sm font-medium text-gray-700">Select Theme</label>
                                            <div class="flex flex-wrap items-center ni">
                                                @foreach($colors as $color)
                                                <div class="ns">
                                                    <label class="flex items-center">
                                                        <input type="radio" name="radio-buttons" class="u" wire:model="colorStatus" value="{{ $color }}">
                                                        <span class="text-sm nq">
                                                            <div class="w-6 h-6 rounded-full bg-{{ $color }}-500"></div>
                                                        </span>
                                                    </label>
                                                </div>
                                                @endforeach
                                            </div>
                                            <div class="px-1">
                                                <div class="flex flex-wrap -mx-2">
                                                    <template x-for="(color, index) in colors" :key="index">
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
                    <x-m-button wire:click="closeEventModal" class="border-slate-200 hover:text-white hover--border-slate-300 g_">Cancel</x-m-button>
                    @if ($eventId)
                    <x-m-button wire:click="updateEvent" class=" ho xi ye">Update</x-m-button>
                    @else
                    <x-m-button wire:click="createEvent" class=" ho xi ye2">Create</x-m-button>
                    @endif
                </div>
            </div>

        </x-slot>
    </x-jet-dialog-modal>

    <!-- modal delete confirmation -->
    <div style=" background-color: rgba(0, 0, 0, 0.8)" class="fixed z-40 top-0 right-0 left-0 bottom-0 h-full w-full" x-show.transition.opacity="openDeleteModal">
        <div class="p-4 max-w-xl mx-auto relative2 absolute left-0 right-0 overflow-hidden top-20">
            <div class="shadow absolute right-0 top-0 w-10 h-10 rounded-full bg-white text-gray-500 hover:text-gray-800 inline-flex items-center justify-center cursor-pointer" x-on:click="openDeleteModal = !openDeleteModal">
                <svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M16.192 6.344L11.949 10.586 7.707 6.344 6.293 7.758 10.535 12 6.293 16.242 7.707 17.656 11.949 13.414 16.192 17.656 17.606 16.242 13.364 12 17.606 7.758z" />
                </svg>
            </div>

            <div class="shadow w-full rounded bg-white overflow-hidden block p-8">

                <h2 class="font-bold text-2xl mb-6 text-gray-800 border-b pb-2">Delete Event Details</h2>

                <div x-text="event_id"></div>
                <div class="mt-8 text-right">
                    <button type="button" class="bg-white hover:bg-gray-100 text-gray-700 font-semibold py-2 px-4 border border-gray-300 rounded shadow-sm mr-2" @click="openDeleteModal = !openDeleteModal">
                        Cancel
                    </button>
                    <button type="button" class="bg-white hover:bg-gray-700 hover:text-white text-gray-700 font-semibold py-2 px-4 border border-gray-600 rounded shadow-sm" @click="deleteEvent()">
                        Delete Event
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div style=" background-color: rgba(0, 0, 0, 0.8)" class="fixed z-40 top-0 right-0 left-0 bottom-0 h-full w-full" x-show.transition.opacity="openEventModal" wire:ignore>
        <div class="p-4 max-w-xl mx-auto relative2 absolute left-0 right-0 overflow-hidden top-20">
            <div class="shadow absolute right-0 top-0 w-10 h-10 rounded-full bg-white text-gray-500 hover:text-gray-800 inline-flex items-center justify-center cursor-pointer" x-on:click="openEventModal = !openEventModal">
                <svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M16.192 6.344L11.949 10.586 7.707 6.344 6.293 7.758 10.535 12 6.293 16.242 7.707 17.656 11.949 13.414 16.192 17.656 17.606 16.242 13.364 12 17.606 7.758z" />
                </svg>
            </div>

            <div class="shadow w-full rounded bg-white overflow-hidden block p-8">

                <h2 class="font-bold text-2xl mb-6 text-gray-800 border-b pb-2">Add Event Details</h2>

                <div class="mb-4">
                    <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide">Event title</label>
                    <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="text" x-model="event_title">
                </div>

                <div class="mb-4">
                    <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide">Event date</label>
                    <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="text" x-model="event_date" readonly>
                </div>

                <div class="mb-4">
                    <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide">Select Theme</label>
                    <div class="flex flex-wrap items-center ni">
                        @foreach($colors as $color)
                        <div class="ns">
                            <label class="flex items-center">
                                <input type="radio" name="radio-buttons" class="u" x-model="event_theme" value="{{ $color }}">
                                <span class="text-sm nq">
                                    <div class="w-6 h-6 rounded-full bg-{{ $color }}-500"></div>
                                </span>
                            </label>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="mt-8 text-right">
                    <button type="button" class="bg-white hover:bg-gray-100 text-gray-700 font-semibold py-2 px-4 border border-gray-300 rounded shadow-sm mr-2" @click="openEventModal = !openEventModal">
                        Cancel
                    </button>
                    <button type="button" class="bg-white hover:bg-gray-700 hover:text-white text-gray-700 font-semibold py-2 px-4 border border-gray-600 rounded shadow-sm" @click="addEvent()">
                        Save Event
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- /Modal -->

</div>

<script>
    // var dArr = <?php echo json_encode($events); ?>; //JSON.parse('{{ json_encode($events) }}');
    // console.log(dArr);
    document.addEventListener('alpine:init', () => {
        Alpine.data('calendar', () => ({
            month: null,
            year: null,
            daysInMonth: [],
            startingBlankDays: [],
            endingBlankDays: [],
            monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            dayNames: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
            event_date: '',
            event_title: '',
            event_theme: '',
            event_id: 0,
            events: [
                {
                    "eventId":1,
                    "eventStart": new Date('2023-04-14 16:00:25'),
                    "eventEnd": new Date('2023-04-14 16:00:25'),
                    "eventName":"\u26f1\ufe0f Relax for 2 at Marienbad",
                    "eventColor":"indigo"
                },
                {
                    "eventId":2,
                    "eventStart": new Date('2023-04-16 16:00:25'),
                    "eventEnd": new Date('2023-04-16 16:00:25'),
                    "eventName":"Team Catch-up",
                    "eventColor":"green"
                },
                {
                    "eventId":3,
                    "eventStart": new Date('2023-04-20 16:00:25'),
                    "eventEnd": new Date('2023-04-20 16:00:25'),
                    "eventName":"\u270d\ufe0f New Project (2)",
                    "eventColor":"yellow"
                }
            ],
           
            events2: [
                // Previous month
                {
                    eventId: 1,
                    eventStart: new Date(new Date().getFullYear(), new Date().getMonth() - 1, 8, 3),
                    eventEnd: new Date(new Date().getFullYear(), new Date().getMonth() - 1, 8, 7),
                    eventName: '⛱️ Relax for 2 at Marienbad',
                    eventColor: 'indigo'
                },
                {
                    eventId: 2,
                    eventStart: new Date(new Date().getFullYear(), new Date().getMonth() - 1, 12, 10),
                    eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 12, 11),
                    eventName: 'Team Catch-up',
                    eventColor: 'green'
                },
                {
                    eventId: 3,
                    eventStart: new Date(new Date().getFullYear(), new Date().getMonth() - 1, 18, 2),
                    eventEnd: '',
                    eventName: '✍️ New Project (2)',
                    eventColor: 'yellow'
                },
                // Current month
                {
                    eventId: 4,
                    eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 1, 10),
                    eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 1, 11),
                    eventName: 'Meeting w/ Patrick Lin',
                    eventColor: 'green'
                },
                {
                    eventId: 5,
                    eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 1, 19),
                    eventEnd: '',
                    eventName: 'Reservation at La Ginestre',
                    eventColor: 'indigo'
                },
                {
                    eventId: 6,
                    eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 3, 9),
                    eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 3, 10),
                    eventName: '✍️ New Project',
                    eventColor: 'yellow'
                },
                {
                    eventId: 7,
                    eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 7, 21),
                    eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 7, 22),
                    eventName: '⚽ 2021 - Semi-final',
                    eventColor: 'red'
                },
                {
                    eventId: 8,
                    eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 9, 10),
                    eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 9, 11),
                    eventName: 'Meeting w/Carolyn',
                    eventColor: 'green'
                },
                {
                    eventId: 9,
                    eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 9, 13),
                    eventEnd: '',
                    eventName: 'Pick up Marta at school',
                    eventColor: 'green'
                },
                {
                    eventId: 10,
                    eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 9, 14),
                    eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 9, 15),
                    eventName: 'Meeting w/ Patrick Lin',
                    eventColor: 'green'
                },
                {
                    eventId: 11,
                    eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 9, 19),
                    eventEnd: '',
                    eventName: 'Reservation at La Ginestre',
                    eventColor: 'indigo'
                },
                {
                    eventId: 12,
                    eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 11, 10),
                    eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 11, 11),
                    eventName: '⛱️ Relax for 2 at Marienbad',
                    eventColor: 'indigo'
                },
                {
                    eventId: 13,
                    eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 11, 19),
                    eventEnd: '',
                    eventName: '⚽ 2021 - Semi-final',
                    eventColor: 'red'
                },
                {
                    eventId: 14,
                    eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 14, 10),
                    eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 14, 11),
                    eventName: 'Team Catch-up',
                    eventColor: 'green'
                },
                {
                    eventId: 15,
                    eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 21, 2),
                    eventEnd: '',
                    eventName: 'Pick up Marta at school',
                    eventColor: 'green'
                },
                {
                    eventId: 16,
                    eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 21, 3),
                    eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 21, 7),
                    eventName: '✍️ New Project (2)',
                    eventColor: 'yellow'
                },
                {
                    eventId: 17,
                    eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 22, 10),
                    eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 22, 11),
                    eventName: 'Team Catch-up',
                    eventColor: 'green'
                },
                {
                    eventId: 18,
                    eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 22, 19),
                    eventEnd: '',
                    eventName: '⚽ 2021 - Semi-final',
                    eventColor: 'red'
                },
                {
                    eventId: 19,
                    eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 23, 0),
                    eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 23, 23),
                    eventName: 'You stay at Meridiana B&B',
                    eventColor: 'indigo'
                },
                {
                    eventId: 20,
                    eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 25, 10),
                    eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 25, 11),
                    eventName: 'Meeting w/ Kylie Joh',
                    eventColor: 'green'
                },
                {
                    eventId: 21,
                    eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 29, 10),
                    eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 29, 11),
                    eventName: 'Call Request ->',
                    eventColor: 'green'
                },
                // Next month
                {
                    eventId: 22,
                    eventStart: new Date(new Date().getFullYear(), new Date().getMonth() + 1, 2, 3),
                    eventEnd: new Date(new Date().getFullYear(), new Date().getMonth() + 1, 2, 7),
                    eventName: '✍️ New Project (2)',
                    eventColor: 'yellow'
                },
                {
                    eventId: 23,
                    eventStart: new Date(new Date().getFullYear(), new Date().getMonth() + 1, 14, 10),
                    eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 14, 11),
                    eventName: 'Team Catch-up',
                    eventColor: 'green'
                },
                {
                    eventId: 24,
                    eventStart: new Date(new Date().getFullYear(), new Date().getMonth() + 1, 25, 2),
                    eventEnd: new Date(new Date().getFullYear(), new Date().getMonth() + 1, 25, 3),
                    eventName: 'Pick up Marta at school',
                    eventColor: 'green'
                },
                {
                    eventId: 25,
                    eventStart: new Date(new Date().getFullYear(), new Date().getMonth() + 1, 27, 21),
                    eventEnd: new Date(new Date().getFullYear(), new Date().getMonth() + 1, 27, 22),
                    eventName: '⚽ 2021 - Semi-final',
                    eventColor: 'red'
                },
                {
                    eventId: 26,
                    eventStart: 'Mon Mar 20 2023 12:00 AM',
                    eventEnd: 'Mon Mar 20 2023 12:00 AM',
                    eventName: 'tes',
                    eventColor: 'yellow'
                },
                {
                    "eventId": 27,
                    "eventStart": 'Mon Mar 23 2023 12:00 AM',
                    "eventEnd": 'Mon Mar 29 2023 12:00 AM',
                    "eventName": 'xsxxs',
                    "eventColor": 'green'
                },
            ],

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

            openEventModal: false,
            openDeleteModal: false,

            

            initCalendar() {
                const today = new Date();
                this.month = today.getMonth();
                this.year = today.getFullYear();
                this.getDays();
                let arr = [];
                @this.getEvents().then(results => {
                    console.log(results);
                    results.forEach((eve) => {
                        // console.log(eve.eventId)
                        // console.log(eve.eventStart)
                        // console.log(eve.eventEnd)
                        // console.log(eve.eventName)
                        // console.log(eve.eventColor)
                        var obj = {}

                        obj['eventId'] = eve.eventId
                        obj['eventStart'] = new Date(eve.eventStart)
                        obj['eventEnd'] = new Date(eve.eventEnd)
                        obj['eventName'] = eve.eventName
                        obj['eventColor'] = eve.eventColor

                        arr.push(obj);
                    })
                });
                console.log(arr);
                console.log(typeof arr);

            },

            showEventModal2(date) {
                // open the modal
                this.openEventModal = true;
                console.log(this.openEventModal)
                this.event_date = new Date(this.year, this.month, date).toDateString();
            },

            showDeleteModal(id) {
                this.openDeleteModal = true;

                this.event_id = id;
            },

            deleteEvent() {
                alert('delete event')
                if (this.event_id == '') {
                    return;
                }

                @this.deleteId(this.event_id)

                //close the modal
                this.openDeleteModal = false;
            },

            addEvent() {
                if (this.event_title == '') {
                    return;
                }

                // add to db via livewire
                var eventAdd = {
                    name: this.event_title,
                    start: this.event_date,
                    theme: this.event_theme,
                }

                @this.addEventNow(eventAdd)

                // alert('Great. Now, update your database...');

                // clear the form data
                this.event_title = '';
                this.event_date = '';
                this.event_theme = '';

                //close the modal
                this.openEventModal = false;
            },

            isToday(date) {
                const today = new Date();
                const day = new Date(this.year, this.month, date);
                return today.toDateString() === day.toDateString() ? true : false;
            },

            getEvents(date) {
                return this.events.filter(e => new Date(e.eventStart).toDateString() === new Date(this.year, this.month, date).toDateString());
            },

            getDays() {
                const daysInMonth = new Date(this.year, this.month + 1, 0).getDate();

                // starting empty cells (previous month)
                const startingDayOfWeek = new Date(this.year, this.month).getDay();
                let startingBlankDaysArray = [];
                for (let i = 1; i <= startingDayOfWeek; i++) {
                    startingBlankDaysArray.push(i);
                }

                // ending empty cells (next month)
                const endingDayOfWeek = new Date(this.year, this.month + 1, 0).getDay();
                let endingBlankDaysArray = [];
                for (let i = 1; i < 7 - endingDayOfWeek; i++) {
                    endingBlankDaysArray.push(i);
                }

                // current month cells
                let daysArray = [];
                for (let i = 1; i <= daysInMonth; i++) {
                    daysArray.push(i);
                }

                this.startingBlankDays = startingBlankDaysArray;
                this.endingBlankDays = endingBlankDaysArray;
                this.daysInMonth = daysArray;
            }
        }))
    })
</script>