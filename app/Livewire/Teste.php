<?php

namespace App\Livewire;

use App\Services\SocialLinksService;
use Livewire\Component;

class Teste extends Component
{
    public $socialLinks;

    public function mount(SocialLinksService $socialLinksService)
    {
        $this->socialLinks = $socialLinksService->getSocialLinks();
    }

    public function render()
    {
        return view('livewire.social-links', ['socialLinks' => $this->socialLinks]);
    }
}
    