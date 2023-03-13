<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <link href="{{ URL::asset('admin/css/flatpickr.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('admin/css/style.css') }}" rel="stylesheet" />

    <script src="{{ mix('js/app.js') }}" defer></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <style>
        input[type=file] {
            width: 100%;
            max-width: 100%;
            color: #444;
            padding: 3px;
            background: #fff;
            border-radius: 3px;
            border: 1px solid #555;
        }

        input[type=file]::file-selector-button {
            margin-right: 20px;
            border: none;
            background: #1e293b;
            padding: 6px 14px;
            border-radius: 3px;
            color: #fff;
            cursor: pointer;
            transition: background .2s ease-in-out;
        }

        input[type=file]::file-selector-button:hover {
            background: #0d45a5;
        }
    </style>

    @stack('styles')
    @livewireStyles
</head>

<body class="font-inter antialiased bg-slate-100 text-slate-600" :class="{ 'sidebar-expanded': sidebarExpanded }" x-data="{ sidebarOpen: false, sidebarExpanded: localStorage.getItem('sidebar-expanded') == 'true' }" x-init="$watch('sidebarExpanded', value => localStorage.setItem('sidebar-expanded', value))">

    <script>
        if (localStorage.getItem('sidebar-expanded') == 'true') {
            document.querySelector('body').classList.add('sidebar-expanded');
        } else {
            document.querySelector('body').classList.remove('sidebar-expanded');
        }
    </script>

    <!-- Page wrapper -->
    <div class="flex h-screen overflow-hidden ss la ">

        <x-app.sidebar />

        <!-- Content area -->
        <div class="relative flex flex-col flex-1 overflow-y-auto overflow-x-hidden @if($attributes['background']){{ $attributes['background'] }}@endif y flex ak ug ll lc bg-white" x-ref="contentarea">

            <x-app.header />

            <main>
                {{ $slot }}
            </main>

        </div>

    </div>

    @livewireScripts
    @stack('js')
    <script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v0.x.x/dist/livewire-sortable.js"></script>

    <script>
        window.addEventListener('banner-message', event => {
            toastr[event.detail.style](event.detail.message,
                event.detail.title ?? ''), toastr.options = {
                "closeButton": true,
                "progressBar": true,
            }
        });
    </script>
</body>

</html>