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
                <th scope="col">Data</th>
            </tr>
        </thead>
        <tbody>
            <th scope="row">{{ $event->id }}</th>
            <td> {{ $event->namefunc }} </td>
            <td> {{ $event->titlesolic }} </td>
            <td> {{ $event->setorsolic }} </td>
            <td> {{ $event->nivel }} </td>
            <td> {{ $event->description }} </td>
            <td> {{ date('d/m/Y', strtotime($event->date)) }}</td>
        </tbody>
    </table>

    <div class="acompanhar-index">

        <form action="/edit/{id}" class="form-box">
                @csrf
                <h2>ACOMPANHAMENTO</h2>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Data do Chamado</label>
                    <input type="date" class="form-control" id="date" name="date">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Descrição:</label>
                    <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"
                        placeholder="Descreva em detalhes seu problema."></textarea>
                </div>
                <input type="submit" value="Enviar"> <a href="/home" class="nav-link">VOLTAR </a>
            </form>
        </form>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Data do chamado</th>
                <th scope="col">Descrição</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td> {{ $event->comentario }} </td>
                    <td> {{ date('d/m/Y', strtotime($post->hora_post)) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
