<x-app-layout>
  <header class="pt-2 py-4 max-w-3xl mx-auto px-4 bg-black text-white">
    <div class="flex items-center justify-between">
      <h1 class="text-2xl font-bold whitespace-nowrap mt-7">
        <a href="/teste" class="hover:no-underline">Gleison Lemos</a> 
      </h1>
      <nav class="w-full h-16 bg-black text-white relative flex justify-end items-center p-5">
          <ul class="flex items-center space-x-4">
              <li class="mr-2 mt-7">
                <a href="#" class="text-base font-medium font-Roboto">About</a>
              </li>
              <li class="ml-2 mt-7">
                  <a href="#" class="text-base font-medium font-Roboto">Projects</a>
              </li>
              <li>
                  <div class="flex items-center mt-7">
                      <a href="https://github.com/Gleis0nLemos/gleisonslemos.dev" class="ml-2">
                        <img class="w-8 h-8" src="{{ asset('icons/github-icon.svg') }}" alt="Ícone do GitHub" />
                      </a>
                      <div class="ml-1">
                        <a href="https://github.com/Gleis0nLemos/gleisonslemos.dev" class="text-base font-medium font-Roboto">Source</a>  
                      </div>
                  </div>
              </li>
          </ul>
      </nav>
    </div>
  </header>

  <section class="flex flex-col sm:flex-row justify-between sm:space-x-8 max-w-3xl mx-auto mt-8 mb-20 pb-20 bg-black">
    <div class="flex-shrink-0 items-center">
      <img  src="{{ asset('icons/img-profile.svg') }}" alt="Img Gleison" class="rounded-lg mx-auto mt-4 mb-2"/>
      <div class="w-65 h-14 relative bg-gray-950 mb-2">
        <div class="left-[19px] top-[13px] absolute text-white text-2xl font-extrabold font-['Roboto']">Social links!</div>
      </div>
      <div class="flex items- mb-1 ml-4">
        <img class="w-8 h-7" src="{{ asset('icons/github-icon-2.svg') }}" alt="Ícone do GitHub" />
        <div class="text-white text-lg font-normal font-['Roboto'] ml-2"><a href="https://github.com/Gleis0nLemos">Github</a></div>
      </div>
      <div class="flex items- mb-1 ml-4">
        <img class="w-8 h-7" src="{{ asset('icons/gmail-icon.svg') }}" alt="Ícone do GitHub" />
        <div class="text-white text-lg font-normal font-['Roboto'] ml-2">Gmail</div>
      </div>
      <div class="flex items- mb-1 ml-4">
        <img class="w-8 h-7" src="{{ asset('icons/linkedin-icon.svg') }}" alt="Ícone do GitHub" />
        <div class="text-white text-lg font-normal font-['Roboto'] ml-2">LinkedIn</div>
      </div>
      <div class="flex items- mb-1 ml-4">
        <img class="w-8 h-7" src="{{ asset('icons/instagram-icon.svg') }}" alt="Ícone do GitHub" />
        <div class="text-white text-lg font-normal font-['Roboto'] ml-2">Instagram</div>
      </div>
      <div class="flex items- mb-1 ml-4">
        <img class="w-8 h-7" src="{{ asset('icons/twitter-icon.svg') }}" alt="Ícone do GitHub" />
        <div class="text-white text-lg font-normal font-['Roboto'] ml-2">Twitter</div>
      </div>
    </div>
    <div class="flex flex-col items-center sm:items-start sm:justify-start mt-4 sm:mt-0">
      <h1 class="text-2xl font-bold my-4 p-2 bg-blue-600 w-full text-white" transition:animate="slide">
        Hi! I’m Gleison here 👋🏻!
      </h1>
      <p class="my-2 text-justify text-white">
        I'm an aspiring Systems Analysis and Development academic, I'm 23 years old, I live in Brazil and I'm very interested in backend creations. My hardskills are PHP, Laravel, SQL. My experiences at the moment are personal open source projects.
      </p>
      <p class="my-2 text-justify text-white">
        In my free time, I always seek to deepen my knowledge in the world of programming, I recommend that you pay attention to my GitHub. I'm dedicated to becoming a top-notch developer and building your dream project with you giving my all!
      </p>
      <h1 class="text-2xl font-bold my-4 p-4 pr-8 bg-lime-800 w-fit text-white" transition:animate="slide">
        Needing a dev?<br/>Let's work together!
      </h1>
      <h1 class="text-2xl font-bold p-4 pr-8 bg-blue-600 w-fit text-white flex" transition:animate="slide">
        <img src="{{ asset('icons/curriculum-icon.svg') }}" class="mr-1"/>
        Curriculum Vitae
      </h1>
  </section>
  <footer class="text-center py-4 bg-black text-zinc-400 text-lg font-normal font-Roboto mt-20">
    © 2023 Gleison Lemos. All rights reserved.
  </footer>
</x-app-layout>