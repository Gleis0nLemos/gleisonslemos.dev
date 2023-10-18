<header class="pt-2 py-4 max-w-3xl mx-auto px-4 text-white">
    <div class="flex items-center justify-between">
      <h1 class="text-2xl font-semibold whitespace-nowrap mt-7">
        <a 
          href="/" 
          class="hover:no-underline"
          wire:click.prevent="changeTextColor"
          >
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