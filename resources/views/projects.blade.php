<x-app-layout>
    @include('header')

    <main class="mb-12 max-w-3xl mx-auto px-4 text-white">
        <h1 
            class="text-3xl font-bold mb-8 mt-8 px-4 py-2 bg-blue-600 w-fit"
            id="heading"
            >
            Projects or Contributions!
        </h1>
        {{-- <p class="text-lg mb-8 text-justify">
            //
        </p> --}}
        <ul class="grid grid-cols-1 mt-4 sm:grid-cols-2 gap-4">
            @foreach ($projects as $project)
            <div class="flex flex-col p-4 h-full bg-stone-600">
                <div class="flex items-center justify-between">
                        <a 
                            href="{{ $project['html_url'] }}"
                            class="px-4 py-2 bg-stone-800 hover:no-underline" 
                            rel="noopener noreferrer"
                            target="_blank" 
                            aria-label="writedown" 
                            title="writedown"
                            >
                        <h2 class="flex items-center space-x-2 text-xl font-bold">
                            <svg 
                                stroke="currentColor"
                                fill="currentColor" 
                                stroke-width="0" 
                                viewBox="0 0 496 512" 
                                height="18"
                                width="18" 
                                xmlns="http://www.w3.org/2000/svg"
                                >
                                <path
                                    d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z">
                                </path>
                            </svg>
                            <span>
                                {{ $project['name'] }}
                            </span>
                        </h2>
                    </a>
                    <span class="flex items-center space-x-1">
                        <svg 
                            stroke="currentColor" 
                            fill="currentColor"
                            stroke-width="0" 
                            viewBox="0 0 256 256" 
                            height="18" 
                            width="18"
                            xmlns="http://www.w3.org/2000/svg"
                            >
                            <path
                                d="M243,96.05a20,20,0,0,0-17.26-13.72l-57-4.93-22.3-53.14h0a20,20,0,0,0-36.82,0L87.29,77.4l-57,4.93A20,20,0,0,0,18.87,117.4l43.32,37.8-13,56.24A20,20,0,0,0,79,233.1l49-29.76,49,29.76a20,20,0,0,0,29.8-21.66l-13-56.24,43.32-37.8A20,20,0,0,0,243,96.05Zm-66.75,42.62a20,20,0,0,0-6.35,19.63l11.39,49.32-42.94-26.08a19.9,19.9,0,0,0-20.7,0L74.71,207.62,86.1,158.3a20,20,0,0,0-6.35-19.63L41.66,105.44,91.8,101.1a19.92,19.92,0,0,0,16.69-12.19L128,42.42l19.51,46.49A19.92,19.92,0,0,0,164.2,101.1l50.14,4.34Z">
                            </path>
                        </svg>
                        <span class="font-mono mt-[3px]">
                            {{ $project['stars'] }}
                        </span>
                    </span>
                </div>
                <div class="flex flex-col h-full my-4">
                    <p class="mb-2">
                        {{ $project['description'] }}
                    </p>
                    <b class="mt-auto">
                        <a 
                            href="/projects"
                            class="flex items-center space-x-1" 
                            rel="noopener noreferrer" 
                            target="_blank"
                            aria-label="writedown deploy" 
                            title="writedown deploy">
                            <span>
                                Deploy
                            </span>
                            <svg
                                stroke="currentColor" 
                                fill="currentColor" 
                                stroke-width="0" 
                                viewBox="0 0 512 512"
                                height="12" 
                                width="12" 
                                xmlns="http://www.w3.org/2000/svg"
                                >
                                <path
                                    d="M432,320H400a16,16,0,0,0-16,16V448H64V128H208a16,16,0,0,0,16-16V80a16,16,0,0,0-16-16H48A48,48,0,0,0,0,112V464a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V336A16,16,0,0,0,432,320ZM488,0h-128c-21.37,0-32.05,25.91-17,41l35.73,35.73L135,320.37a24,24,0,0,0,0,34L157.67,377a24,24,0,0,0,34,0L435.28,133.32,471,169c15,15,41,4.5,41-17V24A24,24,0,0,0,488,0Z">
                                </path>
                            </svg>
                        </a>
                    </b>
                </div>
                <div class="flex w-full items-center mt-auto justify-between">
                    @foreach ($project['contributor_names'] as $index => $contributorName)
                    <div class="flex items-center space-x-2">
                        <img
                            src="{{ $project['contributor_avatars'][$index] }}" 
                            alt="NayamAmarshe"
                            class="w-8 h-8 rounded-full border border-blue-600" 
                            loading="lazy">
                            <a
                                href="https://github.com/{{ $contributorName }}" 
                                rel="noopener noreferrer" 
                                target="_blank"
                                aria-label="NayamAmarshe github" 
                                title="NayamAmarshe github">
                                {{ $contributorName }}
                            </a>
                        </div>
                        @endforeach
                    <span>
                        {{ $project['language'] }}
                    </span>
                </div>
            </div>
        @endforeach
    </main>
    
    @include('footer')
    
    <script src="{{ asset('js/scripts.js') }}"></script>
</x-app-layout>
