@extends('layouts.main')

@section('title', 'LUCAS DEV')

@section('content')

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome do Usuário</th>
                <th scope="col">Titulo da Solicitação</th>
                <th scope="col">Solicitante</th>
                <th scope="col">Prioridade</th>
                <th scope="col">Descrição</th>
            </tr>
        </thead>
        <tbody>
            <th scope="row">{{$event->id}}</th>
            <td> {{ $event->namefunc }} </td>
            <td> {{ $event->titlesolic }} </td>
            <td> {{ $event->setorsolic }} </td>
            <td> {{ $event->nivel }} </td>
            <td> {{ $event->description }} </td>
        </tbody>
    </table>


    <div>
        <h1>ACOMPANHAMENTO DO CHAMADO</h1>
        <textarea id="w3review" name="w3review" rows="4" cols="50"></textarea>
        <button>ENVIAR</button>

    </div>
@endsection
