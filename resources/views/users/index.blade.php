@extends('layouts.app')

@section('title', 'Lista de Usuários')

@section('content')
    <h1 class="text-2xl font-semibold leading-tigh py-2">
        Listagem dos usuários
        <a class="bg-blue-900 rounded-full text-white px-4 text-sm" href="{{ route('users.create') }}">+</a>
    </h1>

    <form action="{{ route('users.index')}}" method="GET" class="py-5">
        <input type="text" name="search" placeholder="Pesquisar" class="md:w-1/6 bg-gray-200 appearance-none rounded-full px-2">
        <button class="shadow bg-purple-500 focus:shadow-outline focus:outline-none text-white rounded-full px-2">Pesquisar</button>
    </form>

    <table class="min-w-full leading-normal shadow-md rounded">
        <thead>
            <tr>
                <th class="px-5 py-3 border-b-2 border-gray-200">Nome</th>
                <th class="px-5 py-3 border-b-2 border-gray-200">Email</th>
                <th class="px-5 py-3 border-b-2 border-gray-200">Editar</th>
                <th class="px-5 py-3 border-b-2 border-gray-200">Detalhes</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr class="py-2">
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td><a class="rounded-full px-2 bg-yellow-300" href="{{ route('users.edit', $user->id) }}">Editar</a></td>
                    <td><a class="rounded-full px-2 bg-green-300" href="{{ route('users.show', $user->id) }}">Detalhes</a></td>
                </tr>    
            @endforeach
        </tbody>
    </table>
@endsection