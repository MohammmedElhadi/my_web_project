<button type="button" id="Modifier" class="btn btn-info btn-sm"  onclick="handleedit('{{ $evet }}')" >
    {{ __('Modifier') }}
</button>
<button type="button" id="detail" class="btn btn-info btn-sm" onclick="mouseOnRow('{{$evet->description}}' , '{{$evet->nom}}')" >
    {{ __('Detail') }}
</button>
<button type="button" id="supprimer" class="btn btn-danger btn-sm" onclick="handledelete(' {{ $evet->id }} ')">
    {{ __('Supprimer ') }}
</button>