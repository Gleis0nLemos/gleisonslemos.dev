<?php

namespace App\Livewire;

use App\Services\AboutMeService;
use Livewire\Component;

class AboutMe extends Component
{
    public $name;
    public $content;

    public function mount($name = null)
    {
        $this->name = $name;
        $aboutMeService = new AboutMeService();
        $this->content = $aboutMeService->getContent($this->name);
    }

    public function getContent()
    {
        return $this->content;
    }

    public function render()
    {
        return view('livewire.about-me', [
            'content' => $this->getContent(),
        ]);
    }
}