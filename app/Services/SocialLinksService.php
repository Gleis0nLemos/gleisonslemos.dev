<?php

namespace App\Services;

class SocialLinksService
{
    public function getSocialLinks()
    {
        return [
            [
                'icon' => 'icons/github-icon-2.svg',
                'platform' => 'Github',
                'url' => 'https://github.com/Gleis0nLemos',
            ],

            [
                'icon' => 'icons/gmail-icon.svg',
                'platform' => 'Gmail',
                'url' => 'mailto:gleison04lemos@gmail.com',
            ],

            [
                'icon' => 'icons/linkedin-icon.svg',
                'platform' => 'LinkedIn',
                'url' => 'https://www.linkedin.com/in/gleison-lemos-3b3929239',
            ],

            [
                'icon' => 'icons/instagram-icon.svg',
                'platform' => 'Instagram',
                'url' => 'https://www.instagram.com/__gleisonlemos/',
            ],

            [
                'icon' => 'icons/twitter-icon.svg',
                'platform' => 'Twitter',
                'url' => 'https://twitter.com/_KZu__',
            ],
        ];
    }
}