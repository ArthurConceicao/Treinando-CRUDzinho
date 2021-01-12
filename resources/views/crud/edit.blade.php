@extends('layout.main')
@section('title', 'Editar Telefone')

@section('content')

<h1>Editar Telefone</h1>

<form action="{{ route('user.update', ['user' => $user->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="nome">Nome</label>
    <input type="text" name="nome" value="{{ $user->nome }}">
    <label for="telefone">Telefone</label>
    <input type="text" name="telefone" value="{{ $user->telefone }}">
    <button type="submit">Editar</button>
</form>

@endsection