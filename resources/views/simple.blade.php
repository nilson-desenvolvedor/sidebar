@extends('layouts.base')

@section('theme_css', 'all')

@section('title', 'Página simples - Simple page')

@section('content')
    <div class="flex gap-4 mb-8">
        <button class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300 cursor-pointer" onclick="document.body.classList.remove('theme-dark'); document.body.classList.add('theme-light')">Theme Light</button>
        <button class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300 cursor-pointer" onclick="document.body.classList.remove('theme-light'); document.body.classList.add('theme-dark')">Theme Dark</button>
        <button class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300 cursor-pointer" onclick="document.body.classList.remove('theme-light', 'theme-dark')">Remover Theme</button>
    </div>    
    <div class="min-h-[calc(100vh-16rem)] flex items-center justify-center">
        <div class="card shadow-md rounded-xl p-6 border border-gray-200">

            <h1 class="text-xl font-semibold mb-2 text-center mt-8">Enchendo linguiça - To pad out</h1>
            <!-- Títulos -->
            <h1 class="text-3xl font-bold">Título H1</h1>
            <h2 class="text-2xl font-semibold">Título H2</h2>
            <h3 class="text-xl font-medium">Título H3</h3>            
            <p class="mb-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae turpis non libero molestie finibus ac eget ex. Integer finibus facilisis lacinia. Curabitur vestibulum vestibulum egestas. Pellentesque condimentum enim vel arcu sollicitudin hendrerit. Phasellus eu venenatis ligula. Etiam eu lectus blandit nibh accumsan tincidunt. Cras porttitor justo felis, quis euismod nulla laoreet id. Aliquam dignissim purus eget egestas vehicula. Maecenas malesuada tortor vel leo ultrices vulputate. Maecenas est purus, malesuada vitae vulputate ac, ullamcorper at nisi. Nunc nec nisi a odio euismod scelerisque in ornare erat. Duis fermentum, nibh a cursus mollis, nunc libero aliquam nunc, eget fermentum massa risus ac nisl. Sed ultricies aliquam neque, in porttitor magna.
            </p>
            <p class="mb-4">
                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec aliquam erat eros, ac mattis quam sollicitudin ac. Aenean in consequat ipsum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam ex orci, mollis sed lacus eget, consequat finibus orci. Suspendisse potenti. Cras eleifend tempor dolor, pulvinar blandit augue luctus in. Sed venenatis ipsum eu massa fringilla mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed sapien turpis, iaculis a elementum eget, sodales a risus. Donec euismod commodo nulla, semper venenatis mauris maximus nec. Nullam ullamcorper feugiat vulputate.
            </p>
            <p class="mb4">
                Phasellus sollicitudin leo sit amet feugiat vehicula. Integer sodales nunc molestie, varius augue vel, laoreet neque. Nunc enim risus, suscipit in metus quis, commodo porta lorem. Pellentesque ornare purus eu libero congue semper sed vel odio. Etiam tincidunt ornare nunc at pellentesque. Sed diam odio, dapibus non dictum et, placerat id nibh. Aliquam erat volutpat. Aliquam commodo vestibulum posuere. Quisque vestibulum pulvinar orci a sodales.
            </p>
        <br>
 <!-- Links -->
        <p><a href="#">Exemplo de link</a> e <a href="#">Outro link</a></p>
        
<hr class="m-8">

        <!-- Inputs -->
        <div class="space-y-4">
            <input type="text" placeholder="Input de texto" class="w-full p-2 rounded">

            <select class="w-full p-2 rounded">
                <option>Selecione uma opção</option>
                <option>Opção A</option>
                <option>Opção B</option>
            </select>

            <textarea class="w-full p-2 rounded" rows="3" placeholder="Textarea de teste"></textarea>
        </div>

<hr class="m-8">

        <!-- Botões -->
        <div class="flex gap-4">
            <button class="btn px-4 py-2 rounded">Botão padrão</button>
            <button class="btn px-4 py-2 rounded">Outro botão</button>
        </div>

<hr class="m-8">

        <!-- Tabela -->
        <table class="w-full border-collapse">
            <thead>
                <tr>
                    <th class="p-2 border">Coluna 1</th>
                    <th class="p-2 border">Coluna 2</th>
                    <th class="p-2 border">Coluna 3</th>
                    <th class="p-2 border">Coluna 4</th>
                    <th class="p-2 border">Coluna 5</th>
                    <th class="p-2 border">Coluna 6</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="p-2 border">Valor A1</td>
                    <td class="p-2 border">Valor A2</td>
                    <td class="p-2 border">Valor A3</td>
                    <td class="p-2 border">Valor A4</td>
                    <td class="p-2 border">Valor A5</td>
                    <td class="p-2 border">Valor A6</td>
                </tr>
                <tr>
                    <td class="p-2 border">Valor B1</td>
                    <td class="p-2 border">Valor B2</td>
                    <td class="p-2 border">Valor B3</td>
                    <td class="p-2 border">Valor B4</td>
                    <td class="p-2 border">Valor B5</td>
                    <td class="p-2 border">Valor B6</td>
                </tr>
            </tbody>
        </table>

        <hr class="m-8">

        <!-- Outros containers -->
        <div class="panel p-4 rounded border">
            Painel de teste (classe .panel)
        </div>
        <br>
        <div class="box p-4 rounded border">
            Box de teste (classe .box)
        </div>
        <br>
        <div class="container p-4 rounded border">
            Container dark de teste (classe .container-dark)          
        </div>
    </div>        
@endsection
