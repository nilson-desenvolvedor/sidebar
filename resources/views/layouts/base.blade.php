<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- TABLER ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css" />
@php
    //exemplo de tema buscando do banco de dados
    //$def = \App\Models\UserDefinition::first(); // exemplo

    // Se não houver light ou dark, o laravel reconhece o neutral que foi carregado no app.css
    $theme_bd     = $def->theme ?? null;
    $theme_css_bd = $def->theme_css ?? null;
    // Ou o valor pode ser substituído por light ou dark dependendo da sua escolha
    //$theme_bd     = $def->theme ?? 'light';
    //$theme_css_bd = $def->theme_css ?? 'theme-light';

    // Aqui o tema vindo do bdd pode ser sobrescrito por um dema definido diretamente na página extendida
    $theme     = $__env->yieldContent('theme')     ?: $theme_bd;
    $theme_css = $__env->yieldContent('theme_css') ?: $theme_css_bd;
@endphp

    <title>@yield('title','Operar Sidebar')</title>
@php
    $assets = [
        'resources/css/app.css',
        'resources/js/app.js'
    ];

    if (!empty($theme_css)) {
        if ($theme_css === "all") {
            $assets[] = "resources/css/theme-light.css";
            $assets[] = "resources/css/theme-dark.css";
        } else {
            $assets[] = "resources/css/{$theme_css}.css";
        }
    }
@endphp
    @vite($assets, 'build')

</head>
<body{!! $theme_css ? ' class="'.$theme_css.'"' : '' !!}{!! $theme ? ' data-theme="'.$theme.'"' : '' !!}>

    @if(! $__env->hasSection('no-sidebar'))
        @include('components.sidebar')
    @endif

    {{-- HEADER GLOBAL --}}
    <header class="bg-[linear-gradient(25deg,_#0a1c3a_30%,_#5fa8ff_80%,_#0a1c3a)] text-white h-24 px-6 py-4 shadow-md">
        <h1 class="text-xl font-semibold" style="color:white">@yield('title', 'Operar Sidebar')</h1>
    </header>
    {{-- CONTEÚDO COM PADDING GLOBAL --}}
    <main class="p-8">
        @yield('content')
    </main>

</body>
</html>
