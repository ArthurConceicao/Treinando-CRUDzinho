@extends('layout.main')
@section('title', 'Ver Telefone')

@section('content')

<h1>{{ $user->nome }}</h1>
<h2>{{ $user->telefone }}</h2>

@endsection