@extends('layouts.main')

@section('title', 'LUCAS DEV')

@section('content')
    <form action="{{route('alter_event', ['id' => $event->id]) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="namefunc">Nome Funcionário:</label>
            <input type="text" class="form-control" id="namefunc" name="namefunc" value="{{ $event->namefunc }}">
        </div>
        <div class="form-group">
            <label for="titlesolic">Titulo Solicitação:</label>
            <input type="text" class="form-control" id="titlesolic" name="titlesolic" value="{{ $event->titlesolic }}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Setor Solicitante:</label>
            <select class="form-control optioncolor" id="setorsolic" name="setorsolic" value="{{ $event->setorsolic }}">
                <option class="optioncolor">Recepção</option>
                <option class="optioncolor">Marketing</option>
                <option class="optioncolor">Triagem</option>
                <option class="optioncolor">Compras</option>
                <option class="optioncolor">RH</option>
                <option class="optioncolor">Financeiro</option>
                <option class="optioncolor">Diretoria</option>
                <option class="optioncolor">Laboratório</option>
            </select>
        </div>
        <div class="form-group">
            <label for="nivel">Nivel de Prioridade:</label>
            <select class="form-control" id="nivel" name="nivel" value="{{ $event->nivel }}">
                <option>Baixo</option>
                <option>Médio</option>
                <option>Alto</option>
            </select>
        </div>
    
        <div class="form-group">
            <label for="description">Descrição:</label>
            <input name="description" id="description" class="form-control" rows="3"
                placeholder="Descreva em detalhes seu problema." value="{{ $event->description }}"></textarea>
        </div>
        <button>SALVAR</button>
    </form>

@endsection
