<x-guest-layout>
    <div class="relative min-h-screen flex flex-col">
        <nav class="flex-shrink-0 bg-indigo-600 text-white">
            <div class="max-w-7xl mx-auto px-8">
                <div class="relative flex items-center justify-between h-16">
                    <div class="flex items-center px-2">
                        <div class="flex flex-row flex-shrink-0">
                            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-300.svg" alt="Workflow">
                            <span class="text-3xl font-bold ml-4">ArbitBox</span>
                        </div>
                    </div>

                    <div class="block w-80">
                        <div class="flex items-center justify-end">
                            <div class="flex">
                                @auth
                                    <a href="{{ route('jobs') }}" class="px-3 py-2 rounded-md text-sm font-medium text-indigo-200 hover:text-white">Jobs</a>
                                    <a
                                        href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                        class="px-3 py-2 rounded-md text-sm font-medium text-indigo-200 hover:text-white"
                                    >
                                        Log out
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                @else
                                    <a href="{{ route('login') }}" class="px-3 py-2 rounded-md text-sm font-medium text-indigo-200 hover:text-white">Login</a>

                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="py-12">
            <livewire:mach-accuracy></livewire:mach-accuracy>
        </div>
        <div>
            {{ count($products) }}
        </div>
    </div>

</x-guest-layout>
