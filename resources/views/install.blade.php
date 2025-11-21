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
                <p class="text-left">Português</p>
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

            <div class="card shadow-md rounded-xl p-6 m-4">
                <p class="text-left">English</p>
    <h1 class="text-2xl font-bold mb-4">Step-by-step guide to install it in your Laravel project</h1>

    <!-- STEP 1 -->
    <h2 class="text-xl font-semibold mt-6 mb-2">Step 1</h2>
    <p class="mb-2">
        Install Tailwind (warning: Tailwind overrides the default HTML styling)
    </p>
    <pre class="p-3 rounded-lg overflow-x-auto text-sm">
npm install -D tailwindcss postcss autoprefixer
    </pre>

    <!-- STEP 2 -->
    <h2 class="text-xl font-semibold mb-2">Step 2</h2>
    <p class="mb-2">Install Tippy</p>
    <pre class="p-3 rounded-lg overflow-x-auto text-sm">
npm install tippy.js
    </pre>

    <!-- STEP 3 -->
    <h2 class="text-xl font-semibold mb-2">Step 3</h2>
    <p class="mb-2">Download the files to their corresponding folders:</p>

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

    <!-- STEP 4 -->
    <h2 class="text-xl font-semibold mt-6 mb-2">Step 4</h2>
    <p class="mb-2">Import the themes inside <code>resources/css/app.css</code></p>
    <pre class="p-3 rounded-lg overflow-x-auto text-sm">
&#64;iimport "./theme-neutral.css";
&#64;iimport "./theme-dark.css";
&#64;iimport "./theme-light.css";
    </pre>

    <!-- STEP 5 -->
    <h2 class="text-xl font-semibold mb-2">Step 5</h2>
    <p class="mb-2">Import the sidebar script inside <code>resources/js/app.js</code></p>
    <pre class="p-3 rounded-lg overflow-x-auto text-sm">
import './sidebar';
    </pre>

    <!-- STEP 6 -->
    <h2 class="text-xl font-semibold mb-2">Step 6</h2>
    <p class="mb-2">Include the Sidebar right below your <code>&lt;body&gt;</code> tag</p>
    <pre class="p-3 rounded-lg overflow-x-auto text-sm">
&lt;body&gt;
    &#64;include('components.sidebar')
    </pre>

    <!-- STEP 7 -->
    <h2 class="text-xl font-semibold mb-2">Step 7 (optional for the neutral theme)</h2>
    <p class="mb-2">Choose a theme:</p>
    <pre class="p-3 rounded-lg overflow-x-auto text-sm">
&lt;body class="theme-dark"&gt;
    &#64;include('components.sidebar')
    </pre>
            </div>        
        </div>      
@endsection
