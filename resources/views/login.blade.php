@extends('layouts.main')

@section('title', 'login')

@section('content')

<div class="bg-login">
<a class="navbar-brand" href="/"><img src="/img/logo_branco.png" alt=""></a>

    <form action="{{ route('login.index')}}" method="post" class="form-login">
        @csrf
        <h2 class="text-center">Entrar</h2>

        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
        {{session()->get('success')}}
        </div>
        @endif

        @error('error')
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
        @enderror

        <input type="text" name="email" class="form-control" placeholder="Insira seu email">
        @error('email')
        <br>
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
        @enderror
        <br>
        <input type="password" name="password" class="form-control" placeholder="Insira sua senha">
        @error('password')
        <br>
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
        @enderror
        <br>
        <div class="row">
            <div class="col-auto">
                <a href="#">
                    <p id="senha-esquecimento">esqueci minha senha</p>
                </a>
            </div>
            <div class="col">
                <button type="submit" id="ccid_form_sub" class=" btn btn-outline-dark">Login</button>
            </div>
        </div>
        <p class="conta">Não tem uma conta? <a href="{{route('register.create')}}">Cadastre-se </a></p>
    </form>
</div>

@endsection