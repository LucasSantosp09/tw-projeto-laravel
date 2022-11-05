@extends('app')

@section('titulo', 'Detalhes Cliente')

@section('conteudo')
  <div class="container">
    <div class="card">
      <h5 class="card-header">Detalhes do Cliente {{ $client->nome }}</h5>
      <div class="card-body">
        <p><strong>ID: </strong>{{ $client->id}} </p>
              <p><strong>nome: </strong>{{ $client->nome}} </p>
              <p><strong>Endreço: </strong>{{ $client->endereco}} </p>
              <p><strong>Observação: </strong>{{ $client->observacao}} </p>
              <br>
              <a class="btn btn-success" href="{{route('clients.index')}}">VOLTAR</a>
      </div>
    </div>
  </div>
@endsection