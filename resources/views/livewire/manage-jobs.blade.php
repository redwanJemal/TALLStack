<div x-data="{ showNewJobModal: @entangle('showNewJobModal') }">
    <div class="w-full h-screen px-6 py-3">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="flex justify-between items-center px-4">
                <div class="p-4">
                    <label for="table-search" class="sr-only">Search</label>
                    <div class="relative mt-1">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <x-input type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search jobs" wire:model="search"></x-input>
                    </div>
                </div>
                <x-button x-on:click="showNewJobModal = true">Add New</x-button>
            </div>
            @if ($jobs->isEmpty())
                <div class="px-6 py-3">
                    <div class="flex w-full bg-red-100 p-5 rounded-lg">
                        <p class="text-gray-600">
                            No job related to your search
                        </p>
                    </div>
                </div>
            @else
                <div class="px-6 py-3">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-all-search" type="checkbox"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Title
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Description
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Salary
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($jobs as $job)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="w-4 p-4">
                                        <div class="flex items-center">
                                            <input id="checkbox-table-search-1" type="checkbox"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                        </div>
                                    </td>
                                    <td scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                        {{ $job->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $job->description }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $job->salary }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $job->status == 1 ? 'Active' : 'Inactive' }}
                                    </td>
                                    <td>
                                        <x-button
                                            class="border border-red-500 rounded-2xl text-red-500 bg-red-50 hover:bg-red-100"
                                            wire:click="delete({{ $job->id }})">
                                            Delete
                                        </x-button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-4 bg-white min-w-0 flex-1 px-32 mb-5">
                        {{ $jobs->links() }}
                    </div>
                </div>
            @endif
        </div>
    </div>
    <div x-show="showNewJobModal" x-on:click.self="showNewJobModal = false"
        x-on:keydown.escape.window="showNewJobModal = false"
        class="flex fixed top-0 bg-gray-900 bg-opacity-60 items-center h-full w-full" x-cloak>
        <div class="mx-auto bg-indigo-600">
            <form class="flex flex-col items-center p-20" wire:submit.prevent="postJob">
                <span class="text-gray-100 text-3xl">
                    Post New Job
                </span>
                <x-input class="mt-2 px-5 py-3 w-80 border-blue-400" type="text" name="name" placeholder="Job Title"
                    wire:model.defer="name">
                </x-input>
                <span class="w-full flex justify-start  mt-2 text-red-800 text-xs">
                    {{ $errors->has('name') ? $errors->first('name') : '' }}
                </span>
                <x-input class="mt-2 px-5 py-3 w-80 border-blue-400" type="text" name="description"
                    wire:model.defer="description" placeholder="Job Description">
                </x-input>
                <span class="w-full flex justify-start mt-2 text-red-800 text-xs">
                    {{ $errors->has('description') ? $errors->first('description') : '' }}
                </span>
                <x-input class="mt-2 px-5 py-3 w-80 border-blue-400" type="number" name="salary"
                    wire:model.defer="salary" placeholder="Job Salary">
                </x-input>
                <span class="w-full flex justify-start mt-2 text-red-800 text-xs">
                    {{ $errors->has('salary') ? $errors->first('salary') : '' }}
                </span>
                <x-input class="mt-2 px-5 py-3 w-80 border-blue-400" type="email" name="email" wire:model.defer="email"
                    placeholder="Email to send resume">
                </x-input>
                <span class="w-full flex justify-start mt-2 text-red-800 text-xs">
                    {{ $errors->has('email') ? $errors->first('email') : '' }}
                </span>
                <x-button class="px-5 py-3 mt-5 w-80 bg-green-500 justify-center">
                    <span class="animate-spin" wire:loading wire:target='postJob'>&#9696;</span>
                    <span wire:loading.remove wire:target='postJob'>Post Job</span>
                </x-button>
            </form>
        </div>

    </div>
</div>
