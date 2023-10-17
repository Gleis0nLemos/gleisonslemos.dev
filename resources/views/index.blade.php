<x-app-layout>
  <header class="pt-2 py-4 max-w-3xl mx-auto px-4 text-white">
    <div class="flex items-center justify-between">
      <h1 class="text-2xl font-extrabold whitespace-nowrap mt-7">
        <a 
          href="/" 
          class="hover:no-underline">
          Gleison Lemos
          </a>
      </h1>
      <nav class="w-full h-16 text-white relative flex justify-end items-center p-5">
        <ul class="flex items-center space-x-4 mt-7">
          <li>
            <livewire:nav-link name="About" />
          </li>
          <li>
            <livewire:nav-link name="Projects" />
          </li>
          <li>
            <div class="flex items-center">
              <livewire:source-link name="Source" />
            </div>
          </li>
        </ul>
      </nav>
    </div>
  </header>
  
  <section class="flex flex-col sm:flex-row justify-between sm:space-x-8 max-w-3xl mx-auto mt-8 mb-20 pb-8">
    
    <livewire:social-links />
    
    <div class="flex flex-col items-center sm:items-start sm:justify-start mt-4 sm:mt-0">
      <h1 class="text-2xl font-bold my-4 mb-2 p-2 bg-blue-600 w-full text-white">
        Hi! I’m Gleison here 👋🏻!
      </h1>
      <p class="my-2 text-justify text-white tracking-wide">
        I'm an aspiring Systems Analysis and Development academic, I'm 23 years old, I live in Brazil and I'm very interested in backend creations. My hardskills are PHP, Laravel, SQL. My experiences at the moment are personal open source projects.
      </p>
      <p class="my-2 text-justify text-white tracking-wide">
        In my free time, I always seek to deepen my knowledge in the world of programming, I recommend that you pay attention to my GitHub. I'm dedicated to becoming a top-notch developer and building your dream project with you giving my all!
      </p>
      <h1 class="text-2xl font-bold my-4 mt-8 p-4 pr-7 bg-lime-800 w-fit text-white"">
        Needing a dev?<br/>Let's work together!
      </h1>
      <h1 class="text-2xl font-bold p-4 pr-8 bg-blue-600 w-fit text-white flex"">
        <img src="{{ asset('icons/curriculum-icon.svg') }}" class="mr-1"/>
        Curriculum Vitae
      </h1>
  </section>
  <footer class="text-center py-4 text-zinc-400 text-base font-normal font-sans mt-20">
    © 2023 Gleison Lemos. All rights reserved.
  </footer>
</x-app-layout>