@extends('layout')
@section('content')
    <div class="flex flex-col px-10 gap-4">
        <div class="flex gap-4 justify-between">
            <h2 class="text-[24px] font-bold">Create Product</h2>
            <a href="/products" class="btn btn-wide btn-neutral btn-outline">
                <i class="fa-solid fa-arrow-left"></i>
                Back
            </a>
        </div>

        <div class="card w-full card-sm shadow-sm border border-gray-500/10">
            <div class="card-body flex flex-col gap-4">
                <h2 class="card-title text-[20px] font-bold">Product Information</h2>

                <div class="flex flex-col gap-4 mt-5">
                    <div class="flex flex-col gap-2">
                        <label for="name" class="text-[14px] font-medium">Product Name</label>
                        <input type="text" class="input input-bordered w-full bg-white border-gray-500/30 focus:border-gray-500/50 focus:outline-none" id="name" name="name">
                    </div>
                </div>

                <div class="flex flex-col gap-2">
                    <label for="description" class="text-[14px] font-medium">Product Description</label>
                    <textarea class="textarea textarea-sm w-full bg-white border-gray-500/30 focus:border-gray-500/50 focus:outline-none" id="description" name="description"></textarea>
                </div>


                <div class="flex flex-col gap-4">
                    <div class="flex flex-col gap-2">
                        <label for="price" class="text-[14px] font-medium">Product Price</label>
                        <input type="number" class="input input-bordered w-full bg-white border-gray-500/30 focus:border-gray-500/50 focus:outline-none" id="price" name="price">
                    </div>
                </div>

                <div class="flex flex-col gap-4 mt-2">
                    <div class="flex flex-col gap-2 self-end">
                        <button class="btn btn-wide btn-neutral">
                            Save Product
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
