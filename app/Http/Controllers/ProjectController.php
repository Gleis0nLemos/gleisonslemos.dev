<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cache;

class ProjectController extends Controller
{
    public function index()
    {
        $username = 'Gleis0nLemos';
        $perPage = 30; 
        $cacheKey = "github_projects_{$username}";
        $projects = Cache::get($cacheKey);

        if (!$projects) {
            $token = env('GITHUB_TOKEN');

            $page = 1;
            $projects = [];

            do {
                $url = "https://api.github.com/users/{$username}/repos?page={$page}&per_page={$perPage}";

                $client = new Client([
                    'headers' => [
                        'Authorization' => "Bearer $token",
                    ],
                ]);

                $response = $client->get($url);

                if ($response->getStatusCode() === 200) {
                    $data = json_decode($response->getBody(), true);
                    $projects = array_merge($projects, $data);
                }

                $nextPageLink = null;
                $links = $response->getHeader('Link');
                foreach ($links as $link) {
                    if (preg_match('/<([^>]+)>; rel="next"/', $link, $matches)) {
                        $nextPageLink = $matches[1];
                        break;
                    }
                }

                if ($nextPageLink) {
                    $page++;
                } else {
                    break; // Não há mais páginas
                }
            } while ($nextPageLink);

            Cache::put($cacheKey, $projects, 6000); // Armazene em cache os dados por 60 minutos
        }

        return view('projects', compact('projects'));
    }
}