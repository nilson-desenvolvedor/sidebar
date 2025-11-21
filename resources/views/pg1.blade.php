@extends('layouts.base')

@section('title', 'Página simples')

@section('content')
    <div class="min-h-[calc(100vh-12rem)] flex items-center justify-center">
        <div class="card shadow-md rounded-xl p-6 m-4">
            <p class="text-left">Português</p>
            <h1 class="text-xl font-semibold">Exemplo de menu sem tema definido</h1>
            <p class="text-gray-600">
                Esta página vem extendida do layout base contendo:
            </p>
            <ul class="text-gray-600 text-left space-y-1">
                <li class="list-disc ml-6">A sidebar (sem tema aplicado)</li>
                <li class="list-disc ml-6">Os ícones do <a target="_blank" href="https://tabler.io/icons" >Tabler</a></li>
                <li class="list-disc ml-6">As tooltips da <a target="_blank" href="https://atomiks.github.io/tippyjs/">Tippy</a></li>
            </ul>            
        </div>

        <div class="card shadow-md rounded-xl p-6 m-4">
            <p class="text-left">English</p>
            <h1 class="text-xl font-semibold">Example of a menu without a defined theme</h1>
            <p class="text-gray-600">
                This page is an extension of the base layout containing:
            </p>
            <ul class="text-gray-600 text-left space-y-1">
                <li class="list-disc ml-6">A sidebar (no theme applied)</li>
                <li class="list-disc ml-6"><a target="_blank" href="https://tabler.io/icons" >Tabler's icons</a></li>
                <li class="list-disc ml-6"><a target="_blank" href="https://atomiks.github.io/tippyjs/">Tippy's tooltips</a></li>
            </ul>            
        </div>        
    </div>         
@endsection