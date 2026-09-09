@extends('layouts.app')

@section('content')

    <h1>Cadastrar Aluno</h1>

    <form action="/alunos" method="POST">
        @csrf

        <label>Nome:</label>
        <input type="text" name="nome">

        <label>Curso:</label>
        <input type="text" name="curso">

        <button type="submit">Cadastrar</button>

    </form>

@endsection