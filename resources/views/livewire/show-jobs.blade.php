<div x-data="{ current: null, showModal: false, test:'test text' }">
    <div class="w-full flex justify-center px-32 mb-5">
        <input wire:model="search" id="search" name="search" type="text" class="appearance-none block w-96 px-3 py-2 m-5 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-" placeholder="Search query ..." />
    </div>

    @if($jobs->isEmpty())
        <div class="flex w-full bg-red-100 p-5 rounded-lg">
            <p class="text-gray-600">
                No Job related to your search
            </p>
        </div>
    @else
    <div class="bg-white min-w-0 flex-1 px-32 mb-5">
        @foreach ($jobs as $job)
        <div class="border-b border-gray-100 p-5 cursor-pointer" x-on:click="showModal = true" wire:click="jobDetail({{ $job->id }})">
            <h2 class="font-medium text-xl">{{ $job->name }}</h2>
            <p >{{ $job->description }}</p>
        </div>
        @endforeach
    </div>
    @endif

    <div class="bg-white min-w-0 flex-1 px-32 mb-5">
        {{ $jobs->links() }}
    </div>

    @if($selectedJob)
        <div x-show="showModal">
            {{ $selectedJob->name }}
        </div>
    @endif
    <template x-if="showModal">
        <div class="fixed z-10 inset-0 overflow-y-auto">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center">

                <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                </div>

                <div class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all" role="dialog" aria-modal="true" aria-labelledby="modal-headline" @click.away="showModal = false">
                <div class="">
                    <div class="mt-3 text-center">
                    <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">
                        <p x-text="current.name"></p>
                    </h3>
                    <div class="mt-2">
                        <p class="text-sm text-gray-500" x-text="current.description"></p>
                    </div>
                    </div>
                </div>
                <div class="mt-5">
                    <button @click="showModal = false" type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                    Close
                    </button>
                </div>
                </div>
            </div>
        </div>
    </template>
</div>