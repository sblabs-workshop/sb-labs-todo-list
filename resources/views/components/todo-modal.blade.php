<!-- Main modal -->
<div id="todo-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full" data-modal-backdrop="static" tabindex="-1" role="dialog" aria-modal="true">

    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow-sm dark:bg-white">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600/30 border-gray-200">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-[#2A5C3A]">
                    Add Todo Task
                </h3>
                <button type="button" class="text-gray-400 bg-transparenthover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center cursor-pointer " data-modal-hide="default-modal" onclick="toggleModal();">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->

            <form method="POST" action={{ route('todolist.store') }}>
                @csrf
                <div class="p-4 md:p-5 space-y-4">
                    <div>
                        <label for="task_title" class="block mb-2 text-sm font-medium text-gray-900">Task Title</label>
                        <input type="text" id="taskTitle" name="task_title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:placeholder-gray-400 dark:focus:ring-gray-500 dark:focus:border-gray-500 {{ $errors->has('task_title') ? 'border-red-500' : '' }}" placeholder="Enter your Task Title" />

                        @error('task_title')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="task_title" class="block mb-2 text-sm font-medium text-gray-900">Task Description</label>
                        <textarea id="taskDescription" name="task_description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-gray-500 focus:border-gray-500  dark:placeholder-gray-400  dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="Write your thoughts here..."></textarea>
                    </div>

                    <div class="flex items-center mb-4">
                        <input type="checkbox" class="w-4 h-4 bg-gray-100 border-gray-300 rounded-md dark:ring-offset-gray-800 focus:ring-2 accent-[#2A5C3A]" name="is_completed">
                        <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900">Already Completed?</label>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="flex justify-end gap-2 items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600/30">
                    <button type="submit" class="text-green-800 hover:bg-green-100 py-1 px-3 rounded-md border border-green-800 transition-all cursor-pointer font-bold">
                        Save
                    </button>
                    <button type="button" class="text-gray-600 hover:bg-gray-100 py-1 px-3 rounded-md border border-gray-600 transition-all cursor-pointer font-bold" onclick="toggleModal();">
                        Cancel
                    </button>
                </div>
            </form>

            @if ($errors->any())
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        toggleModal();
                    });
                </script>
            @endif
        </div>
    </div>
