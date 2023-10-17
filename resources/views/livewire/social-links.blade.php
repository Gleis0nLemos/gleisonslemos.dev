<div class="flex-shrink-0 items-center">
    <img 
      src="{{ asset('icons/img-profile.svg') }}" 
      alt="Img Gleison" 
      class="rounded-lg mx-auto mt-4 mb-2" 
    />
    <div class="w-65 h-14 relative mb-2">
      <div class="left-[19px] top-[13px] absolute text-white text-lg font-semibold"
      >
      Social links!
    </div>
    </div>
    <ul class="ml-4">
      @foreach($socialLinks as $socialLink)
        <li class="flex items- mb-1">
          <img 
            class="w-8 h-7" 
            src="{{ asset($socialLink['icon']) }}" 
            alt="Ícone do {{ $socialLink['platform'] }}" 
          />
          <div class="text-white text-lg font-normal font-['Roboto'] ml-2">
            <a 
              href="{{ $socialLink['url'] }}" 
              class="hover:border-b hover:border-gray-200 hover:mb-1 hover:text-gray-200"
              >
              {{ $socialLink['platform'] }}
            </a>
          </div>
        </li>
      @endforeach
    </ul>
</div>