<?php

namespace App\Exports;

use App\Models\Tarefa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class TarefasExport implements FromCollection, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return auth()->user()->tarefas()->get();
    }

    public function headings():array{// Declarando o tipo de retorno
        return ['ID', 'Usuário', 'Tarefa', 'Data Limite Conclusão'];
    }
    public function map($linha):array{
        return [
            $linha->id,
            $linha->user->name,
            $linha->tarefa,
            date('d/m/Y',strtotime($linha->data_limite_conclusao))
        ];
    }
}
