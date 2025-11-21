<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout próprio</title>
    @vite([
        'resources/css/app.css',
        'resources/js/app.js',
    ], 'build'
    )    
</head>
<body>
    <div class="p-8 bg-red-500 text-white">SEM TEMA PADÃO E SEM SIDEBAR - NO DEFAULT THEME AND NO SIDEBAR</div>
    <div class="p-8">
        <h2>Português</h2>
        <h1>PÁGINA SIMPLES</h1>    
        <p>Esta página tem seu próprio layout e não carrega o sidebar.</p><h2>Nem sei o que ela está fazendo aqui.</h2>
        <hr>
        <br>
        <h2>English</h2>
        <h1>SIMPLE PAGE</h1>    
        <p>This page has its own layout and does not load the sidebar.</p><h2>I don't even know what she's doing here.</h2>        
        <hr>
        <br>
        <a href="../" >Voltar/Back</a>
    </div>
</body>
</html>