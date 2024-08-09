@extends('layout')
@section('conteudo')

<div class="container mt-5">
    <h2>Seja bem vindo</h2>



<form method="post">



        <label>Email</label>
        <div class="Email">
            <input type="text" id="email" name="email" placeholder="Digite o seu nome" required>
        </div>


        <div class="botao mt-3 mb-2">
            <button type="submit" class ="btn btn-primary" >Cadastrar</button>
        </div>

        </form>

        <a href="/create" ><button type="submit" class="btn btn-info">Criar um novo usuario</button></a>
    </div>
@endsection
