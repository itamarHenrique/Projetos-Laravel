@extends('layout')
@section('conteudo')

<div class="container m-5">
    <h2>Lista de Tarefas</h2>
</div>

<table class="table table-striped">

    <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Nome</th>
          <th scope="col">Data</th>
          <th scope="col">Ação</th>
        </tr>
      </thead>


</table>

    <a href="#"><button class="btn btn-primary">Criar usuario</button></a>


@endsection
