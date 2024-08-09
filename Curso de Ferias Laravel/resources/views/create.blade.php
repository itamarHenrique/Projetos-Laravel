@extends('layout')
@section('conteudo')

<div class="container mt-5">

    <div class="formulario">

        <form method="post">

        <h2>Criar Usuario</h2>

            <label>Nome</label>
            <div class="nome">
                <input type="text" id="nome" name="nome" placeholder="Digite o seu nome" required>
            </div>


            <label>Email</label>
            <div class="email">
                <input type="email" id="email" name="email" placeholder="Digite o email" required>
            </div>

            <div class="botao mt-3">
                <button type="submit" class ="btn btn-primary"value="Salvar">Cadastrar</button>
            </div>


            </form>

    </div>

</div>
@endsection
