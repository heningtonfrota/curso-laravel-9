@extends('layouts.app')

@section('title', 'Editar Usuário')

@section('content')
    <h1 class="text-2xl">Editar Usuário: {{ $user->name }}</h1>

    @include('includes.validations-form')

    <form class="flex flex-col" action="{{ route('users.update', $user->id) }}" method="POST">
        @method('PUT')
        @include('users._partials.form')
    </form>
@endsection