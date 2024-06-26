@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-2">Tarefas</div>
                        <div class="col-10">
                            <div class="float-end">
                                <a class="btn btn-primary" href="{{route('tarefa.create')}}" style="margin-right: 0.75rem;"><span class="bi bi-plus-lg"></span> Novo</a>
                                <a class="btn btn-success" href="{{route('tarefa.exportacao', ['extensao' => 'xlsx'])}}" style="margin-right:0.75rem;"><span class="bi bi-filetype-xlsx"></span> XLSX</a>
                                <a class="btn btn-success" href="{{route('tarefa.exportacao', ['extensao' => 'csv'])}}" style="margin-right:0.75rem;"><span class="bi bi-filetype-xlsx"></span> CSV</a>
                                <a class="btn btn-danger" href="{{route('tarefa.exportacao', ['extensao' => 'pdf'])}}" style="margin-right:0.75rem;"><span class="bi bi-file-earmark-pdf"></span> PDF</a>
                                <a class="btn btn-danger" href="{{route('tarefa.exportar')}}" target="_blank"><span class="bi bi-file-earmark-pdf-fill"></span> PDF Open</a>
                            </div>
                        </div>
                        </div>
                    </div>


                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Tarefa</th>
                            <th scope="col">Data limite conclusão</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Excluir</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($tarefas as $tarefa)
                                <tr>
                                <th scope="row">{{$tarefa->id}}</th>
                                <td>{{$tarefa->tarefa}}</td>
                                <td>{{date('d/m/Y', strtotime($tarefa->data_limite_conclusao))}}</td>
                                <td><a href="{{route('tarefa.edit', $tarefa->id)}}">Editar</a></td>
                                <form id="form_tarefa_{{$tarefa->id}}" action="{{route('tarefa.destroy', $tarefa->id)}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <td><a href="#" onclick="document.getElementById('form_tarefa_{{$tarefa->id}}').submit()">Excluir</a></td>
                                </form>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                          <li class="page-item"><a class="page-link" href="{{$tarefas->previousPageUrl()}}">Voltar</a></li>
                          @for($i = 1; $i <= $tarefas->lastPage(); $i++)
                            <li class="page-item {{$tarefas->currentPage() == $i ? 'active' : NULL}}">
                                <a class="page-link" href="{{$tarefas->url($i)}}">{{$i}}</a>
                            </li>
                          @endfor
                          <li class="page-item"><a class="page-link" href="{{$tarefas->nextPageUrl()}}">Avançar</a></li>
                        </ul>
                      </nav>
            </div>
        </div>
    </div>
</div>
@endsection
