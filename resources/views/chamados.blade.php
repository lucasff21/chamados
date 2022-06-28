@extends('layouts.main')

@section('title', 'LUCAS DEV')

@section('content')

    <div class="row justify-content-beetwen">
        <div class="col-lg-3"></div>

        <div class="col-lg-3">
            <H1 class="titleprincipal">LISTA DE CHAMADOS</H1>
        </div>
        <div class="col-lg-3 class-input">
            <form action="/" method="GET">
                <label for="filter">Filtro:</label>
                <select class="form-control optioncolor inputsize" id="filter" name="filter">
                    <option class="optioncolor" value="namefunc">Nome do User</option>
                    <option class="optioncolor" value="titlesolic">Titulo da Solicitação</option>
                    <option class="optioncolor" value="setorsolic">Solicitante</option>
                    <option class="optioncolor" value="nivel">Prioridade</option>
                    <option class="optioncolor" value="description">Descrição</option>
                    <option class="optioncolor" value="date">Data</option>
                </select>
                <input type="text" name="search" id="search" class="form-control inputsize" placeholder="Pesquisar">
                <a href="/">Ver todos</a></p>
            </form>
        </div>
        <div class="col-lg-3"></div>
    </div>
    <!-- ------------------>
    <div class="row">
        <div class="col-lg-3 backdaniels"></div>
        <div class="col-lg-6">
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
                    @foreach ($events as $event)
                        <tr>
                            <th scope="row">{{ $event->id }}</th>
                            <td> {{ $event->namefunc }} </td>
                            <td> {{ $event->titlesolic }} </td>
                            <td> {{ $event->setorsolic }} </td>
                            <td> {{ $event->nivel }} </td>
                            <td> {{ $event->description }} </td>
                            <td> {{ date('d/m/Y', strtotime($event->date)) }}</td>
                            <td> <a class="btn btn-primary" href="/editar/{{ $event->id }}">Acessar</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-lg-3 backdaniels"></div>
    </div>
@endsection
