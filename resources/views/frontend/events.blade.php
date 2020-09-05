@extends('layouts.costum')



@section('content')

    


    
        <!-- Main Content -->
        <main class="main-content">
          <section id="section-features" class="section bg-gray">
            <div class="container">
                <div data-provide="shuffle">
                    <ul class="nav nav-center nav-bold nav-uppercase nav-slash mb-7" data-shuffle="filter">
                      <li class="nav-item">
                        <a class="nav-link active" href="#" data-shuffle="button">All</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#" data-shuffle="button" data-group="bag">Bag</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#" data-shuffle="button" data-group="box">Box</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#" data-shuffle="button" data-group="book">Book</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#" data-shuffle="button" data-group="bottle">Bottle</a>
                      </li>
                    </ul>
                    @foreach ($evenments as $event)
                      <div class="row gap-y align-items-center">
                        <div class="col-md-6 ml-auto">
                          <h4>{{ $event->nom}}</h4>
                          <div class="nav-divider"></div>
                          <div class="col-md-auto">
                            <p class="text-lighter center">date : {{ $event->date_debut}}</p>
                          </div>
                          <p>{{ $event->description}}</p>
                          <div class="col-md-auto">
                              <button type="submit" class="btn btn-info" >
                                {{ __(' register') }}
                              </button> 
                              <button type="button" onclick="handleDetail('{{ $event }}')" class="btn btn-default " >
                                {{ __(' detail') }}
                              </button>        
                          </div>
                          <div class="nav-divider"></div>
                          <div class="col-md-auto">
                            <small class="text-lighter float-right" >number min:{{ $event->nombre_min_participant }}</small>
                            <small class="text-lighter col-md-auto ml-auto order-md-last">number max:{{ $event->number_max_participant }}</small>
                          </div>
                        </div>
            
                        <div class="col-md-5 order-md-first">
                          <img class="rounded shadow-2" src="storage/{{ $event->logo }}" alt="...">
                        </div>
                      </div>
                      <hr class="my-6">
                    @endforeach
                    <div class="float-right">
                      {{$evenments->links()}}
                    </div>
                    

    
    
            </div>
          </section>
    
    
          <!--
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          | Pricing
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          !-->
          
          <!--
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          | Signup
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          !-->
          
    
        </main>
    
        <div class="modal fade" id="modal-detail">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">{{__('Details ')}}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
        
                <table class="table table-sm table-striped">
                  <tbody>
                    <tr>
                        <td style="width: 20%">{{__('Objet :')}} </td>
                        <td id="objet_detail"></td>
                    </tr>
                    <tr>
                        <td style="width: 20%">{{__('Edition :')}} </td>
                        <td id="edition_detail"></td>
                    </tr>
                    <tr>
                        <td  style="width: 20%">{{__('Description :')}} </td>
                        <td id="description_detail"></td>
                    </tr>
                    <tr>
                        <td  style="width: 20%">{{__('Domaine :')}} </td>
                        <td id="domaine_detail"></td>
                    </tr>
                    <tr>
                        <td  style="width: 20%">{{__('Categorie :')}} </td>
                        <td id="category_detail"></td>
                    </tr>
                    <tr>
                        <td  style="width: 20%">{{__('Type :')}} </td>
                        <td id="type_detail"></td>
                    </tr>
                    <tr>
                        <td  style="width: 20%">{{__('Nombre des places restantes :')}} </td>
                        <td id="nbr_rest_detail"></td>
                    </tr>
                    <tr>
                      <td style="width: 20%">{{__('Date du debut :')}} </td>
                      <td id="date_debut_detail"></td>
                    </tr>
                    <tr>
                      <td style="width: 20%">{{__('Date du fin :')}} </td>
                      <td id="date_fin_detail"></td>
                    </tr>

                  </tbody>
                </table>
        
                  <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default" data-dismiss="modal">{{__('Retour')}}</button>
                      <button type="button" class="btn btn-primary" data-dismiss="modal">{{__('OK')}}</button>
                  </div>
              </div>
        
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>    


        <script>
          function handleDetail(data){
            var event = JSON.parse(data);
            document.getElementById('objet_detail').innerHTML  = event.nom;
            document.getElementById('description_detail').innerHTML  = event.description;
            document.getElementById('date_debut_detail').innerHTML  = event.date_debut;
            document.getElementById('date_fin_detail').innerHTML  = event.date_fin;
            document.getElementById('edition_detail').innerHTML  = event.edition;
            
            $('#modal-detail').modal('show');
          }
        </script>
@endsection