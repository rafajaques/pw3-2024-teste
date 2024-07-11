{{-- resources/views/usuarios/login.blade.php --}}

@extends('base')

@section('titulo', 'Login')

@section('conteudo')

<form method="post" action="{{route('login')}}">
    @csrf
    <input type="text" name="username" placeholder="Usuário">
    <br>
    <input type="password" name="password" placeholder="Senha">
    <br>
    <input type="submit" value="Entrar">
</form>

@endsection