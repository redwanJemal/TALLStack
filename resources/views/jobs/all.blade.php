@php
    $nav_class = "inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300";
    $tab_active_class = "text-blue-600 border-b-2 border-blue-600 active";
@endphp
<x-guest-layout>
    <div class="">

        <div class="py-12">
            {{--            <livewire:mach-accuracy></livewire:mach-accuracy>--}}
            <div x-data="{ tab: 'tab1' }" class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px">
                    <li class="mr-2">
                        <a x-on:click.prevent="tab = 'tab1'" href="#" :class="{ '{{$tab_active_class}}': tab === 'tab1' }" class="{{$nav_class}}">All</a>
                    </li>
                    <li class="mr-2">
                        <a x-on:click.prevent="tab = 'tab2'" href="#" :class="{ '{{$tab_active_class}}': tab === 'tab2' }" class="{{$nav_class}}" aria-current="page">Selling</a>
                    </li>
                    <li class="mr-2">
                        <a x-on:click.prevent="tab = 'tab3'" href="#" :class="{ '{{$tab_active_class}}': tab === 'tab3' }" class="{{$nav_class}}">Not Selling</a>
                    </li>
                    <li class="mr-2">
                        <a x-on:click.prevent="tab = 'tab4'" href="#" :class="{ '{{$tab_active_class}}': tab === 'tab4' }" class="{{$nav_class}}">Hidden</a>
                    </li>
                </ul>
                <div x-show="tab === 'tab1'">
                    <livewire:opportunity></livewire:opportunity>
                </div>
                <div x-show="tab === 'tab2'">
                    <h3>Dashboard</h3>

                    <livewire:opportunity></livewire:opportunity>
                </div>
                <div x-show="tab === 'tab3'">
                    <h3>Settings</h3>

                    <livewire:opportunity></livewire:opportunity>
                </div>
                <div x-show="tab === 'tab4'">
                    <h3>Contacts</h3>

                    <livewire:opportunity></livewire:opportunity>
                </div>
            </div>

        </div>
        {{--        <div>--}}
        {{--            {{ count($products) }}--}}
        {{--        </div>--}}
    </div>

</x-guest-layout>
