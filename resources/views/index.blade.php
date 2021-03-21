@extends('layout')

@section('content')

<style>
  .push-top {
    margin-top: 50px;
  }
</style>

<div class="push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table">
    <thead>
        <tr class="table-warning">
          <td>ID</td>
          <td>Nome</td>
          <td>Email</td>
          <td>Telefone</td>
          <td>Senha</td>
          <td class="text-center">Ações</td>
        </tr>
    </thead>
    <tbody>
        @foreach($clientes as $clientes)
        <tr>
            <td>{{$clientes->id}}</td>
            <td>{{$clientes->nome}}</td>
            <td>{{$clientes->email}}</td>
            <td>{{$clientes->telefone}}</td>
            <td>{{$clientes->senha}}</td>
            <td class="text-center">
                <a href="{{ route('clientes.edit', $clientes->id)}}" class="btn btn-primary btn-sm"">Editar</a>
                <form action="{{ route('clientes.destroy', $clientes->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"" type="submit">Excluir</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection