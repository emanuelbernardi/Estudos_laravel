@extends('app')

@section('title', 'lista de clientes')

@section('content')

            <table class="table">
                <h1>Lista de Clientes</h1>
                <br>
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">nome</th>
            <th scope="col">endereco</th>
            <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
                <tr>
                <th scope="row">{{$client->id}}</th>
                <td><a href="{{route('clients.show', $client)}}">{{$client->nome}}</a></td>
                <td>{{$client->endereco}}</td>
                <td>
                    <a class="btn btn-primary" href="{{route('clients.edit', $client)}}">Atualizar</a>
                    <form action="{{route('clients.destroy', $client)}}" method="POST" style="display: inline">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" type="submit" onclick="return confirm('Tem certeza que quer apagar ?')">Apagar</button>
                    </form>

                </td>
                </tr>
            @endforeach
        </tbody>
        </table>

        <a class="btn btn-success" href="{{route('clients.create', $client)}}">Criar novo user</a>


@endsection