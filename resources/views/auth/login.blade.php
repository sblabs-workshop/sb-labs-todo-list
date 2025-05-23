@extends('auth.layout')
@section('content')
    <div class="flex flex-col min-h-screen justify-center items-center bg-gray-700/60">
        <div class="card w-96 bg-white card-md shadow-md">
            <div class="card-body flex flex-col gap-4">
                <h2 class="card-title text-2xl">Login</h2>

                <div class="flex flex-col">
                    <div class="flex flex-col gap-4 mt-5">
                        <div class="flex flex-col gap-2">
                            <label for="name" class="text-[14px] font-medium">Username</label>
                            <input type="text" class="input input-sm input-bordered w-full bg-white border-gray-500/30 focus:border-gray-500/50 focus:outline-none" id="name" name="name">
                        </div>
                    </div>
                </div>

                <div class="flex flex-col">
                    <div class="flex flex-col gap-2">
                        <div class="flex flex-col gap-2">
                            <label for="name" class="text-[14px] font-medium">Password</label>
                            <input type="text" class="input input-sm input-bordered w-full bg-white border-gray-500/30 focus:border-gray-500/50 focus:outline-none" id="name" name="name">
                        </div>
                    </div>
                </div>


                <div class="flex flex-col gap-4 mt-2">
                    <div class="flex flex-col">
                        <button class="btn btn-neutral">
                            Login
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
