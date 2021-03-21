@extends('layout')

@section('content')

<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>

<div class="card push-top">
  <div class="card-header">
    Editar & Atualizar
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('clientes.update', $clientes->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="nome">Nome</label>
              <input type="text" class="form-control" name="nome" value="{{ $clientes->nome }}"/>
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" value="{{ $clientes->email }}"/>
          </div>
          <div class="form-group">
              <label for="telefone">Telefone</label>
              <input type="text" class="form-control" name="telefone" value="{{ $clientes->telefone }}"/>
          </div>
          <div class="form-group">
              <label for="senha">Senha</label>
              <input type="text" class="form-control" name="senha" value="{{ $clientes->senha }}"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Atualizar</button>
      </form>
  </div>
</div>
@endsection