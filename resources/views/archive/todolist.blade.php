@extends('layout')
@section('content')
    <div class="flex flex-col px-10 gap-4">
        <div class="flex gap-4 justify-between">
            <h2 class="text-[24px] font-bold">Product List</h2>
            <button class="btn btn-wide btn-neutral">
                <i class="fa-solid fa-plus"></i>
                Create Product
            </button>
        </div>

        <div class="mt-5 overflow-x-auto rounded-box border border-gray-500/30">
            <table class="table ">
                <thead class="!text-black">
                    <tr>
                        <th>#</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <td>Product 1</td>
                        <td>100</td>
                        <td>
                            <button class="btn btn-sm btn-outline btn-neutral">
                                <i class="fa-solid fa-pencil"></i>
                            </button>
                            <button class="btn btn-sm btn-outline btn-error">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th>2</th>
                        <td>Product 2</td>
                        <td>200</td>
                        <td>
                            <button class="btn btn-sm btn-outline btn-neutral">
                                <i class="fa-solid fa-pencil"></i>
                            </button>
                            <button class="btn btn-sm btn-outline btn-error">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th>3</th>
                        <td>Product 3</td>
                        <td>300</td>
                        <td>
                            <button class="btn btn-sm btn-outline btn-neutral">
                                <i class="fa-solid fa-pencil"></i>
                            </button>
                            <button class="btn btn-sm btn-outline btn-error">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
