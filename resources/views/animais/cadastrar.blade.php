{{-- views/animais/cadastrar.blade.php --}}

@extends('base')

@section('titulo', 'Cadastrar | Animais para adoção')

@section('conteudo')
<p>Preencha o formulário</p>

@if($errors->any())
<div>
    <h4>Deu ruim</h4>
    @foreach($errors->all() as $erro)
        <p>{{ $erro }}</p>
    @endforeach
</div>  
@endif

<form method="post" enctype="multipart/form-data" action="{{ route('animais.gravar') }}" class="p-10 bg-white rounded shadow-xl">
    @csrf
    <div>
    <label class="block text-sm text-gray-600" for="nome">Nome</label>
    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="nome" name="nome" type="text" required="" placeholder="Nome" aria-label="Nome" value="{{ old('nome') }}">
    
    </div>

    <div class="mt-2">
    <label class="block text-sm text-gray-600" for="idade">Idade</label>
    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="idade" name="idade" type="number" required="" placeholder="Idade" aria-label="Idade" value="{{ old('idade') }}">
    </div>

    <div class="mt-2">
        <label class="block text-sm text-gray-600" for="imagem">Imagem</label>
        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="imagem" name="imagem" type="file" required="" placeholder="Idade" aria-label="Idade" value="{{ old('idade') }}">
    </div>
    
    <div class="mt-6">
    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit"><i class="fas fa-save"></i> Gravar</button>
    </div>
</form>
@endsection