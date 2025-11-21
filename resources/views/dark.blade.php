@extends('layouts.base')

@section('title', 'Tema Escuro - Dark Theme')

@section('theme', 'dark')
@section('theme_css', 'theme-dark')

@section('content')
    <div class="min-h-[calc(100vh-12rem)] flex items-center justify-center">
        <div class="card shadow-md rounded-xl p-6 m-4">
            <p class="text-left">Português</p>
            <h1 class="text-xl font-semibold">Exemplo de menu com tema escuro</h1>
            <p>
                Esta é uma página simples para demonstrar o tema escuro.
            </p>
        </div>

        <div class="card shadow-md rounded-xl p-6 m-4">
            <p class="text-left">English</p>
            <h1 class="text-xl font-semibold">Example of a menu with a dark theme</h1>
            <p>
                This is a simple page to demonstrate the dark theme.
            </p>
        </div>        
    </div>       
@endsection


