<div class="flex-shrink-0 items-center">
    <img 
      src="https://github.com/Gleis0nLemos.png" 
      alt="Img Gleison" 
      class="rounded-lg mx-auto mt-4 mb-2" width="256" height="256" 
    />
    <div class="w-65 h-12 relative mb-2">
      <div class="top-[13px] absolute text-lg lg-plus font-medium"
      >
        Social links!
      </div>
    </div>
    <ul>
      @foreach($socialLinks as $socialLink)
      <div id="heading">
        <li class="flex items- mb-2">
          <p class="mr-1">~</p>
          <img 
            class="{{ $socialLink['icon_config'] }}" 
            src="{{ asset($socialLink['icon']) }}" 
            alt="Ícone do {{ $socialLink['platform'] }}" 
          />
          <div class="text-base font-normal ml-1">
            <a 
              href="{{ $socialLink['url'] }}" 
              class="hover:border-b hover:border-gray-200 hover:mb-1 hover:text-gray-200"
              target="_blank"
              >
              {{ $socialLink['platform'] }}
            </a>
          </div>
        </li>
      </div>
      @endforeach
    </ul>
</div>
<script src="{{ asset('js/scripts.js') }}"></script>