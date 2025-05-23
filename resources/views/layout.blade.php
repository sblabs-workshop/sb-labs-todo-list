<!DOCTYPE html>
<html>

<head>
    <title>SpringboardLabs - Workshop 101</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="bg-white text-black">
    <div class="flex gap-4">
        <div class="drawer-open">
            <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />

            <div class="drawer-side">
                <div class="menu bg-black text-base-content min-h-full w-64 p-4">
                    <div class="brand-logo mb-5 pl-2">
                        <img src="{{ asset('images/sblabs-logo-white.png') }}" alt="Logo" class="w-36">
                    </div>

                    <!-- Main navigation items -->
                    <ul class="flex-1 space-y-2">
                        <li class="text-[14px]"><a href="/products">Manage Products</a></li>
                        {{-- Add more links as needed --}}
                    </ul>

                    <!-- Logout at the bottom -->
                    <ul>
                        <li class="text-[14px">
                            <a href="/logout" class="flex flex-row items-center gap-2 w-full">
                                <i class="fa-solid fa-right-from-bracket"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="container mt-[80px]">
            @yield('content')
        </div>
    </div>
</body>

</html>
