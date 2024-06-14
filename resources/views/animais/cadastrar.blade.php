{{-- views/animais/cadastrar.blade.php --}}

@extends('base')

@section('titulo', 'Cadastrar | Animais para adoção')

@section('conteudo')
<p>Preencha o formulário</p>
<form method="post" action="{{ route('animais.gravar') }}">
    @csrf
    <input type="text" name="nome" placeholder="Nome">
    <br>
    <input type="number" name="idade" placeholder="Idade">
    <br>
    <input type="submit" value="Gravar">
</form>
@endsection