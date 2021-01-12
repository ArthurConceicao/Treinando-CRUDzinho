@extends('layout.main')
@section('title', 'Excluir Telefone')

@section('content')

<h1>Excluir Telefone</h1>

<div class="tabela-cadastro">
    <form action="{{ route('user.destroy', ['user' => $user->id]) }}" method="GET">
        @csrf
        @method('DELETE')
        <label for="nome">Nome</label>
        <input type="text" name="nome" value="{{ $user->nome }}">
        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" value="{{ $user->telefone }}">
        <button type="submit">Excluir Telefone</button>
    </form>
</div>

@endsection