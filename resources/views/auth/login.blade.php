@extends('auth.layout')
@section('content')
    <div class="flex flex-col min-h-screen justify-center items-center bg-gray-700/60">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="card w-96 bg-white card-md shadow-md">
                <div class="card-body flex flex-col gap-4">
                    <h2 class="card-title text-2xl">Login</h2>

                    <div class="flex flex-col">
                        <div class="flex flex-col gap-4 mt-5">
                            <div class="flex flex-col gap-2">
                                <label for="email" class="text-[14px] font-medium">Email</label>
                                <input type="email" class="input input-sm input-bordered w-full bg-white border-gray-500/30 focus:border-gray-500/50 focus:outline-none" id="email" name="email">

                                @if ($errors->has('email'))
                                    <p class="text-red-500 text-sm mt-1">
                                        {{ $errors->first('email') }}
                                    </p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col">
                        <div class="flex flex-col gap-2">
                            <div class="flex flex-col gap-2">
                                <label for="password" class="text-[14px] font-medium">Password</label>
                                <input type="password" class="input input-sm input-bordered w-full bg-white border-gray-500/30 focus:border-gray-500/50 focus:outline-none" id="password" name="password">

                                @if ($errors->has('password'))
                                    <p class="text-red-500 text-sm mt-1">
                                        {{ $errors->first('password') }}
                                    </p>
                                @endif
                            </div>
                        </div>
                    </div>


                    <div class="flex flex-col gap-4 mt-2">
                        <div class="flex flex-col">
                            <button type="submit" class="btn btn-neutral">
                                Login
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
