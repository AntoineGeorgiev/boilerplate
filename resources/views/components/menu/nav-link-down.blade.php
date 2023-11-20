@props([
    'leadingIcon' => false,
])

<div
    x-data="{ linkHover: false, linkActive: false }"
>
    <div
        @mouseover = "linkHover = true"
        @mouseleave = "linkHover = false"
        @click = "linkActive = !linkActive"
        class="flex items-center justify-between px-6 py-3 text-gray-400 transition duration-200 cursor-pointer hover:text-gray-100 hover:bg-black hover:bg-opacity-30"
        :class=" linkActive ? 'bg-black bg-opacity-30 text-gray-100' : ''"
    >
        <div class="flex items-center">
            @if ($leadingIcon)
                <span>
                    {{ $leadingIcon }}
                </span>
            @endif

            <span class="ml-3">{{ __('Email') }}</span>
        </div>
        
        <svg class="w-3 h-3 transition duration-300" :class="linkActive ? 'rotate-90' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
    </div>
    <!-- start::Submenu -->
    <ul
        x-show="linkActive"
        x-cloak
        x-collapse.duration.300ms
        class="text-gray-400"
    >
        {{ $slot }}
    </ul>
    <!-- end::Submenu -->
</div>
