@extends('layout.main')
@section('title', 'Cadastrar um novo usuário')

@section('css')
<link rel="stylesheet" href="\css\crud\create.css">
@endsection

@section('content')

<h1>CADASTRAR NOVO TELEFONE</h1>

<div class="formulario">
<form action="{{ route('user.store') }}" method="POST">
    @csrf
    <label for="">Nome</label>
    <input type="text" name="nome">
    <label for="">Telefone</label>
    <input type="text" name="telefone">
    <button type="submit">Enviar</button>
</form>
</div>

@endsection