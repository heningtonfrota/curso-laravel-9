@extends('layouts.app')

@section('title', 'Usuário')

@section('content')
    <h1 class="text-2xl">Listagem do Usuário {{ $user->name }}</h1>

    <ul>
        <li class="my-2">{{ $user->name }}</li>
        <li class="my-2">{{ $user->email }}</li>
        <li class="my-2">{{ $user->created_at }}</li>
    </ul>
@endsection