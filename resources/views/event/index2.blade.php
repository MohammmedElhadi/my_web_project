@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-12"> 
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">{{__('evenements')}}</h3>
                <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#modal-new"  >
                  {{ __('Nouveau evenement') }}
                </button>
              </div>
              <div class="card-body">
                      <table id="events_table" class="table table-stripped table-sm" style="width: 100%">
                        <thead>                  
                          <tr>
                            <th style="width: 8%">#</th>
                            
                            <th style="width:30%">{{__("Nom de l'evenement")}}</th>
                            <th style="width:8%">{{__('Edition')}}</th>
                            <th style="width:8%">{{__('Date de début')}}</th>
                            <th style="width:8%">{{__('Durée(jours)')}}</th>
                            <th style="width:8%">{{__('Etat')}}</th>
                            <th style="width:10%">{{__('Interressant pour')}}</th>
                            <th style="width: 30%">{{__('Action')}}</th>
                          </tr>
                        </thead>
                        
                          {{-- @foreach ($evenements as $index => $evenement )
                        <tr >
                              <td class="table_row" >{{ $index + 1 }}  </td>
                              <td></td>
                              <td >{{$evenement->nom}}</td>
                              <td>{{$evenement->edition}}</td>
                              <td>{{$evenement->date_debut}}</td>
                              <td>{{$evenement->etat}}</td>
                              <td>{{$evenement->domaines()->count()}}</td>
                              <td >
                        
                              <button type="button" id="Modifier" class="btn btn-info btn-sm"  onclick="handleedit('{{ $evenement }}')" >
                                    {{ __('Modifier') }}
                                </button>
                              <button type="button" id="detail" class="btn btn-info btn-sm" onclick="mouseOnRow('{{$evenement->description}}' , '{{$evenement->nom}}')" >
                                    {{ __('Detail') }}
                                </button>
                                <button type="button" id="supprimer" class="btn btn-danger btn-sm" onclick="handledelete(' {{ $evenement->id }} ')">
                                    {{ __('Supprimer ') }}
                                </button>
                            </td>
                          </tr>
                          @endforeach   --}}
                       
                        {{-- <tfoot><tr>{{$evenements->links()}}</tr></tfoot> --}}
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
              <h4 class="modal-title">{{__('Ajouter un evenement')}}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="{{route('evenement.store')}}" method="post">
              @csrf
                <div class="form-group">
                  <input type="text" required name="nom_evenement" id="nom_evenement" class="form-control" placeholder="Nom de l'evenement"  
                                    class="text-muted">
                </div>
                <div class="form-group">
                  <textarea name="description"  required id="description" cols="3" rows="3" class="form-control" placeholder="Description"></textarea>
                </div>

                <div class="form-group">
                    <input type="text"  name="edition" required id="edition" class="form-control" placeholder="Edition"  
                                      class="text-muted">
                </div>
                <div class="form-group">
                  <label for="date_debut">Date Debut</label>
                  <input class="form-control " required class="date" type="text" name="date_debut" id="date_debut" >
                </div>
                <div class="form-group">
                  <label for="date_fin">Date fin</label>
                  <input class="form-control " required class="date" type="text" name="date_fin" id="date_fin" >
                </div>
                <div class="form-group">
                    <label>{{__('Etat')}}</label>
                    <select  required name   = "etat"class="form-control select2" style="width: 100%;">
                      <option >{{__('programme')}}</option>
                      <option >{{__('encours')}}</option>
                      <option >{{__('reporte')}}</option>
                      <option >{{__('annule')}}</option>
                      <option >{{__('termine')}}</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="image" >Logo</label>
                    <input type="file" required class="form-control" name="image" id="image" >
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
        <form action="" method="post">
            <div class="form-group">
              <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom de l'evenement"  
                                class="text-muted">
            </div>
            <div class="form-group">
              <textarea type="text" name="description" id="description_e" class="form-control" placeholder="Description"></textarea>
            </div>
            <div class="form-group">
              <input type="text" name="edition" id="edition_e" class="form-control" placeholder="edition">
            </div>
           
          <div class="form-group">
            <label for="date_debut">Date Debut</label>
            <input class="form-control " required class="date" type="text" name="date_debut" id="date_debut_e" >
          </div>
          <div class="form-group">
            <label for="date_fin">Date fin</label>
            <input class="form-control " required class="date" type="text" name="date_fin" id="date_fin_e" >
          </div>
          <div class="form-group">

            <input  class="form-control  "type="number" name="nombre_max_participant" id="nombre_max_participant_e">
          </div>
          <div class="form-group">

            <input class="form-control " type="number" name="nombre_min_participant" id="nombre_min_participant_e">
          </div>
            <div class="form-group">
              <label>{{__('Etat')}}</label>
              <select  required name   = "etat_e"class="form-control select2" style="width: 100%;">
                <option >{{__('programme')}}</option>
                <option >{{__('encours')}}</option>
                <option >{{__('reporte')}}</option>
                <option >{{__('annule')}}</option>
                <option >{{__('termine')}}</option>
              </select>
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
      <div class="modal-body">
              <p>{{__('Etes-vous sûr que vous voulez supprimer cet evenement ? ')}}</p>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default " data-dismiss="modal">No</button>
        <form  id="form_delete" action="" method ="POST" >
          @csrf
          @method('DELETE')
          <button type="submit"  id="supprimer_m" data-id="" class="btn btn-danger ">Oui</button>
        </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id = "modal_title"></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p id = "desc"></p>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
 

 @endsection
 @section('js')
 <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

 <script>
    
    // flatpickr('#date_debut');
    // flatpickr('#date_fin');
    // $(document).ready(function() {
    // $('#events_table').DataTable();
    //  });
  
    $(function() {
      
    $('#events_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('datatables.data') !!}',
        columns: [
            { data: 'id', name: 'id' },
           // {data : ''   ,name: ''},
            { data: 'nom', name: 'nom' },
            { data: 'edition', name: 'edition' },
            { data: 'date_debut', name: 'date_debut' },
            { data: 'duree', name: 'duree' },
            { data: 'etat', name: 'etat' },
            {data : 'interresse' , name:'interresse'},
            {data : 'action' , name : 'action'}

        ]
    });
});
$(document).ready(function() {
  
  $('body').on('click' , '#detail', function () {
    console.log( $(this).data('nom'));
    document.getElementById('modal_title').innerHTML = $(this).data('nom');
    document.getElementById('desc').innerHTML =  $(this).data('desc');
   $('#modal-lg').modal('show');
  });


  $('body').on('click' , '#Modifier', function (){
    
    console.log( $(this).data('nombre_min_participant'))
    document.getElementById('nom').value = $(this).data('nom');
    document.getElementById('description_e').value = $(this).data('desc');

    document.getElementById('edition_e').value = $(this).data('edition')
    document.getElementById('date_debut_e').value = $(this).data('date_debut')
    document.getElementById('date_fin_e').value = $(this).data('date_fin')
    document.getElementById('nombre_max_participant_e').value = $(this).data('nombre_max_participant')
    document.getElementById('nombre_min_participant_e').value = $(this).data('nombre_min_participant')
    // document.getElementById('etat_e').value = $(this).data('etat')


    $('#modal-edit').modal('show')
  });

 
  $('body').on('click' , '#notify', function (){
    $.get( "ajax/notify/"+$(this).data('id'), function() {
    alert( "Notification Envoyée" );
    });
    

  });

  $('body').on('click' , '#supprimer', function () {
    $('#modal-danger').modal('show')
    console.log($(this).data('id'))
    document.getElementById('form_delete').action = 'evenement/'+$(this).data('id')
 })
});



</script>
@endsection
