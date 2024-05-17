@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">Tarefas</div>
                        <div class="col-6">
                            <div class="float-end">
                                <a href="{{route('tarefa.create')}}" style="margin-right: 0.75rem;">Novo</a>
                                <a href="{{route('tarefa.exportacao', ['extensao' => 'xlsx'])}}" style="margin-right:0.75rem;">XLSX</a>
                                <a href="{{route('tarefa.exportacao', ['extensao' => 'csv'])}}" style="margin-right:0.75rem;">XLSX</a>
                                <a href="{{route('tarefa.exportacao', ['extensao' => 'pdf'])}}">PDF</a>
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
