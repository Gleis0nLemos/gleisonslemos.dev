<div class="flex items-center">
    <a href="{{ $page[0]['url'] }}" class="ml-2">
        <img class="w-8 h-8" src="{{ asset($page[0]['icon']) }}" alt="Ícone do GitHub">
    </a>
    <a href="{{ $page[0]['url'] }}" class="relative ml-1">
        <span class="hover:border-b hover:border-white hover:mb-1">{{ $page[0]['name'] }}</span>
    </a>
</div>
