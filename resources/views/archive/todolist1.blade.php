<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo List</title>
    @vite('resources/css/app.css')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body class="bg-black text-white font-sans">
    <div class="flex flex-col h-screen px-6 py-4">
        <div class="flex items-center">
            <img src="{{ asset('images/sblabs-logo-white.png') }}" alt="Logo" class="w-32">
        </div>

        <div class="flex flex-col justify-center items-center flex-1 gap-10">
            <h1 class="text-5xl font-extrabold uppercase tracking-wide">ToDo List</h1>

            <div class="w-full max-w-4xl space-y-6">
                <div class="flex flex-wrap justify-between items-center gap-4">
                    <button type="button" class="border-2 border-white py-2 px-6 rounded-lg hover:bg-white/20 transition-all duration-200 cursor-pointer" onclick="toggleModal();">
                        Add Task
                    </button>

                    <select class="border-2 border-white bg-transparent text-white py-2 px-6 rounded-lg hover:bg-white/20 focus:ring-2 focus:ring-white focus:outline-none transition-all duration-200 cursor-pointer">
                        <option value="all" class="text-black">All</option>
                        <option value="completed" class="text-black">Completed</option>
                        <option value="not-completed" class="text-black">Not Completed</option>
                    </select>
                </div>

                <div class="flex flex-col gap-4 max-h-[400px] overflow-y-auto border border-white/50 p-5 rounded-lg bg-white/5 backdrop-blur-sm">
                    @if ($tasks->count() > 0)
                        @foreach ($tasks as $task)
                            <div class="flex items-start gap-4 bg-white text-black p-4 rounded-lg shadow-md">
                                <input type="checkbox" class="w-5 h-5 accent-black mt-1 cursor-pointer" {{ $task->completed ? 'checked' : '' }}>
                                <div class="flex flex-col flex-grow">
                                    <h4 class="text-lg font-semibold {{ $task->completed ? 'line-through' : '' }}">{{ $task->title }}</h4>
                                    <p class="text-sm text-gray-600 {{ $task->completed ? 'line-through' : '' }}">{{ $task->description }}</p>
                                </div>
                                <div class="flex items-center gap-2 ml-auto">
                                    <button class="text-amber-600 hover:bg-amber-100 py-1 px-3 rounded-md border border-amber-600 transition-all cursor-pointer" onclick="editTasks({{ $task }});">
                                        <i class="fa-solid fa-pen"></i>
                                    </button>
                                    <button class="text-red-600 hover:bg-red-100 py-1 px-3 rounded-md border border-red-600 transition-all cursor-pointer">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="text-white text-center py-10">
                            No tasks available.
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    @include('components.todo-modal');

    <script src="{{ asset('javascript/todolist.js') }}"></script>
</body>

</html>
