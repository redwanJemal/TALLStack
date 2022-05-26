<div
    class="p-2 flex justify-between items-center bg-white border-b border-gray-200"
    x-data="{ item: @entangle('item') }"
>
    <div class="w-min">
        <div class="flex items-center px-4">
            <input
                id="link-checkbox"
                type="checkbox"
                value=""
                class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
            />
        </div>
    </div>

    <div class="w-2/5 flex bg-white">
        <div class="w-4/5">
            <div class="flex justify-between">
                <div class="">
          <span>
            <img class="h-8" src="{{ $item->supplier_logo }}" alt="" />
          </span>
                </div>
                <div class="">
          <span
              class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 dark:bg-blue-200 dark:text-blue-800"
          >Supply Channel
          </span>
                </div>
            </div>
            <div class="mt-2 flex justify-between">
                <h3 class="text-xs h-10 flex">
                    <a
                        href="#"
                        class="font-medium text-gray-700 hover:text-gray-800 my-auto line-clamp-2"
                    >
                        {{$item->title}}
                    </a>
                </h3>
            </div>
            <div class="mt-2 flex justify-between items-end">
                <div class="flex justify-start">
                    <div class="">
                        <p class="text-xs font-medium">Pack of Qty</p>
                        <div
                            class="flex border border-indigo-300 rounded-lg items-center py-1 w-min"
                        >
                            <button
                                class="text-gray-900 px-1"
                                wire:click="SupplyQuantityMinus()"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="text-black w-5 h-3"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="#000000"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <line x1="5" y1="12" x2="19" y2="12" />
                                </svg>
                            </button>
                            <span class="text-bold text-xl">{{ $supply_quantity }}</span>
                            <button
                                class="text-gray-900 text-2xl px-1"
                                wire:click="SupplyQuantityPlus()"
                            >
                                <svg
                                    class="text-black w-5 h-3"
                                    viewBox="0 0 12 12"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M5 5V0h1v5h5v1H6v5H5V6H0V5h5z"
                                        fill-rule="nonzero"
                                        fill-opacity="1"
                                        fill="#000"
                                        stroke="none"
                                    ></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="ml-2">
                        <p class="text-xs font-medium">Monthly Est. Sales</p>
                        <div
                            type="button"
                            class="text-indigo-800 border border-indigo-300 font-medium rounded-lg text-lg px-6 py-1 text-center inline-flex items-center dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 mr-2 mb-2"
                        >
                            {{ $item->monthly_est_sale }}
                        </div>
                    </div>
                </div>
                <div class="">
                    <button
                        type="button"
                        wire:click="supplyMarkAsBundle()"
                        class="bg-purple-600 hover:bg-purple-500 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-md px-3 py-2 text-xs text-white text-center mr-2 mb-1 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    >
                        Mark as Bundle
                    </button>
                </div>
            </div>
        </div>
        <div class="h-auto w-auto flex items-center">
            <img
                class="w-[128px] h-[128px]"
                src="
                                  {{ $item->img }}"
                alt=""
            />
        </div>
    </div>

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

    <div class="w-2/5 flex bg-white">
        <div class="h-auto w-auto flex items-center">
            <img class="w-[128px] h-[128px]" src="{{$item->match_img}}" alt="" />
        </div>
        <div class="w-4/5">
            <div class="flex justify-between">
                <div class="">
          <span
              class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 dark:bg-blue-200 dark:text-blue-800"
          >Match Channel
          </span>
                </div>
                <div class="">
          <span>
            <img class="h-8" src="{{ $item->match_logo }}" alt="" />
          </span>
                </div>
            </div>
            <div class="mt-2 flex justify-between max-w-[500px]">
                <h3 class="text-xs h-10 flex">
                    <a
                        href="#"
                        class="font-medium text-gray-700 hover:text-gray-800 my-auto line-clamp-2"
                    >
                        {{$item->match_title}}
                    </a>
                </h3>
            </div>
            <div class="mt-2 flex justify-between items-end">
                <div class="flex justify-start">
                    <div class="">
                        <p class="text-xs font-medium">Pack of Qty</p>
                        <div
                            class="flex border border-indigo-300 rounded-lg items-center py-1 w-min"
                        >
                            <button class="text-gray-900 px-1" wire:click="MatchQuantityMinus()">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="text-black w-5 h-3"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="#000000"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <line x1="5" y1="12" x2="19" y2="12" />
                                </svg>
                            </button>
                            <span class="text-bold text-xl"
                            >{{$match_quantity}}</span
                            >
                            <button class="text-gray-900 text-2xl px-1" wire:click="MatchQuantityPlus()">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="text-black w-5 h-3"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="#000000"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <line x1="12" y1="5" x2="12" y2="19" />
                                    <line x1="5" y1="12" x2="19" y2="12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="ml-2">
                        <p class="text-xs font-medium">Monthly Est. Sales</p>
                        <div
                            type="button"
                            class="text-indigo-800 border border-indigo-300 font-medium rounded-lg text-lg px-6 py-1 text-center inline-flex items-center dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 mr-2 mb-2"
                        >
                            {{ $item->match_monthly_est_sale }}
                        </div>
                    </div>
                </div>
                <div class="">
                    <button
                        type="button"
                        wire:click="matchMarkAsBundle()"
                        class="bg-purple-600 hover:bg-purple-500 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-md px-3 py-2 text-xs text-white text-center mr-2 mb-1 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    >
                        Mark as Bundle
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
