@extends('layouts.app')
@section('content')

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
                  <table class="table table-bordered">
                    <thead>                  
                      <tr>
                        <th style="width: 8%">#</th>
                       
                        <th style="width:15%">{{__("Nom")}}</th>
                        <th style="width:30%">{{__('email')}}</th>
                        <th style="width:8%">{{__('role')}}</th>
                        
                        <th style="width: 15%">{{__('Action')}}</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($users as $index => $user )
                    <tr >
                          <td class="table_row" >{{ $index + 1 }}  </td>                          
                          <td >{{$user->name}}</td>
                          <td>{{$user->email}}</td>
                          <td id ={{$user->id}} >{{$user->getRoleNames()[0]}}</td>
                          <td >
                           
                                 <button  id = "revoke"
                                  @if ($user->getRoleNames()[0] != "admin")
                                     disabled
                                 @endif class="btn btn-success btn-sm"  onclick='revoke({{$user->id}})'>revoke</button>
                              
                             <button id = "make" onclick="make({{$user->id}})"
                             @if ($user->getRoleNames()[0] == "admin")
                                     disabled
                            @endif
                             class= "btn btn-danger btn-sm">make an admin</button>

                           
                            
                          
                          <button type="button" id="Modifier" class="btn btn-primary btn-sm"  onclick="handleedit('{{ $user->id }}')" >
                                {{ __('Modifier') }}
                            </button>
                          <button type="button" id="detail" class="btn btn-info btn-sm" onclick="mouseOnRow('{{$user->name}}' , '{{$user->email}}')" >
                                {{ __('Detail') }}
                            </button>
                            <button type="button" id="supprimer" class="btn btn-danger btn-sm" onclick="handledelete(' {{ $user->id }} ')">
                                {{ __('Supprimer ') }}
                            </button>
                        </td>
                      </tr>
                      @endforeach  
                    </tbody>
                   
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
@endsection

<script>
    function revoke(id){
        $.ajax({
            url : "/admin/revoke/",
            method : 'GET',
            data:{
                "_token": "{{ csrf_token() }}",
                "id": id
            },

            success: function(){
               // alert('role revoked');
                document.getElementById('revoke').setAttribute('disabled' ,true)
                document.getElementById('make').removeAttribute('disabled')
                document.getElementById(id).innerText= 'guest'
            }
        })

        
    }
    function make(id){
        $.ajax({
            url : "/admin/make/",
            method : 'GET',
            data:{
                "_token": "{{ csrf_token() }}",
                "id": id
            },

            success: function(){
               // alert('role assigned');
                document.getElementById('make').setAttribute('disabled' ,true)
                document.getElementById('revoke').removeAttribute('disabled')
                document.getElementById(id).innerText= 'admin'
            }
        })

        
    }
</script>