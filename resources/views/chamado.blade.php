@extends('layouts.main')

@section('title', 'LUCAS DEV')

@section('content')

    <div class="row">
        <div class="col-lg-2"></div>
        <table class="table table-striped col-lg-8 ">
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
        <div class="col-lg-2"></div>
    </div>

    <center>

        <div class="card-body home-card">
            <div class="card-body home-card">
                <div class="card-header">Comentar</div>
                <form method="post" action="{{ route('comment', $event->id) }}">
                    <div class="form-group">
                        @csrf
                        <textarea name="comment" class="form-control" placeholder="ESCREVA AQUI SEU COMENTARIO"></textarea>
                        <input type="hidden" name="event_id" value="{{ $event->id }}">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" />
                    </div>
                </form>
            </div>
        </div>
    </center>

    <ul>
        @forelse ($event->comments as $comment)
            <center>
                <div class=" card col-lg-8 mt-3">
                    <div class="card-body">
                        <div class="row justify-content-between">
                            <div class="col-lg-auto">
                                {{ $comment->comment }}
                            </div>

                            <div class="col-auto">
                                <form action="/chamado/{{ $comment->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger float-right">Deletar</button>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>

            </center>


        @empty
            <li>Não temos comentarios</li>
        @endforelse
    </ul>
@endsection
