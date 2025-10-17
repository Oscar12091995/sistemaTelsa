
@props(
    [
        'title' => config('app.name', 'Laravel'),
        'breadcrumbs' => []
    ]
)
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->



          <wireui:scripts />
         @vite(['resources/css/app.css', 'resources/js/app.js'])


        <!-- Styles -->
        @livewireStyles

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        @stack('css')
    </head>
    <body class="font-sans antialiased bg-gray-50">

        @include('layouts.includes.admin.navigation')
        @include('layouts.includes.admin.siderbar')

        <div class="p-4 sm:ml-64">

            <div class="mt-14 flex items-center">
                @include('layouts.includes.admin.breadcrumb')

                @isset($action)
                    <div class="ml-auto">
                        {{$action}}
                    </div>
                @endisset
            </div>
            {{ $slot }}
        </div>


        @stack('modals')

        @livewireScripts
           <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
           {{-- fontawesome --}}
           <script src="https://kit.fontawesome.com/00b0f77ed0.js" crossorigin="anonymous"></script>

           @if (session('success'))
            <script>
                Swal.fire(@json(session('success')));
            </script>
           @endif
           @if (session('update'))
            <script>
                Swal.fire(@json(session('update')));
            </script>
           @endif
            @if (session('delete'))
            <script>
                Swal.fire(@json(session('delete')));
            </script>
           @endif

           @stack('js')
    </body>
</html>
