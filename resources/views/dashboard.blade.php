<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
               <a href="http://127.0.0.1:8000/admin/blog/create" ><button type="button" class="btn btn-info" value="Input Button "> Add Blog</button></a>
               <a href="http://127.0.0.1:8000/admin/category/create"><button type="button" class="btn btn-info" value="Input Button"> Add Category</button></a><br><br>
               <a href="http://127.0.0.1:8000/admin/blog/table" ><button type="button" class="btn btn-success" value="Input Button "> View Blog</button></a>
               <a href="http://127.0.0.1:8000/admin/category/table"><button type="button" class="btn btn-success" value="Input Button"> View Category</button></a><br>

            </div>
        </div>
    </div>
</x-app-layout>
