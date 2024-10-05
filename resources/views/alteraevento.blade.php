@extends('layout')
@section('content')



    <div class="container mt-5">
        <h2>Cadastro de Evento</h2>
        <form method="post" action="{{route('altera-evento',$registrosEvento->idEvento)}}">
            @method('put')
            @csrf
            <div class="form-group">
                <label for="nomeEvento">Nome do Evento</label>
                <input type="text" class="form-control" value="{{$registrosEvento->nomeEvento}}" id="nomeEvento" name="nomeEvento" placeholder="Digite o nome do evento" required>
            </div>
            <div class="form-group">
                <label for="dataEvento">Data do Evento</label>
                <input type="date" class="form-control" value="{{$registrosEvento->dataEvento}}" id="dataEvento" name="dataEvento" required>
            </div>
            <div class="form-group">
                <label for="localEvento">Local do Evento</label>
                <input type="text" class="form-control" value="{{$registrosEvento->localEvento}}" id="localEvento" name="localEvento" placeholder="Digite o local do evento" required>
            </div>
            <div class="form-group">
                <label for="imgEvento">Imagem do Evento (URL)</label>
                <input type="text" class="form-control" value="{{$registrosEvento->imgEvento}}" id="imgEvento" name="imgEvento" placeholder="Digite a URL da imagem" required>
            </div>
            <button type="submit" class="btn btn-primary">Alterar Evento</button>
        </form>
    </div>


@endsection