<div class="mt-2">
    @if($items->isEmpty())
        <div class="flex w-full bg-red-100 p-5 rounded-lg">
            <p class="text-gray-600">No Job related to your search</p>
        </div>
    @else
        <div class="">
            @foreach ($items as $item)
                <livewire:single-item :item="$item" :key="$item['id']" />
            @endforeach
        </div>

    @endif

</div>
