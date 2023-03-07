<div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto" x-data="calendar" x-init="initCalendar">

<!-- Page header -->
<div class="sm:flex sm:justify-between sm:items-center mb-4">

    <!-- Left: Title -->
    <div class="mb-4 sm:mb-0">
        <h1 class="text-2xl md:text-3xl text-gray-800 font-bold"><span x-text="`${monthNames[month]} ${year}`"></span> ✨</h1>
    </div>

    <!-- Right: Actions -->
    <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">

        <!-- Previous month button -->
        <button
            class="btn px-2.5 bg-white border-gray-200 hover:border-gray-300 text-gray-500 hover:text-gray-600 disabled:border-gray-200 disabled:bg-gray-100 disabled:text-gray-400 disabled:cursor-not-allowed"
            :disabled="month === 0 ? true : false"
            @click="month--; getDays()"
        >
            <span class="sr-only">Previous month</span><wbr />
            <svg class="h-4 w-4 fill-current" viewBox="0 0 16 16">
                <path d="M9.4 13.4l1.4-1.4-4-4 4-4-1.4-1.4L4 8z" />
            </svg>
        </button>                                    
        
        <!-- Next month button -->
        <button
            class="btn px-2.5 bg-white border-gray-200 hover:border-gray-300 text-gray-500 hover:text-gray-600 disabled:border-gray-200 disabled:bg-gray-100 disabled:text-gray-400 disabled:cursor-not-allowed"
            :disabled="month === 11 ? true : false"
            @click="month++; getDays()"
        >
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
                    <div class="w-1 h-3.5 bg-light-blue-500 shrink-0"></div>
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
                            <button class="relative w-full text-left mb-1">
                                <div
                                    class="px-2 py-0.5 rounded overflow-hidden"
                                    :class="{
                                        'text-white bg-light-blue-500': event.eventColor === 'light-blue',
                                        'text-white bg-indigo-500': event.eventColor === 'indigo',
                                        'text-white bg-yellow-500': event.eventColor === 'yellow',
                                        'text-white bg-green-500': event.eventColor === 'green',
                                        'text-white bg-red-400': event.eventColor === 'red',
                                    }"
                                >
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
                        <button
                            class="inline-flex ml-auto w-6 h-6 items-center justify-center text-xs sm:text-sm font-medium text-center rounded-full hover:bg-indigo-100"
                            :class="{'text-indigo-500': isToday(day) }"	
                            x-text="day"
                        ></button>                                                
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
                                            <label for="first-name" class="block text-sm font-medium text-gray-700">Status</label>
                                            <select wire:model="colorStatus" class="h-full rounded-r border-t border-r border-b block appearance-none w-full bg-white border-gray-300 text-gray-700 py-2 px-4 pr-8 leading-tight focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none">
                                                <option value="" >Select color</option>
                                                @foreach($colors as $color)
                                                <option value="{{ $color }}" class="capitalize">{{ $color }} </option>
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
                    <x-m-button wire:click="closeEventModal" class="border-slate-200 hover:text-white hover--border-slate-300 g_">Cancel</x-m-button>
                    @if ($eventId)
                    <x-m-button wire:click="updateBrand" class=" ho xi ye">Update</x-m-button>
                    @else
                    <x-m-button wire:click="createBrand" class=" ho xi ye2">Create</x-m-button>
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

<script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('calendar', () => ({
                month: null,
                year: null,
                daysInMonth: [],
                startingBlankDays: [],
                endingBlankDays: [],
                monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                dayNames: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
                events: [
                    // Previous month
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth() - 1, 8, 3),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth() - 1, 8, 7),
                        eventName: '⛱️ Relax for 2 at Marienbad',
                        eventColor: 'indigo'
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth() - 1, 12, 10),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 12, 11),
                        eventName: 'Team Catch-up',
                        eventColor: 'light-blue'
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth() - 1, 18, 2),
                        eventEnd: '',
                        eventName: '✍️ New Project (2)',
                        eventColor: 'yellow'
                    },                    
                    // Current month
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 1, 10),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 1, 11),
                        eventName: 'Meeting w/ Patrick Lin',
                        eventColor: 'light-blue'
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 1, 19),
                        eventEnd: '',
                        eventName: 'Reservation at La Ginestre',
                        eventColor: 'indigo'
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 3, 9),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 3, 10),
                        eventName: '✍️ New Project',
                        eventColor: 'yellow'
                    }, 
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 7, 21),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 7, 22),
                        eventName: '⚽ 2021 - Semi-final',
                        eventColor: 'red'
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 9, 10),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 9, 11),
                        eventName: 'Meeting w/Carolyn',
                        eventColor: 'light-blue'
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 9, 13),
                        eventEnd: '',
                        eventName: 'Pick up Marta at school',
                        eventColor: 'green'
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 9, 14),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 9, 15),
                        eventName: 'Meeting w/ Patrick Lin',
                        eventColor: 'green'
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 9, 19),
                        eventEnd: '',
                        eventName: 'Reservation at La Ginestre',
                        eventColor: 'indigo'
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 11, 10),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 11, 11),
                        eventName: '⛱️ Relax for 2 at Marienbad',
                        eventColor: 'indigo'
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 11, 19),
                        eventEnd: '',
                        eventName: '⚽ 2021 - Semi-final',
                        eventColor: 'red'
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 14, 10),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 14, 11),
                        eventName: 'Team Catch-up',
                        eventColor: 'light-blue'
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 21, 2),
                        eventEnd: '',
                        eventName: 'Pick up Marta at school',
                        eventColor: 'green'
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 21, 3),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 21, 7),
                        eventName: '✍️ New Project (2)',
                        eventColor: 'yellow'
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 22, 10),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 22, 11),
                        eventName: 'Team Catch-up',
                        eventColor: 'light-blue'
                    },                     
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 22, 19),
                        eventEnd: '',
                        eventName: '⚽ 2021 - Semi-final',
                        eventColor: 'red'
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 23, 0),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 23, 23),
                        eventName: 'You stay at Meridiana B&B',
                        eventColor: 'indigo'
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 25, 10),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 25, 11),
                        eventName: 'Meeting w/ Kylie Joh',
                        eventColor: 'light-blue'
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 29, 10),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 29, 11),
                        eventName: 'Call Request ->',
                        eventColor: 'light-blue'
                    },
                    // Next month
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth() + 1, 2, 3),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth() + 1, 2, 7),
                        eventName: '✍️ New Project (2)',
                        eventColor: 'yellow'
                    },                    
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth() + 1, 14, 10),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 14, 11),
                        eventName: 'Team Catch-up',
                        eventColor: 'light-blue'
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth() + 1, 25, 2),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth() + 1, 25, 3),
                        eventName: 'Pick up Marta at school',
                        eventColor: 'green'
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth() + 1, 27, 21),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth() + 1, 27, 22),
                        eventName: '⚽ 2021 - Semi-final',
                        eventColor: 'red'
                    },                    
                ],

                initCalendar() {
                    const today = new Date();
                    this.month = today.getMonth();
                    this.year = today.getFullYear();
                    this.getDays();
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