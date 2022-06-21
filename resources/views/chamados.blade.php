@extends('layouts.main')

@section('title', 'LUCAS DEV')

@section('content')
    <div class="row">
        <div class="col-lg-3 backdaniels"></div>
        <div class="col-lg-6">
            <H1>LISTA DE CHAMADOS</H1>
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
                    @foreach ($events as $event)
                    <tr>
                        <th scope="row">{{$event->id}}</th>
                           <td> {{ $event->namefunc }} </td>
                           <td> {{ $event->titlesolic }} </td>
                           <td> {{ $event->setorsolic }} </td>
                           <td> {{ $event->nivel }} </td>
                           <td> {{ $event->description }} </td>
                           <td> <a class="btn btn-primary" href="/editar/{{$event->id}}">Acessar</a></td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
        </div>

        <div class="col-lg-3 backdaniels"></div>
    </div>
@endsection
