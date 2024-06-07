{{-- resources/views/animais/index.blade.php --}}

@extends('base')

@section('titulo', 'Animais para adoção')

@section('conteudo')
<p>
    <a href="{{ route('animais.cadastrar') }}">Cadastrar animal</a>
</p>
<p>Veja nossa lista de animais para adoção</p>
@endsection