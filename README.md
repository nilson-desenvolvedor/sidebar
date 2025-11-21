# Operar Sidebar

## Demo
[sidebar.operarss.com.br](https://sidebar.operarss.com.br)
<p align="center">
  <img src="https://sidebar.operarss.com.br/demo.gif" alt="Demo" />
</p>


### Português
Sidebar no estilo acordeon, com suporte a múltiplos níveis e três temas (claro, escuro e neutro). Desenvolvida usando apenas CSS e JavaScript puro. Fácil de instalar, fácil de adaptar e pronta para ser integrada em qualquer projeto.

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


### English
A responsive accordion-style sidebar with support for multi-level menus and three built-in themes (light, dark, and blue). Built using only CSS and vanilla JavaScript, it is easy to install, simple to customize, and ready to integrate into any project.




