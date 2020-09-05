@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-12"> 
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">{{__('domaines')}}</h3>
                <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#modal-new"  >
                  {{ __('Nouveau domaine') }}
                </button>
              </div>
              <div class="card-body">
                      <table class="table table-bordered">
                        <thead>                  
                          <tr>
                            <th style="width: 8%">#</th>
                            <th style="width: 8%"></th>
                            <th style="width:30%">{{__("Nom du domaine")}}</th>
                            <th style="width:8%">{{__('Nombre d évenement')}}</th>

                            <th style="width: 15%">{{__('Action')}}</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($domaines as $index => $domaine )
                        <tr >
                              <td class="table_row" >{{ $index + 1 }}  </td>
                              <td></td>
                              <td >{{$domaine->nom}}</td>
                              <td>{{$domaine->events()->count()}}</td>
                           >
                              <td >
                        
                              <button type="button" id="Modifier" class="btn btn-info btn-sm"  onclick="handleedit('{{ $domaine }}')" >
                                    {{ __('Modifier') }}
                                </button>
                              <button type="button" id="detail" class="btn btn-info btn-sm" >
                                    {{ __('Detail') }}
                                </button>
                                <button type="button" id="supprimer" class="btn btn-danger btn-sm" onclick="handledelete(' {{ $domaine->id }} ')">
                                    {{ __('Supprimer ') }}
                                </button>
                            </td>
                          </tr>
                          @endforeach  
                        </tbody>
                        <tfoot><tr>{{$domaines->links()}}</tr></tfoot>
                      </table>
              </div>
              <!-- /.card-body -->
      
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
<div class="modal fade" id="modal-new">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">{{__('Ajouter un domaine')}}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="{{route('domaine.store')}}" method="post">
              @csrf
                <div class="form-group">
                  <input type="text" required name="nom_domaine" id="nom_domaine" class="form-control" placeholder="Nom de l'domaine"  
                                    class="text-muted">
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
            </form>
            </div>
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
</div>

<div class="modal fade" id="modal-edit">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">{{__('Modifier unevenement')}}</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form id = "edit_form"  method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
              <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom du domainet"  
                                class="text-muted">
            </div>
         </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
  <!-- /.modal -->
<div class="modal fade" id="modal-danger">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">{{__('Supprimer unevenement')}}</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form  id="delete_form" method="POST">
          @csrf
          @method('DELETE')
      <div class="modal-body">
              <p>{{__('Etes-vous sûr que vous voulez supprimer cet evenement ? ')}}</p>
      </div>
      <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default " data-dismiss="modal">No</button>
              <button type="submit" class="btn btn-danger ">Oui</button>
        </div>
    </div>
</form>

    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
@endsection

@section('js')
<script>
function handleedit(data)  {
    form = document.getElementById('edit_form');
    form.action = 'domaine/'+JSON.parse(data).id;
    document.getElementById('nom').setAttribute('value' , JSON.parse(data).nom);
    $('#modal-edit').modal('show');
}      



function handledelete(id)  {
    form = document.getElementById('delete_form');
    form.action = 'domaine/'+id;
    form.method = 'DELETE'
    console.log(form.method);
    $('#modal-danger').modal('show');
}      
    
        
        
</script> 
@endsection