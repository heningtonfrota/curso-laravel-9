@extends('layouts.app')

@section('title', 'Lista de Usuários')

@section('content')
    <h1>
        Listagem dos usuários
        <a href="{{ route('users.create') }}">(+)</a>
    </h1>

    <form action="{{ route('users.index')}}" method="GET">
        <input type="text" name="search" placeholder="Pesquisar">
        <button>Pesquisar</button>
    </form>

    <ul>
        @foreach ($users as $user)
            <li>
                {{ $user->name }} - {{ $user->email }}    
                <a href="{{ route('users.edit', $user->id) }}">editar</a>
                <a href="{{ route('users.show', $user->id) }}">Detalhes</a>
            </li>    
        @endforeach
    </ul>
@endsection