@extends('layouts.app')
@auth
    @section('content')
        <div id="welcome_div">
            <div class="welcome-container">
                <h1>Bem-vindo  {{auth()->user()->name}}</h1>
                <p>Clique em "Ver tarefas" para ser redirecionado para as tarefas</p>
                <a href="/tarefa">Ver tarefas</a>
            </div>
        </div>
    @endsection
@endauth
