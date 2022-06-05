@extends('layouts.app')

@section('title', 'Novo Usuário')

@section('content')
    <h1>Novo Usuário</h1>

    @include('includes.validations-form')

    <form class="flex flex-col" action="{{ route('users.store') }}" method="POST">
        @include('users._partials.form')
    </form>
@endsection