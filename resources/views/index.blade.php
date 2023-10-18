<x-app-layout>
  @include('header')
  
  <section class="flex flex-col sm:flex-row justify-between sm:space-x-8 max-w-3xl mx-auto mt-8 mb-20 pb-8">
    
    <livewire:social-links />
    
    <div class="flex flex-col items-center sm:items-start sm:justify-start mt-4 sm:mt-0">
      <h1 id="heading" class="text-2xl font-semibold my-4 mb-2 p-2 bg-blue-600 w-fit text-white">
        <livewire:about-me name="apresentation" />
      </h1>
      <p class="my-2 text-justify text-white tracking-wide">
        <livewire:about-me name="content1" />
      </p>
      <p class="my-2 text-justify text-white tracking-wide">
        <livewire:about-me name="content2" />
      </p>
      <div id="heading">
        <h1  class="text-xl font-semibold my-3 mt-6 p-4 pr-7 bg-lime-700 w-fit text-white"">
          <livewire:about-me name="ask" />
        </h1>
        <h1 class="text-lg font-semibold p-4 pr-10 bg-pink-600 w-fit text-white flex hover:bg-pink-700 transition duration-400">
          <img 
            src="{{ asset('icons/curriculum-icon.svg') }}" 
            class="mr-2"
            />
          <livewire:about-me name="curriculum" />
        </h1>
      </div>
    </div>
  </section>
  <footer class="text-center py-4 text-zinc-400 text-base font-normal font-sans mt-20">
    © 2023 Gleison Lemos. All rights reserved.
  </footer>
  <script src="{{ asset('js/scripts.js') }}"></script>
</x-app-layout>
