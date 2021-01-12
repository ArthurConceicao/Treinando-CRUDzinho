@extends('layout.main')
@section('title', 'Página Inicial')
@section('css')
<link rel="stylesheet" href="css/index.css">
@endsection

@section('content')

<h1>CADASTRAR NOVO TELEFONE</h1>

<div class="tabela-cadastro">
    <form action="{{ route('user.store') }}" method="POST">
        @method('POST')
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome">
        <label for="telefone">Telefone</label>
        <input type="text" name="telefone">
        <button type="submit">Enviar</button>
    </form>
</div>

<div class="tabela-usuarios">
    <table>
    <tr>
        <th class="id">ID</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th class="centralizar-editar">Editar</th>
        <th class="centralizar-excluir">Excluir</th>
    </tr>
    @foreach ($users as $user)
    <tr>
        <td class="id"><a href=" {{ route('user.show', ['user' => $user->id]) }} ">{{ $user->id }}</a></td>
        <td>{{ $user->nome }}</td>
        <td>{{ $user->telefone }}</td>
        <td class="centralizar-editar"><a href="{{ route('user.edit', ['user' => $user->id]) }}"><button>Editar</button></a></td>
        <td class="centralizar-excluir"><a href="{{ route('user.destroy', ['user' => $user->id]) }}"><button>Excluir</button></a></td>
    </tr>
    @endforeach
    </table>
</div>

@endsection