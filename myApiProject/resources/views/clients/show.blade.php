@extends('app')
@section('title', 'detalhes do cliente')
@section('content')

    <div class="card text-center">
        <div class="card-header">
            Featured
        </div>
            <div class="card-body">
                <h5 class="card-title">Detalhes do cliente {{$client->nome}}</h5>
                <p><strong>ID: </strong> {{$client->id}}</p>
                <p><strong>Nome: </strong> {{$client->nome}}</p>
                <p><strong>Endereço: </strong> {{$client->endereco}}</p>
                <p><strong>Observação: </strong> {{$client->observacao}}</p>

                <a class='btn btn-success' href="{{route('clients.index')}}">Voltar a lista</a>

            </div>
@endsection 