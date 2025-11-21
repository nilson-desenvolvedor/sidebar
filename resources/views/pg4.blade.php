@extends('layouts.base')
@section('theme','theme-light')
@section('no-sidebar', true)
@section('title', 'Sem sidebar - No sidebar')

@section('content')

    <div class="min-h-[calc(100vh-12rem)] flex items-center justify-center">
        <div class="card shadow-md rounded-xl p-6 m-4">
            <p class="text-left">Português</p>
            <h1 class="text-xl font-semibold">Exemplo da clausula no-sidebar</h1>
            <p>
                Exemplo de página com layout padrão mas com a clausula no-sidebar, para páginas que devem extender o layout mas não podem ter sidebar.
            </p>
            <a href="../" >VOLTAR</a>
        </div>

        <div class="card shadow-md rounded-xl p-6 m-4">
            <p class="text-left">English</p>
            <h1 class="text-xl font-semibold">Example of the no-sidebar clause</h1>
            <p>
                Example of a page with a standard layout but with the no-sidebar clause, for pages that should extend the layout but cannot have a sidebar.
            </p>
            <a href="../" >BACK</a>
        </div>   
    </div>        
@endsection


