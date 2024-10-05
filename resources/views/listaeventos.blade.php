lista evento ""@extends('layout')
@section('content')
<div class="container mt-5 d-flex flex-column align-items-center">
 
  <form method="POST" action="" class="mb-4 w-50">
    <div class="row mb-3 justify-content-center">
      <label for="inputEvento" class="col-sm-3 col-form-label">Digite o evento</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="inputEvento" name="nomeEvento" required>
      </div>
    </div>
    <div class="d-flex justify-content-center">
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </form>
 
  <table class="table table-striped w-75">
    <thead>
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Evento</th>
        <th scope="col">Data</th>
        <th scope="col">Local</th>
        <th scope="col">Alterar</th>
        <th scope="col">Excluir</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($registrosEvento as $registrosEventos)
      <tr>
        <th scope="row">{{$registrosEventos->idEvento}}</th>
        <td>{{$registrosEventos->nomeEvento}}</td>
        <td>{{$registrosEventos->dataEvento}}</td>
        <td>{{$registrosEventos->localEvento}}</td>
        <td>
        <a href="{{route('show-altera-evento',$registrosEventos->idEvento)}}">
            <button type="button" class="btn btn-outline-info">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5m14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5"/>
                </svg>
            </button>
        </a>    
    </td>
        <td>
            <form method="POST" action="{{route('apaga-evento',$registrosEventos->idEvento)}}">
            @method('delete')
            @csrf
                <button type="submit" class="btn btn-outline-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                </svg></button>
            </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
