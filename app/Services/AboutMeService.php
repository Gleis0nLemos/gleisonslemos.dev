<?php

namespace App\Services;

class AboutMeService
{
    public function getContent()
    {
        return [
            'apresentation' => "Hi! I’m Gleison here 👋🏻!",
            'content1' => "I'm an aspiring Systems Analysis and Development academic, I'm 23 years old, I live in Brazil and I'm very interested in backend creations. My hardskills are PHP, Laravel, SQL. My experiences at the moment are personal open source projects.",
            'content2' => "In my free time, I always seek to deepen my knowledge in the world of programming, I recommend that you pay attention to my GitHub. I'm dedicated to becoming a top-notch developer and building your dream project with you giving my all!",
            'ask' => "Needing a dev?!<br/>Let's work together!",
            'curriculum' => "Curriculum Vitae",
        ];
    }
}