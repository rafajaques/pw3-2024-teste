{{-- views/animais/apagar.blade.php --}}
@extends('base')

@section('titulo', 'Apagar | Animais para adoção')

@section('conteudo')
<p>Tem certeza que quer apagar?</p>
<p><em>{{ $animal['nome'] }}</em></p>
<form action=""></form>
@endsection