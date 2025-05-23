<!DOCTYPE html>
<html>

<head>
    <title>SpringboardLabs - Workshop 101</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="bg-white text-black">
    <div class="flex flex-col">
        @yield('content')
    </div>
</body>

</html>
