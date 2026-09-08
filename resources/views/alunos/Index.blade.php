

@extends('layouts.app')

@section('content')

    @php
        $alunos = ['Joao', 'Maria', 'Pedro'];
    @endphp

    <h1>Lista Alunos</h1>
    <p>Alunos cadastrados:</p>

    @foreach($alunos as $aluno)

        <li>{{ $aluno }}</li>

    @endforeach

        
@endsection