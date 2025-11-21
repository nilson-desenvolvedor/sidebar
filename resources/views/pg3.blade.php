<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css" />
    <title>Layout próprio</title>
    @vite([
        'resources/css/app.css',
        'resources/css/theme-light.css',
        'resources/css/theme-dark.css',
        'resources/js/app.js',
    ], 'build')
</head>
<body>

    @include('components.sidebar')

    <div class="p-8 space-y-6">

        <h1 class="text-2xl font-bold">LAYOUT PRÓPRIO - CUSTOM LAYOUT</h1>
        <div class="flex gap-4">
            <button class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300 cursor-pointer" onclick="document.body.classList.remove('theme-dark'); document.body.classList.add('theme-light')">Theme Light</button>
            <button class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300 cursor-pointer" onclick="document.body.classList.remove('theme-light'); document.body.classList.add('theme-dark')">Theme Dark</button>
            <button class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300 cursor-pointer" onclick="document.body.classList.remove('theme-light', 'theme-dark')">Remover Theme</button>
        </div>    

        <div class="min-h-[calc(100vh-20rem)] flex items-center justify-center">
            <div class="card shadow-md rounded-xl p-6 m-4">
                <p class="text-left">Português</p>
                <h1 class="text-xl font-semibold">Sidebar em layout próprio</h1>
                <p>
                    Esta página tem seu próprio layout e carrega o sidebar, apenas acrescentando o comando
                </p>
                <p><b>@ include('components.sidebar')</b></p>  
            </div>

            <div class="card shadow-md rounded-xl p-6 m-4">
                <p class="text-left">English</p>
                <h1 class="text-xl font-semibold">Sidebar in your own layout.</h1>
                <p>
                    This page has its own layout and loads the sidebar; simply add the command
                </p>
                <p><b>@ include('components.sidebar')</b></p>  
            </div>        
        </div>     
    </div>    
</body>
</html>
