<?php

namespace App\Exports;

use App\Models\Tarefa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TarefasExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return auth()->user()->tarefas()->get();
    }

    public function headings():array{// Declarando o tipo de retorno
        return ['ID Tarefa', 'ID Usuário', 'Tarefa', 'Data Limite Conclusão', 'Data Criação', 'Data Atualização'];
    }
}
