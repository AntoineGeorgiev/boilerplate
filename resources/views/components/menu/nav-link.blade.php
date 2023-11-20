@props([
    'leadingIcon' => false,
])

<a
    x-data="{ linkHover: false }"
    @mouseover = "linkHover = true"
    @mouseleave = "linkHover = false"
    {{ $attributes->merge(['class' => 'flex items-center px-6 py-3 text-gray-400 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30']) }}
>
    @if ($leadingIcon)
        <span>
            {{ $leadingIcon }}
        </span>
    @endif

    <span
        class="ml-3 transition duration-200"
        :class="linkHover ? 'text-gray-100' : ''"
    >
        {{ $slot }}
    </span>
</a>
