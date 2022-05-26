
<div class="flex flex-col text-white items-start">
    <div class="flex flex-col">
        <div>
            <h3 class="text-sm text-green-600">Match Acuraccy</h3>
        </div>
        <div class="flex justify-start">
            <h3 class="text-4xl text-green-800">%{{$accuracy}}</h3>
        </div>
    </div>
    <div class="mt-3 flex justify-center">
        <button
            type="button"
            wire:click="confirm()"
            class="text-white bg-blue-600 hover:bg-blue-500 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 mr-2 mb-2"
        >
            <span>
              <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-4 w-5 fill-white"
                  viewBox="0 0 24 24"
                  stroke="#000000"
              >
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path
                    d="M7 11v8a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1v-7a1 1 0 0 1 1 -1h3a4 4 0 0 0 4 -4v-1a2 2 0 0 1 4 0v5h3a2 2 0 0 1 2 2l-1 5a2 3 0 0 1 -2 2h-7a3 3 0 0 1 -3 -3"
                />
              </svg>
            </span>
            Confirm
        </button>
        <button
            type="button"
            wire:click="reject()"
            class="text-white bg-red-500 hover:bg-red-400 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-4 py-2 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 mr-2 mb-2"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="text-blue-900 h-4 w-5 fill-white"
                viewBox="0 0 24 24"
                stroke="#000000"
            >
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path
                    d="M7 13v-8a1 1 0 0 0 -1 -1h-2a1 1 0 0 0 -1 1v7a1 1 0 0 0 1 1h3a4 4 0 0 1 4 4v1a2 2 0 0 0 4 0v-5h3a2 2 0 0 0 2 -2l-1 -5a2 3 0 0 0 -2 -2h-7a3 3 0 0 0 -3 3"
                />
            </svg>
            Reject
        </button>
    </div>
</div>
