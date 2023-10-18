<?php

namespace App\Services;

class SocialLinksService
{
    public function getSocialLinks()
    {
        return [
            [
                'icon_config' => 'w-7 h-6 rounded-lg',
                'icon' => 'icons/github-icon-2.svg',
                'platform' => 'Github',
                'url' => 'https://github.com/Gleis0nLemos',
            ],

            [
                'icon_config' => 'w-7 h-6',
                'icon' => 'icons/gmail-icon.svg',
                'platform' => 'Gmail',
                'url' => 'mailto:gleison04lemos@gmail.com',
            ],

            [
                'icon_config' => 'w-7 h-6',
                'icon' => 'icons/linkedin-icon.svg',
                'platform' => 'LinkedIn',
                'url' => 'https://www.linkedin.com/in/gleison-lemos-3b3929239',
            ],

            [
                'icon_config' => 'w-7 h-6 mb-1',
                'icon' => 'icons/instagram-icon.svg',
                'platform' => 'Instagram',
                'url' => 'https://www.instagram.com/__gleisonlemos/',
            ],

            [
                'icon_config' => 'w-7 h-6',
                'icon' => 'icons/twitter-icon.svg',
                'platform' => 'Twitter',
                'url' => 'https://twitter.com/_KZu__',
            ],
        ];
    }
}