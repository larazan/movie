{{--
 <section class="container mx-auto p-6 font-mono">
    <div class="w-full flex mb-4 p-2 justify-end">
        <form class="flex space-x-4 shadow bg-white rounded-md m-2 p-2">
            <div class="p-1 flex items-center">
                <label for="tmdb_id_g" class="block text-sm font-medium text-gray-700 mr-4">Tmdb ID</label>
                <div class="relative rounded-md shadow-sm">
                    <input wire:model="tmdbId" id="tmdb_id_g" name="tmdb_id_g"
                        class="px-3 py-2 border border-gray-300 rounded" placeholder="Tmdb ID" />
                </div>
            </div>
            <div class="p-1">
                <button type="button" wire:click="generateMovie"
                    class="inline-flex items-center justify-center py-2 px-4 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-green-600 hover:bg-green-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-green-700 transition duration-150 ease-in-out disabled:opacity-50">
                    <svg wire:loading wire:target="generateMovie" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4">
                        </circle>
                        <path class="opacity-75" fill="currentColor"
                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                        </path>
                    </svg>
                    <span>Generate Movie</span>
                </button>
            </div>
        </form>
    </div>

    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
        <div class="w-full shadow p-5 bg-white">
            <div>
                <div class="flex justify-between">
                    <div class="flex-1">
                        <div class="relative">
                            <div class="absolute flex items-center ml-2 h-full">
                                <svg class="w-4 h-4 fill-current text-primary-gray-dark" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.8898 15.0493L11.8588 11.0182C11.7869 10.9463 11.6932 10.9088 11.5932 10.9088H11.2713C12.3431 9.74952 12.9994 8.20272 12.9994 6.49968C12.9994 2.90923 10.0901 0 6.49968 0C2.90923 0 0 2.90923 0 6.49968C0 10.0901 2.90923 12.9994 6.49968 12.9994C8.20272 12.9994 9.74952 12.3431 10.9088 11.2744V11.5932C10.9088 11.6932 10.9495 11.7869 11.0182 11.8588L15.0493 15.8898C15.1961 16.0367 15.4336 16.0367 15.5805 15.8898L15.8898 15.5805C16.0367 15.4336 16.0367 15.1961 15.8898 15.0493ZM6.49968 11.9994C3.45921 11.9994 0.999951 9.54016 0.999951 6.49968C0.999951 3.45921 3.45921 0.999951 6.49968 0.999951C9.54016 0.999951 11.9994 3.45921 11.9994 6.49968C11.9994 9.54016 9.54016 11.9994 6.49968 11.9994Z">
                                    </path>
                                </svg>
                            </div>

                            <input wire:model="search" type="text" placeholder="Search by title"
                                class="px-8 py-3 w-full md:w-2/6 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm" />
                        </div>
                    </div>
                    <div class="flex">
                        <select wire:model="perPage"
                            class="px-4 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
                            <option value="5">5 Per Page</option>
                            <option value="10">10 Per Page</option>
                            <option value="15">15 Per Page</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr
                        class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                        <th class="px-4 py-3 cursor-pointer" wire:click="sortByColumn('title')">
                            <div class="flex space-x-4 content-center">
                                <span>Title</span>
                                @if ($sortColumn == 'title' && $sortDirection == 'desc')
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-700" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 13l-5 5m0 0l-5-5m5 5V6" />
                                    </svg>
                                @elseif ($sortColumn == 'title' && $sortDirection == 'asc')
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-700" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 11l5-5m0 0l5 5m-5-5v12" />
                                    </svg>
                                @endif
                            </div>
                        </th>
                        <th class="px-4 py-3 cursor-pointer" wire:click="sortByColumn('rating')">
                            <div class="flex space-x-4 content-center">
                                <span>Rating</span>
                                @if ($sortColumn == 'rating' && $sortDirection == 'desc')
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-700" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 13l-5 5m0 0l-5-5m5 5V6" />
                                    </svg>
                                @elseif ($sortColumn == 'rating' && $sortDirection == 'asc')
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-700" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 11l5-5m0 0l5 5m-5-5v12" />
                                    </svg>
                                @endif
                            </div>
                        </th>
                        <th class="px-4 py-3 cursor-pointer" wire:click="sortByColumn('visits')">
                            <div class="flex space-x-4 content-center">
                                <span>Visits</span>
                                @if ($sortColumn == 'visits' && $sortDirection == 'desc')
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-700" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 13l-5 5m0 0l-5-5m5 5V6" />
                                    </svg>
                                @elseif ($sortColumn == 'visits' && $sortDirection == 'asc')
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-700" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 11l5-5m0 0l5 5m-5-5v12" />
                                    </svg>
                                @endif
                            </div>
                        </th>
                        <th class="px-4 py-3">Runtime</th>
                        <th class="px-4 py-3">Published</th>
                        <th class="px-4 py-3">Poster</th>
                        <th class="px-4 py-3">Manage</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach ($movies as $table_movie)
                        <tr class="text-gray-700">
                            <td class="px-4 py-3 border">
                                <span wire:click="showMovieDeatil({{ $table_movie->id }})"
                                    class="text-blue-500 hover:text-blue-700 cursor-pointer">{{ $table_movie->title }}</span>
                            </td>
                            <td class="px-4 py-3 border">
                                {{ $table_movie->rating }}
                            </td>
                            <td class="px-4 py-3 border">
                                {{ $table_movie->visits }}
                            </td>
                            <td class="px-4 py-3 text-ms font-semibold border">
                                {{ date('H:i', mktime(0, $table_movie->runtime)) }}</td>
                            <td class="px-4 py-3 text-ms font-semibold border">
                                @if ($table_movie->is_public)
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Published
                                    </span>
                                @else
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                        UnPublished
                                    </span>

                                @endif
                            </td>
                            <td class="px-4 py-3 text-ms font-semibold border">
                                <img class="h-12 w-12 rounded"
                                    src="https://www.themoviedb.org/t/p/w220_and_h330_face/{{ $table_movie->poster_path }}">
                            </td>

                            <td class="px-4 py-3 text-sm border">
                                <x-m-button wire:click="showTrailerModal({{ $table_movie->id }})"
                                    class="bg-indigo-500 hover:bg-indigo-700 text-white">Trailer</x-m-button>
                                <x-m-button wire:click="showEditModal({{ $table_movie->id }})"
                                    class="bg-green-500 hover:bg-green-700 text-white">Edit</x-m-button>
                                <x-m-button wire:click="deleteMovie({{ $table_movie->id }})"
                                    class="bg-red-500 hover:bg-red-700 text-white">Delete</x-m-button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
            <div class="m-2 p-2">
                {{ $movies->links() }}
            </div>
        </div>
    </div>
    <x-jet-dialog-modal wire:model="showMovieModal">
        <x-slot name="title">Update Movie</x-slot>
        <x-slot name="content">
            <div class="mt-10 sm:mt-0">
                <div class="mt-5 md:mt-0 md:col-span-2" x-data="{tab: 0}">
                    <div class="flex border border-black overflow-hidden">
                        <button class="px-4 py-2 w-full" x-on:click.prevent="tab = 0">Form</button>
                        <button class="px-4 py-2 w-full" x-on:click.prevent="tab = 1">Tags</button>
                        <button class="px-4 py-2 w-full" x-on:click.prevent="tab = 2">Casts</button>
                    </div>
                    <div>
                        <div class="p-4 space-x-2" x-show="tab === 0">
                            <form>
                                <div class="shadow overflow-hidden sm:rounded-md">
                                    <div class="px-4 py-5 bg-white sm:p-6">
                                        <div class="flex flex-col">
                                            <label for="first-name"
                                                class="block text-sm font-medium text-gray-700 mr-4">Title</label>
                                            <input wire:model="title" type="text"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            @error('title')
                                                <div class="go re yl">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="flex flex-col">
                                            <label for="first-name"
                                                class="block text-sm font-medium text-gray-700 mr-4">Runtime</label>
                                            <input wire:model="runtime" type="text"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            @error('runtime')
                                                <div class="go re yl">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="flex flex-col">
                                            <label for="first-name"
                                                class="block text-sm font-medium text-gray-700 mr-4">Language</label>
                                            <input wire:model="lang" type="text"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            @error('lang')
                                                <div class="go re yl">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="flex flex-col">
                                            <label for="first-name"
                                                class="block text-sm font-medium text-gray-700 mr-4">Format</label>
                                            <input wire:model="videoFormat" type="text"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            @error('videoFormat')
                                                <div class="go re yl">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="flex flex-col">
                                            <label for="first-name"
                                                class="block text-sm font-medium text-gray-700 mr-4">Rating</label>
                                            <input wire:model="rating" type="text"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            @error('rating')
                                                <div class="go re yl">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="flex flex-col">
                                            <label for="first-name"
                                                class="block text-sm font-medium text-gray-700 mr-4">Poster</label>
                                            <input wire:model="posterPath" type="text"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            @error('posterPath')
                                                <div class="go re yl">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="flex flex-col">
                                            <label for="first-name"
                                                class="block text-sm font-medium text-gray-700 mr-4">Backdrop</label>
                                            <input wire:model="backdropPath" type="text"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            @error('backdropPath')
                                                <div class="go re yl">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="flex flex-col">
                                            <label for="overview"
                                                class="block text-sm font-medium text-gray-700 mr-4">Overview</label>
                                            <textarea
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{ $overview }}</textarea>
                                            @error('overview')
                                                <div class="go re yl">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="flex flex-col">
                                            <div class="flex items-center px-2 py-6">
                                                <input wire:model="isPublic" type="checkbox"
                                                    class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                                                <label for="remember-me" class="ml-2 block text-sm text-gray-900">
                                                    Published
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="p-4 space-x-2" x-show="tab === 1">
                            @if ($movie)
                                <livewire:movie-tag :movie="$movie" />
                            @endif
                        </div>
                        <div class="p-4 space-x-2" x-show="tab === 2">
                            @if ($movie)
                                <livewire:movie-cast :movie="$movie" />
                            @endif
                        </div>
                    </div>

                </div>
            </div>

        </x-slot>
        <x-slot name="footer">
            <x-m-button wire:click="closeMovieModal" class="bg-gray-600 hover:bg-gray-800 text-white">Cancel
            </x-m-button>
            <x-m-button wire:click="updateMovie">Update</x-m-button>
        </x-slot>
    </x-jet-dialog-modal>
    <x-jet-dialog-modal wire:model="showTrailer">
        <x-slot name="title">Trailer Movie</x-slot>
        <x-slot name="content">
            @if ($movie)
                <div class="flex space-x-4 space-y-2 m-2">
                    @foreach ($movie->trailers as $trailer)
                        <x-jet-button wire:click="deleteTrailer({{ $trailer->id }})" class="hover:bg-red-500">
                            {{ $trailer->name }}</x-jet-button>
                    @endforeach
                </div>
            @endif
            <div class="mt-10 sm:mt-0">
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form>
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="flex flex-col">
                                    <label for="first-name"
                                        class="block text-sm font-medium text-gray-700 mr-4">Name</label>
                                    <input wire:model="trailerName" type="text"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                    @error('trailerName')
                                        <div class="go re yl">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="flex flex-col">
                                    <label for="embedHtml" class="block text-sm font-medium text-gray-700 mr-4">Embed
                                        Html</label>
                                    <textarea wire:model="embedHtml"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                                    @error('embedHtml')
                                        <div class="go re yl">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </x-slot>
        <x-slot name="footer">
            <x-m-button wire:click="closeMovieModal" class="bg-gray-600 hover:bg-gray-800 text-white">Cancel
            </x-m-button>
            <x-m-button wire:click="addTrailer">Add Trailer</x-m-button>
        </x-slot>
    </x-jet-dialog-modal>
    <x-jet-dialog-modal wire:model="showMovieDetailModal">
        <x-slot name="title">Movie Details</x-slot>
        <x-slot name="content">
            <div class="mt-10 sm:mt-0">
                <div class="mt-5 md:mt-0 md:col-span-2">
                    @if ($movie)
                        {{ $movie->title }}
                    @endif
                </div>
            </div>

        </x-slot>
        <x-slot name="footer">
            <x-m-button wire:click="closeMovieModal" class="bg-gray-600 hover:bg-gray-800 text-white">Cancel
            </x-m-button>
        </x-slot>
    </x-jet-dialog-modal>
</section> 
--}}

<div class="vs jj ttm vl ou uf na">

    <!-- Page header -->
    <div class="je jd jc ii">

        <!-- Left: Title -->
        <div class="ri _y">
            <h1 class="gu teu text-slate-800 font-bold">Movie ✨</h1>
        </div>

        <!-- Right: Actions -->
        <div class="sn am jo az jp ft">

            <!-- Search form -->
            <form class="y">
                <label for="action-search" class="d">Search</label>
                <input wire:model="search" id="action-search" class="s me xq" type="search" placeholder="Search by name">
                <button class="g w j kk" type="submit" aria-label="Search">
                    <svg class="oo sl ub du gq kj ml-3 mr-2" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
                        <path d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
                    </svg>
                </button>
            </form>

            <!-- Create movie button -->
            <button class="btn ho xi ye" wire:click="showCreateModal">
                <svg class="oo sl du bf ub" viewBox="0 0 16 16">
                    <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                </svg>
                <span class="hidden trm nq">Create Movie</span>
            </button>
        </div>

    </div>

    <!-- More actions -->
    <div class="je jd jc ii">

        <!-- Left side -->
        <div class="ri _y">

        </div>

        <!-- Right side -->
        <div class="sn am jo az jp ft">

            <!-- Delete button -->
            <div class="table-items-action hidden">
                <div class="flex items-center">
                    <div class="hidden tnh text-sm gm mr-2 lm"><span class="table-items-count"></span> items selected</div>
                    <button class="btn bg-white border-slate-200 hover--border-slate-300 yl xy">Delete</button>
                </div>
            </div>

            <!-- Dropdown -->
            <!-- <div class="y" x-data="{ open: false, selected: 2 }">
                <button class="btn fe un bg-white border-slate-200 hover--border-slate-300 text-slate-500 hover--text-slate-600" aria-label="Select date range" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open" aria-expanded="false">
                    <span class="flex items-center">
                        <svg class="oo sl du text-slate-500 ub mr-2" viewBox="0 0 16 16">
                            <path d="M15 2h-2V0h-2v2H9V0H7v2H5V0H3v2H1a1 1 0 00-1 1v12a1 1 0 001 1h14a1 1 0 001-1V3a1 1 0 00-1-1zm-1 12H2V6h12v8z"></path>
                        </svg>
                        <span x-text="$refs.options.children[selected].children[1].innerHTML">Last Month</span>
                    </span>
                    <svg class="ub nz du gq" width="11" height="7" viewBox="0 0 11 7">
                        <path d="M5.4 6.8L0 1.4 1.4 0l4 4 4-4 1.4 1.4z"></path>
                    </svg>
                </button>
                <div class="tk g z q ou bg-white border border-slate-200 va rounded bd la re" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="wt wa ws au" x-transition:enter-start="opacity-0 uq" x-transition:enter-end="ba uj" x-transition:leave="wt wa ws" x-transition:leave-start="ba" x-transition:leave-end="opacity-0" style="display: none;">
                    <div class="gp text-sm g_" x-ref="options">
                        <button tabindex="0" class="flex items-center ou xr vf vn al" :class="selected === 0 &amp;&amp; 'text-indigo-500'" @click="selected = 0;open = false" @focus="open = true" @focusout="open = false">
                            <svg class="ub mr-2 du text-indigo-500 invisible" :class="selected !== 0 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                            </svg>
                            <span>Today</span>
                        </button>

                        <button tabindex="0" class="flex items-center ou xr vf vn al text-indigo-500" :class="selected === 2 &amp;&amp; 'text-indigo-500'" @click="selected = 2;open = false" @focus="open = true" @focusout="open = false">
                            <svg class="ub mr-2 du text-indigo-500" :class="selected !== 2 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                            </svg>
                            <span>Last Month</span>
                        </button>

                    </div>
                </div>
            </div> -->

            <!-- Filter button -->
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

    <!-- Table -->
    <div class="bg-white bd rounded-sm border border-slate-200 rc">
        <header class="vc vu">
            <h2 class="gh text-slate-800">Movies <span class="gq gp"></span></h2>
        </header>
        <div x-data="handleSelect">

            <!-- Table -->
            <div class="lf">
                <table class="ux ou">
                    <!-- Table header -->
                    <thead class="go gh gv text-slate-500 hp co cs border-slate-200">
                        <tr>
                            <th class="vi wy w_ vo lm of">
                                <div class="flex items-center">
                                    <label class="inline-flex">
                                        <span class="d">Select all</span>
                                        <input id="parent-checkbox" class="i" type="checkbox" @click="toggleAll">
                                    </label>
                                </div>
                            </th>
                            <th class="vi wy w_ vo lm">
                                <div class="gh gt">Title</div>
                            </th>
                            <th class="vi wy w_ vo lm">
                                <div class="gh gt">Image</div>
                            </th>
                            <th class="vi wy w_ vo lm">
                                <div class="gh gt">Category</div>
                            </th>
                            <th class="vi wy w_ vo lm">
                                <div class="gh gt">Genre</div>
                            </th>
                            <th class="vi wy w_ vo lm">
                                <div class="gh gt">Release</div>
                            </th>
                            <th class="vi wy w_ vo lm">
                                <div class="gh gt">Duration</div>
                            </th>
                            <th class="vi wy w_ vo lm">
                                <div class="gh gt">Country</div>
                            </th>
                            <th class="vi wy w_ vo lm">
                                <div class="gh gt">Status</div>
                            </th>
                            <th class="vi wy w_ vo lm">
                                <div class="gh gt">Date</div>
                            </th>
                            <th class="vi wy w_ vo lm">
                                <div class="gh gt">Actions</div>
                            </th>
                        </tr>
                    </thead>
                    <!-- Table body -->
                    <tbody class="text-sm le lr">
                        <!-- Row -->
                        <tr>
                            <td class="vi wy w_ vo lm of">
                                <div class="flex items-center">
                                    <label class="inline-flex">
                                        <span class="d">Select</span>
                                        <input class="table-item i" type="checkbox" @click="uncheckParent">
                                    </label>
                                </div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gp text-slate-800">Dominik</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gp ">-</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt ">Movie</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt ">Thriller</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt ">13 June 2023</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt ">130 mnt</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt ">korea</div>
                            </td>
                          
                            <td class="vi wy w_ vo lm">
                                <div class="inline-flex gp hf yl rounded-full gn vp vd">Overdue</div>
                            </td>

                            <td class="vi wy w_ vo lm">
                                <div>22/07/2021</div>
                            </td>

                            <td class="vi wy w_ vo lm of">
                                <div class="fm">
                                    <button class="gq xv rounded-full" wire:click="addCast(12)">
                                        <span class=" d">Add Cast</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 32 32" stroke-width="2" stroke="currentColor" class=" du w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                                        </svg>

                                    </button>
                                    <button class="gq xv rounded-full">
                                        <span class="d">Edit</span>
                                        <svg class="os sf du" viewBox="0 0 32 32">
                                            <path d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z"></path>
                                        </svg>
                                    </button>

                                    <button class="yl xy rounded-full">
                                        <span class="d">Delete</span>
                                        <svg class="os sf du" viewBox="0 0 32 32">
                                            <path d="M13 15h2v6h-2zM17 15h2v6h-2z"></path>
                                            <path d="M20 9c0-.6-.4-1-1-1h-6c-.6 0-1 .4-1 1v2H8v2h1v10c0 .6.4 1 1 1h12c.6 0 1-.4 1-1V13h1v-2h-4V9zm-6 1h4v1h-4v-1zm7 3v9H11v-9h10z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @foreach ($movies as $movie)
                        <tr>
                            <td class="vi wy w_ vo lm of">
                                <div class="flex items-center">
                                    <label class="inline-flex">
                                        <span class="d">Select</span>
                                        <input class="table-item i" type="checkbox" @click="uncheckParent">
                                    </label>
                                </div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gp text-slate-800">{{ $movie->title }}</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gp ">
                                <img src="{{ asset('storage/'.$movies->small) }}" class="object-scale-down h-48 w-96" alt="{{ $movie->title }}">
                                </div>
                            </td>
                          
                            <td class="vi wy w_ vo lm">
                                <div class="gt">{{ $movie->category_movie_id }}</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt">{{ $movie->genre }}</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt">{{ $movie->release_date }}</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt">{{ $movie->duration }}</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt">{{ $movie->country }}</div>
                            </td>
                            
                            <td class="vi wy w_ vo lm">
                                @if ($movie->status === 'active')
                                    <div class="inline-flex gp hf yl rounded-full gn vp vd">{{ $movie->status }}</div>
                                @endif 

                                @if ($movie->status === 'inactive')
                                    <div class="inline-flex gp hc ys rounded-full gn vp vd">{{ $movie->status }}</div>
                                @endif 
                            </td>

                            <td class="vi wy w_ vo lm">
                                <div>{{ $movie->created_at }}</div>
                            </td>

                            <td class="vi wy w_ vo lm of">
                                <div class="fm">
                                    <button class="gq xv rounded-full" wire:click="addCast({{ $movie->id }})">
                                        <span class=" d">Add Cast</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                                        </svg>

                                    </button>
                                    <button class="gq xv rounded-full" wire:click="showEditModal({{ $movie->id }})">
                                        <span class=" d">Edit</span>
                                        <svg class="os sf du" viewBox="0 0 32 32">
                                            <path d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z"></path>
                                        </svg>
                                    </button>
                                    <button class="yl xy rounded-full" wire:click="deleteId({{ $movie->id }})">
                                    <span class=" d">Delete</span>
                                        <svg class="os sf du" viewBox="0 0 32 32">
                                            <path d="M13 15h2v6h-2zM17 15h2v6h-2z"></path>
                                            <path d="M20 9c0-.6-.4-1-1-1h-6c-.6 0-1 .4-1 1v2H8v2h1v10c0 .6.4 1 1 1h12c.6 0 1-.4 1-1V13h1v-2h-4V9zm-6 1h4v1h-4v-1zm7 3v9H11v-9h10z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <x-pagination-table />
    {{ $movies->links() }}

    <x-jet-dialog-modal wire:model="showMovieModal" class="">

        @if ($movieId)
        <x-slot name="title" class="border-b">Update Movie</x-slot>
        @else
        <x-slot name="title" class="border-b bg-slate-200">
            <span class="font-semibold">Create Movie</span>
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
                                                Movie Title
                                            </label>
                                            <input wire:model="title" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                        </div>
                                        <div class="flex flex-row justify-between">
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="title" class="block text-sm font-medium text-gray-700">
                                                    Category
                                                </label>
                                                <select wire:model="categoryId" class="h-full2 rounded-r border-t border-r border-b block appearance-none w-full bg-white border-gray-300 text-gray-700 py-2 px-4 pr-8 leading-tight focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none">
                                                    <option value="" >Select category</option>
                                                    @foreach($categories as $cat)
                                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="title" class="block text-sm font-medium text-gray-700">
                                                    Genre
                                                </label>
                                                <input wire:model="genres" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            </div>
                                        </div>
                                        <div class="col-start-1 sm:col-span-3">
                                            <label for="description" class="block text-sm font-medium text-gray-700">
                                                Description
                                            </label>
                                            <textarea wire:model="description"  cols="50" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" ></textarea>
                                        </div>
                                        <div class="flex flex-row space-x-4 justify-between2">
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="title" class="block text-sm font-medium text-gray-700">
                                                    Year
                                                </label>
                                                <select wire:model="year" class="h-full2 rounded-r border-t border-r border-b block appearance-none w-full bg-white border-gray-300 text-gray-700 py-2 px-4 pr-8 leading-tight focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none">
                                                <option value="" >Select year</option>
                                                @for ($year=1980; $year <= $currentYear; $year++)
                                                    <option value="{{ $year }}">{{ $year }}</option>
                                                @endfor
                                            </select>
                                            </div>
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="title" class="block text-sm font-medium text-gray-700">
                                                    Country
                                                </label>
                                                <select wire:model="country" class="h-full2 rounded-r border-t border-r border-b block appearance-none w-full bg-white border-gray-300 text-gray-700 py-2 px-4 pr-8 leading-tight focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none">
                                                    <option value="" >Select country</option>
                                                    @foreach($countries as $cat)
                                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="flex flex-row justify-between">
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="title" class="block text-sm font-medium text-gray-700">
                                                    Duration
                                                </label>
                                                <div class="y">
                                                <input wire:model="duration" type="number" min="0" style="padding-left: 4rem;" autocomplete="given-name" class="s ou mv mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                                <div class="g w j flex items-center pointer-events-none">
                                                    <span class="text-sm gq gp vn">Minute</span>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="title" class="block text-sm font-medium text-gray-700">
                                                    Languange
                                                </label>
                                                <input wire:model="lang" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            </div>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="photo" class="block text-sm font-medium text-gray-700">Person
                                                photo</label>
                                            <input wire:model="file" type="file" autocomplete="given-name"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                                @if ($oldImage)
                                                    Photo Preview:
                                                    <img src="{{ asset('storage/'.$oldImage) }}">
                                                @endif
                                                @if ($file)
                                                    Photo Preview:
                                                    <img src="{{ $file->temporaryUrl() }}">
                                                @endif
                                        </div>
                                        <div class="flex justify-between">
                                        <div class="col-start-1 sm:col-span-3">
                                            <label for="title" class="block text-sm font-medium text-gray-700">
                                                Network
                                            </label>
                                            <input wire:model="networks" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                        </div>
                                        <div class="col-start-1 sm:col-span-3">
                                            <label for="title" class="block text-sm font-medium text-gray-700">
                                                Release Date
                                            </label>
                                           
                                            <x-flatpicker wire:model="releaseDate"></x-flatpicker>
                                        </div>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="first-name" class="block text-sm font-medium text-gray-700">Status</label>
                                            <select wire:model="movieStatus" class="h-full rounded-r border-t border-r border-b block appearance-none w-full bg-white border-gray-300 text-gray-700 py-2 px-4 pr-8 leading-tight focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none">
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
                    <x-m-button wire:click="closeMovieModal" class="border-slate-200 hover:text-white hover--border-slate-300 g_">Cancel</x-m-button>
                    @if ($movieId)
                    <x-m-button wire:click="updateMovie" class=" ho xi ye">Update</x-m-button>
                    @else
                    <x-m-button wire:click="createMovie" class=" ho xi ye2">Create</x-m-button>
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