<div class="flex items-center">
    <a 
        href="{{ $page[0]['url'] }}" 
        class="ml-3"
    >
        <img 
            class="w-8 h-8" 
            src="{{ asset($page[0]['icon']) }}" 
            alt="Ícone do GitHub"
        >
    </a>
    <a 
        href="{{ $page[0]['url'] }}" 
        class="relative ml-1"
        >
        <span 
            class="hover:border-b hover:border-gray-200 hover:mb-1 hover:text-gray-200"
        >
            {{ $page[0]['name'] }}
        </span>
    </a>
</div>
