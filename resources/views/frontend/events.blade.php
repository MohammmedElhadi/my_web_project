@extends('layouts.costum')



@section('content')

    


    
        <!-- Main Content -->
        <main class="main-content">
          <section id="scroll-top" class="section bg-gray">
            <div class="container">
                <div data-provide="shuffle">
                  <div class="row mb-7">
                    <div class="col-md-6 col-xl-4 mx-auto input-round">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><i class="ti-search"></i></div>
                          </div>
                        <input class="form-control" type="text" data-shuffle="search" placeholder="Keayword">
                      </div>
                    </div>
                  </div>
                  <nav class="nav nav-center nav-pills mb-7" data-shuffle="filter">
                    <a class="nav-link active" href="#" data-shuffle="button">All</a>
                    @foreach ($categories as $category)
                    <a class="nav-link" href="#" data-shuffle="button" data-group="{{$category->nom}}">{{$category->nom}}</a>
                    @endforeach
                    @foreach ($domaines as $domaine)
                    <a class="nav-link" href="#" data-shuffle="button" data-group="{{$domaine->nom}}">{{$domaine->nom}}</a>
                    @endforeach
                  </nav>
                  <div class="row gap-y gap-12" data-shuffle="list" >
                    @foreach ($evenments as $event)
                    <div class="row gap-y align-items-center" data-shuffle="item" data-groups="{{$event->category->nom}}@foreach($event->domaines as $domaine) ,{{ $domaine->nom }}@endforeach">
                      <div class="col-md-5 ml-auto" style="padding: 4%">
                        <img class="rounded shadow-2" src="storage/{{ $event->logo }}" alt="...">
                      </div>

                      <div class="col-md-6 ml-auto">
                        <h4 class="text-center" >{{ $event->nom}}</h4>
                        <div class="nav-divider"></div>
                        <div class="col-md-auto">
                          <p class="text-center text-lighter" >date : {{ $event->date_debut}}</p>
                        </div>
                        <p>{{ $event->description}}</p>
                        <div class="col-md-auto">
                            @if( $event->number_participant != $event->nombre_max_participant)
                              <button type="submit" class="btn btn-danger" disabled>
                                {{ __(" Places Complet ") }}
                              </button> 
                            @else
                              @if (Auth::check())
                              <button type="submit" class="btn btn-info" >
                                {{ __(" s'intéresser ") }}
                              </button> 
                              @else
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">{{ __(" s'intéresse ") }}</button>
                              @endif
                            @endif
                            <button type="button" onclick="handleDetail('{{ $event }}' , '{{ $event->users()->count() }}' , '{{$event->category->nom}}' , '{{$event->domaines}}')" class="btn btn-default " >
                              {{ __(' detail') }}
                            </button>        
                        </div>
                        <div class="nav-divider"></div>
                        <div class="col-md-auto">
                          <small class="text-lighter float-right nbr_tot">{{$event->number_participant}}</small>
                          <small  class="text-lighter float-right" >number des participant : </small>

                        </div>
                      </div>
                    </div>
                    <div class="nav-divider"></div>
                    @endforeach


                  </div>
                </div>
            </div>
          
          </section>
          
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
                        <td>
                            <span  id="domaine1"></span>
                            <span  id="domaine2"></span>
                            <span  id="domaine3"></span>
                            <span  id="domaine4"></span>
                            <span  id="domaine5"></span>
                            <span  id="domaine6"></span>
                            <span  id="domaine7"></span>
                            <span  id="domaine8"></span>
                        </td>
                    </tr>
                    <tr>
                        <td  style="width: 20%">{{__('Categorie :')}} </td>
                        <td id="category_detail"></td>
                    </tr>

                    <tr>
                        <td  style="width: 20%">{{__('Etat :')}} </td>
                        <td id="etat_detail"></td>
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


          <!-- Modal - Default -->
          <div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">{{ __('Login') }}</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form method="POST" action="{{ route('login') }}">
                  <div class="modal-body">
                          @csrf

                          <div class="form-group row">
                              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                              <div class="col-md-6">
                                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                  @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                              <div class="col-md-6">
                                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                  @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <div class="col-md-6 offset-md-4">
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                      <label class="form-check-label" for="remember">
                                          {{ __('Remember Me') }}
                                      </label>
                                  </div>
                              </div>
                          </div>

                          <div class="form-group ">
                              <div class="col-md-8 offset-md-4 mb-0">
                                  @if (Route::has('password.request'))
                                      <a class="btn btn-link" > <!-- href="{{ route('password.request') }}" -->
                                          {{ __('Forgot Your Password?') }}
                                      </a>
                                  @endif
                              </div>
                          </div>
                      </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close') }}</button>
                    <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
                  </div>
                </form>

              </div>
            </div>
          </div>

          <!-- Modal - Default -->
          <div class="modal fade" id="modal-sign-up" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">{{ __('Sign  Up') }}</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form method="POST" action="{{ route('register') }}">
                  <div class="modal-body">
                      @csrf

                      <div class="form-group row">
                          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                          <div class="col-md-6">
                              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                              @error('name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                          <div class="col-md-6">
                              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                              @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                          <div class="col-md-6">
                              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                              @error('password')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                          <div class="col-md-6">
                              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                          </div>
                      </div>


                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close') }}</button>
                    <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">{{ __(" s'intéresser ") }}</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <div class="modal-body ">
                      <p class="lead mb-0">{{ __(' You have must an account !') }}</p>
                      <div class="divider"></div>
                      <button class="btn btn-block btn-default float-left" data-dismiss="modal" type="button"  style="width: 40%" data-toggle="modal" data-target="#modal-sign-up">{{ __(" Register ") }}</button>
                      <button class="btn btn-block btn-primary float-right" data-dismiss="modal" type="button" style="width: 40%" data-toggle="modal" data-target="#modal-login" >{{ __(" Login ") }}</button> 
                </div>
              </div>
            </div>
          </div>
        <script>

      //    var intervalID = setInterval(function(){ var elements = document.getElementsByClassName('nbr_tot') 
      //        //console.log(elements)
      //        for ( element of elements ){
      //          console.log(element.value)
      //          element.innerHTML = '10' ;
      //        }
      //  }, 5000);


          function handleDetail(data, nbr_participant , category , domaines){
            var event = JSON.parse(data);
            var domaine = JSON.parse(domaines)
            var li =1 ;
            for ( dom of domaine){
              document.getElementById('domaine'+li).innerHTML = dom.nom;
              li++;
            }
            document.getElementById('objet_detail').innerHTML  = event.nom;
            document.getElementById('description_detail').innerHTML  = event.description;
            document.getElementById('date_debut_detail').innerHTML  = event.date_debut;
            document.getElementById('date_fin_detail').innerHTML  = event.date_fin;
            document.getElementById('edition_detail').innerHTML  = event.edition;
            document.getElementById('category_detail').innerHTML  = category;
            document.getElementById('etat_detail').innerHTML  = event.etat;
            
            document.getElementById('nbr_rest_detail').innerHTML  = event.number_max_participant - nbr_participant;
            $('#modal-detail').modal('show');
          }

          function handleLog(){
            $('#modal-option').modal('show');
          }
        </script>
        <!-- Scripts -->        
        @endsection

