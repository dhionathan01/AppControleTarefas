<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Controle de Tarefas') {{-- o Slot é o nome que fica salvo no .env como APP_NAME --}}
<img src="http://localhost:8000/img/logo.png" class="logo" alt="Controle de Tarefas Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
