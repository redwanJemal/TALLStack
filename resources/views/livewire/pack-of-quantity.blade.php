<div
    class="flex border border-indigo-300 rounded-lg items-center py-1 w-min"
>
    <button class="text-gray-900 px-1"  wire:click="QuantityMinus()">
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
    <span class="text-bold text-xl">{{ $quantity  }}</span>
    <button class="text-gray-900 text-2xl px-1"
            wire:click="QuantityPlus()">
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
