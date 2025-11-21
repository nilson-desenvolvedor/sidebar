@extends('layouts.base')

@section('theme_css', 'all')

@section('title', 'Como usar - How to use')

@section('content')
    <div class="flex gap-4">
        <button class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300 cursor-pointer" onclick="document.body.classList.remove('theme-dark'); document.body.classList.add('theme-light')">Theme Light</button>
        <button class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300 cursor-pointer" onclick="document.body.classList.remove('theme-light'); document.body.classList.add('theme-dark')">Theme Dark</button>
        <button class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300 cursor-pointer" onclick="document.body.classList.remove('theme-light', 'theme-dark')">Remover Theme</button>
    </div>    
    <div class="min-h-[calc(100vh-20rem)] flex items-center justify-center">
        <div class="card shadow-md rounded-xl p-6 m-4">
            <h1 class="text-xl font-semibold text-gray-800 mb-2 text-center">
                Como instalar/usar - How to install/use
            </h1>
            <p class="text-left">Português</p>
<div class="max-w-2xl mx-auto p-6 rounded-xl shadow-md border">
    <h1 class="text-2xl font-bold mb-4">Passo a passo para instalar no seu projeto Laravel</h1>

    <!-- PASSO 1 -->
    <h2 class="text-xl font-semibold mt-6 mb-2">Passo 1</h2>
    <p class="mb-2">
        Instale o Tailwind (cuidado: Tailwind modifica todo o estilo padrão do HTML)
    </p>
    <pre class="p-3 rounded-lg overflow-x-auto text-sm">
npm install -D tailwindcss postcss autoprefixer
    </pre>
    <!-- PASSO 2 -->
    <h2 class="text-xl font-semibold mb-2">Passo 2</h2>
    <p class="mb-2">Instale o Tippy</p>
    <pre class="p-3 rounded-lg overflow-x-auto text-sm">
npm install tippy.js
    </pre>

    <!-- PASSO 3 -->
    <h2 class="text-xl font-semibold mb-2">Passo 3</h2>
    <p class="mb-2">Baixe os arquivos para as pastas correspondentes:</p>

    <ul class="list-disc ml-6 space-y-1 mb-4">
        <li>
            <strong>resources/css:</strong><br>
            theme-dark.css<br>
            theme-light.css<br>
            theme-neutral.css
        </li>
        <li>
            <strong>resources/js:</strong><br>
            sidebar.js
        </li>
        <li>
            <strong>resources/views/components:</strong><br>
            sidebar.blade.php
        </li>
    </ul>

    <!-- PASSO 4 -->
    <h2 class="text-xl font-semibold mt-6 mb-2">Passo 4</h2>
    <p class="mb-2">Importe os temas no seu <code>resources/css/app.css</code></p>
    <pre class="p-3 rounded-lg overflow-x-auto text-sm">
&#64;import "./theme-neutral.css";
&#64;import "./theme-dark.css";
&#64;import "./theme-light.css";
    </pre>

    <!-- PASSO 5 -->
    <h2 class="text-xl font-semibold mb-2">Passo 5</h2>
    <p class="mb-2">Importe o JS da sidebar no seu <code>resources/js/app.js</code></p>
    <pre class="p-3 rounded-lg overflow-x-auto text-sm">
import './sidebar';
    </pre>

    <!-- PASSO 6 -->
    <h2 class="text-xl font-semibold mb-2">Passo 6</h2>
    <p class="mb-2">Importe o Sidebar logo abaixo da tag <code>&lt;body&gt;</code></p>
    <pre class="p-3 rounded-lg overflow-x-auto text-sm">
&lt;body&gt;
    &#64;include('components.sidebar')
    </pre>

    <!-- PASSO 7 -->
    <h2 class="text-xl font-semibold mb-2">Passo 7 (opcional para o tema neutral)</h2>
    <p class="mb-2">Escolha um tema:</p>
    <pre class="p-3 rounded-lg overflow-x-auto text-sm">
&lt;body class="theme-dark"&gt;
    &#64;include('components.sidebar')
    </pre>
</div>



            <a target="_blank" href="https://tabler.io/icons" class="text-blue-600 hover:underline">
                https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css
            </a> 
            <h1 class="text-xl font-semibold text-gray-800 mb-2 text-center mt-8">Enchendo linguiça - To pad out</h1>
            <p class="text-gray-600 mb-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae turpis non libero molestie finibus ac eget ex. Integer finibus facilisis lacinia. Curabitur vestibulum vestibulum egestas. Pellentesque condimentum enim vel arcu sollicitudin hendrerit. Phasellus eu venenatis ligula. Etiam eu lectus blandit nibh accumsan tincidunt. Cras porttitor justo felis, quis euismod nulla laoreet id. Aliquam dignissim purus eget egestas vehicula. Maecenas malesuada tortor vel leo ultrices vulputate. Maecenas est purus, malesuada vitae vulputate ac, ullamcorper at nisi. Nunc nec nisi a odio euismod scelerisque in ornare erat. Duis fermentum, nibh a cursus mollis, nunc libero aliquam nunc, eget fermentum massa risus ac nisl. Sed ultricies aliquam neque, in porttitor magna.
            </p>
            <p class="text-gray-600 mb-4">
                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec aliquam erat eros, ac mattis quam sollicitudin ac. Aenean in consequat ipsum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam ex orci, mollis sed lacus eget, consequat finibus orci. Suspendisse potenti. Cras eleifend tempor dolor, pulvinar blandit augue luctus in. Sed venenatis ipsum eu massa fringilla mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed sapien turpis, iaculis a elementum eget, sodales a risus. Donec euismod commodo nulla, semper venenatis mauris maximus nec. Nullam ullamcorper feugiat vulputate.
            </p>
            <p class="text-gray-600 mb4">
                Phasellus sollicitudin leo sit amet feugiat vehicula. Integer sodales nunc molestie, varius augue vel, laoreet neque. Nunc enim risus, suscipit in metus quis, commodo porta lorem. Pellentesque ornare purus eu libero congue semper sed vel odio. Etiam tincidunt ornare nunc at pellentesque. Sed diam odio, dapibus non dictum et, placerat id nibh. Aliquam erat volutpat. Aliquam commodo vestibulum posuere. Quisque vestibulum pulvinar orci a sodales.
            </p>
        </div>
    </div>        
@endsection
