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
        $selectedProjectNames = ['super_gestao', 'laravel-commerce-checkout', 'NLW_10-EXPLORER'];

        $cacheKey = "github_projects_{$username}";
        $projects = Cache::get($cacheKey);

        if (!$projects) {
            $token = env('GITHUB_TOKEN');
            $projects = [];

            foreach ($selectedProjectNames as $projectName) {
                // Faz uma solicitação para obter os detalhes do repositório
                $url = "https://api.github.com/repos/{$username}/$projectName";

                $client = new Client([
                    'headers' => [
                        'Authorization' => "Bearer $token",
                    ],
                ]);

                $response = $client->get($url);

                if ($response->getStatusCode() === 200) {
                    $projectData = json_decode($response->getBody(), true);

                    // Agora, você pode acessar informações adicionais, como descrição e estrelas
                    $description = $projectData['description'];
                    $stars = $projectData['stargazers_count'];
                    $language = $projectData['language'];

                    // Adicione informações adicionais ao array de projetos
                    $projectData['description'] = $description;
                    $projectData['stars'] = $stars;
                    $projectData['language'] = $language;

                    // Obter os contribuidores do projeto
                    $contributorsUrl = $projectData['contributors_url'];
                    $contributorsResponse = $client->get($contributorsUrl);
                    $contributors = json_decode($contributorsResponse->getBody(), true);

                    $contributorNames = [];
                    $contributorAvatars = [];

                    foreach ($contributors as $contributor) {
                        $contributorNames[] = $contributor['login'];
                        $contributorAvatars[] = $contributor['avatar_url'];
                    }

                    $projectData['contributor_names'] = $contributorNames;
                    $projectData['contributor_avatars'] = $contributorAvatars;

                    $projects[] = $projectData;
                }
            }

            Cache::put($cacheKey, $projects, 60); 
        }

        return view('projects', compact('projects'));
    }
}