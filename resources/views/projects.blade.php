<x-app-layout>
<div class="text-white">
    @include('header')
    <h1>Lista de projetos</h1>

    <ul>
        @foreach ($projects as $project)
            <li>{{ $project['name'] }}</li>
        @endforeach
    </ul>
</div class="text-white">
</x-app-layout>