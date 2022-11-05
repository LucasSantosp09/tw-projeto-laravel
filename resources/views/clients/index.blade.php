@extends('app') 

@section('titulo', 'Lista de Clientes')

@section('conteudo')
<h1>Lista de Clientes</h1>
    <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nome</th>
              <th scope="col">Endereço</th>
              <th scope="col">Ações</th>
            </tr>
          </thead>
          <tbody>

          @foreach ( $clients as $clients )
            <tr>
              <th scope="row">{{$clients ->id}}</th>
              <td><a href="{{route('clients.show', $clients)}}">{{$clients ->nome}}</a></td>
              <td>{{$clients ->endereco}}</td>
              <td>
                  <a class="btn btn-primary" href="{{route('clients.edit',$clients )}}">Atualizar</a>

                 <form action="{{route('clients.destroy', $clients)}}" method="POST" style="display:inline-block">
                  @method('DELETE')
                  @csrf

                  <button class="btn btn-danger" type="submit">Excluir</button>
                 </form>
              </td>
            </tr>
          @endforeach
       
          </tbody>
      </table>
    <a class="btn-lg btn-success" href="{{route('clients.create')}}">Novo Cliente </a>
@endsection