<li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
    <a
        {{ $attributes->merge(['class' => 'flex items-center']) }}
    >
        <span class="mr-2 text-sm">&bull;</span>
        <span class="overflow-ellipsis">{{ $slot }}</span>
    </a>
</li>
