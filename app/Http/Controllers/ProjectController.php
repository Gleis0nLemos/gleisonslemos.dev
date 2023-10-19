<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ProjectController extends Controller
{
    public function index()
    {
        $username = 'Gleis0nLemos';
        $perPage = 30; 

        $token = env('GITHUB_TOKEN'); 
        
        $url = "https://api.github.com/users/{$username}/repos?per_page={$perPage}";

        $client = new Client([
            'headers' => [
                'Authorization' => "Bearer $token",
            ],
        ]);

        $response = $client->get($url);

        if ($response->getStatusCode() === 200) {
            $projects = json_decode($response->getBody(), true);
        } else {
            $projects = [];
        }

        return view('projects', compact('projects'));
    }
}