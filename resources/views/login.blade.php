@extends('master')

@section('main')

<h2>Login</h2>

<div class="text-center">

    @if (session()->has('error_login'))
        {{ session()->get('error_login') }}
    @endif

    @if (auth()->guest())
    <form action="{{ route('login') }}" method="post">
        @csrf
        {{ $errors->first('email') }}
        <input type="email" name="email" placeholder="email" value="exemplo@exemplo.com">
        {{ $errors->first('password') }}
        <input type="password" name="password" placeholder="senha" value="123">

        <!-- REMOVER VALUES DO FORM APOS OS TESTES -->
        
        <button type="submit">Entrar</button>
    </form>
    @else
        <h2>Você já está logado</h2>
    @endif
    
</div>

@endsection