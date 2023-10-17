<?php

namespace App\Livewire;

use App\Services\NavLinkService;
use Livewire\Component;

class NavLink extends Component
{
    public $page;

    public function mount(NavLinkService $pageService, $name)
    {
        if ($name === 'About') {
            $this->page = $pageService->getAboutPage();
        } elseif ($name === 'Projects') {
            $this->page = $pageService->getProjectsPage();
        } else {
            $this->page = $pageService->getSourcePage();
        }
    }

    public function render()
    {
        return view('livewire.nav-link');
    }
}
