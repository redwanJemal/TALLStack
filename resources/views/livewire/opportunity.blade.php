<div class="mt-2">
    @if($items->isEmpty())
        <div class="flex w-full bg-red-100 p-5 rounded-lg">
            <p class="text-gray-600">No Item</p>
        </div>
    @else
        <div class="">
            @foreach ($items as $item)
                <livewire:opportunity-item :item="$item" key="item-$item['id']" />
            @endforeach
        </div>

    @endif

</div>
