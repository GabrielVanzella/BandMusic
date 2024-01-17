@extends('layouts.main')

@section('title', 'cadastrar')



@section('content')

<div class="bg-login">
<a class="navbar-brand" href="/"><img src="/img/logo_branco.png" alt=""></a>

    <form name="formCadastrar" id="formCadastrar" method="post" action="" class="form-login">
        @csrf 
        <h1 class="text-center">Inscrever-se</h1>
        <p class="conta">já tem uma conta ? <a href="/login">Faça login aqui </a></p>
        <input type="text" name="name" class="form-control" placeholder="Primeiro nome">
        <br>
        <input type="text" name="email" class="form-control" placeholder="Email">
        <br>
        <input type="password" name="password" class="form-control" placeholder="Senha">
        <br>
        <input type="password" name="confirm-password" class="form-control" placeholder="Confirmar senha">
        <br>
        <button type="submit" class="form-control btn btn-outline-dark">Criar conta</button>


    </form>
</div>


@endsection