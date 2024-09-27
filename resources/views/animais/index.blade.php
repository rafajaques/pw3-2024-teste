{{-- resources/views/animais/index.blade.php --}}

@extends('base')

@section('titulo', 'Animais para adoção')

@section('conteudo')
<p>
    <a href="{{ route('animais.cadastrar') }}"  class="px-4 py-1 text-white font-light tracking-wider bg-blue-800 rounded"><i class="fas fa-plus mr-3"></i> Cadastrar animal</a>
</p>
<p>Veja nossa lista de animais para adoção</p>

<div class="flex flex-wrap mt-6">
<table class=" bg-white">
    <thead class="bg-gray-800 text-white">
        <tr>
            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Nome</th>
            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Idade</th>
            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Apagar</th>
        </tr>
    </thead>
    <tbody class="text-gray-700">
    @foreach ($animais as $animal)
    <tr @if ($loop->even) class="bg-gray-200" @endif>
        <td class="text-left py-3 px-4">
            <a href="{{route('animais.ver', $animal['id'])}}">
                {{ $animal['nome'] }}
            </a>
        </td>
        <td class="text-left py-3 px-4">{{ $animal['idade'] }}</td>
        <td class="text-left py-3 px-4"><a href="{{ route('animais.apagar', $animal['id']) }}" class="px-4 py-2 font-semibold text-sm bg-red-500 text-white rounded-full shadow-sm"><i class="fas fa-trash"></i> Apagar</a></td>
    </tr>
    @endforeach
    </tbody>
</table>
</div>

<div class="flex flex-wrap mt-6">
    <div class="w-full lg:w-1/2 pr-0 lg:pr-2">
        <p class="text-xl pb-3 flex items-center">
            <i class="fas fa-plus mr-3"></i> Idade dos Animais
        </p>
        <div class="p-6 bg-white">
            <canvas id="chartOne" width="400" height="200"></canvas>
        </div>
    </div>
</div>

<script>
    var chartOne = document.getElementById('chartOne');
    var myChart = new Chart(chartOne, {
        type: 'bar',
        data: {
            labels: [@foreach ($animaisPorIdade as $an){{$an['idade']}},@endforeach],
            datasets: [{
                label: 'Idade',
                data: [@foreach ($animaisPorIdade as $an){{$an['quantidade']}},@endforeach],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            legend: {
                display: false,
            }
        }
    });
    </script>
@endsection