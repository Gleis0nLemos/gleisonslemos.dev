<?php

namespace App\Services;

class NavLinkService
{
    public function getAboutPage()
    {
        return [
            [
                'name' => 'About',
                'url' => '/',
            ],
        ];
    }

    public function getProjectsPage()
    {
        return [
            [
                'name' => 'Projects',
                'url' => '/projects',
            ],
        ];
    }

    public function getSourcePage()
    {
        return [
            [   
                'icon' => 'icons/github-icon.svg',
                'name' => 'Source',
                'url' => 'https://github.com/Gleis0nLemos/gleisonslemos.dev',
            ],
        ];
    }
}