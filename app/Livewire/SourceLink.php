<?php

namespace App\Livewire;

use App\Services\NavLinkService;
use Livewire\Component;

class SourceLink extends Component
{
    public $page;

    public function mount(NavLinkService $pageService)
    {
       $this->page = $pageService->getSourcePage();
    }

    public function render()
    {
        return view('livewire.source-link');
    }
}
