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


    <div class="card-header">Create Post</div>
    <div class="card-body">
        <form method="post" action="/editar/{{$event->id}}">
            <div class="form-group">
                @csrf
                <label class="label">Comentario: </label>
                <input type="text" name="comment" class="form-control" required/>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" />
            </div>
        </form>
    </div>
</div>


@endsection
