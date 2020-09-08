@extends('layouts.costum')



@section('content')

    
        <!-- Header -->
        <header id="home" class="header text-white h-fullscreen text-center text-lg-left" style="background-color: #24292e">
          <canvas class="constellation" data-color="rgba(255,255,255,0.3)"></canvas>
          <div class="container">
            <div class="row align-items-center h-100">
    
              <div class="col-lg-6">
                <h1>{{ __('BIENVENUE') }}</h1>
                <p class="lead mt-5 mb-8">{{ __("Le planificateur des evenements de l'école militaire poytechnique chahid - Abderahman TALEB") }}</p>
                <p class="gap-xy">
                  <a class="btn btn-round btn-success mw-150" href="#section-features">{{ __('A propos') }}</a>
                </p>
              </div>
    
              <div class="col-lg-5 ml-auto">
                <img class="mt-5" src="../assets/img/laptop-1.png" alt="img">
              </div>
    
            </div>
          </div>
        </header><!-- /.header -->
    
    
        <!-- Main Content -->
        <main class="main-content">
    
         
    
    
          <!--
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          | Features
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          !-->
          <section id="section-features" class="section bg-gray">
            <div class="container">
              <div class="row gap-y align-items-center">
      
                <div class="col-md-7 mx-auto">
                  <h1>A propos</h1>
                  <p class="lead-3">
                    L'EMP est un établissement d’enseignement supérieur pluridisciplinaire, placé sous la double tutelle du Ministère de la Défense Nationale et du Ministère chargé de l’enseignement supérieur et de la recherche scientifique.

L’EMP est née en 1995 de la reconversion de l’École Nationale des Ingénieurs et Techniciens d’Algérie (ENITA), créée en 1967.
                  </p>
                </div>
                
              </div>
            </div>
            <div class="divider"></div>
            <div class="container">
              <div class="row gap-y text-center" >
                <div class="col-md-4">
                  <p class="small text-uppercase ls-2">Nombre Total des evenmemet </p>
                  <p class="lead-8 lh-1 fw-700" data-provide="countup" data-from="0" data-to="{{ $evenments->count()}}"></p>
                </div>
                <div class="col-md-4">
                  <p class="small text-uppercase ls-2">Nombre Totale des Participants</p>
                <p class="lead-8 lh-1 fw-700" data-provide="countup" data-from="0" data-to="{{ $users->count() }}"></p>
                </div>
                <div class="col-md-4">
                  <p class="small text-uppercase ls-2">Nombre Total des Domaine </p>
                  <p class="lead-8 lh-1 fw-700" data-provide="countup" data-from="0" data-to="{{ $domaines->count() }}"></p>
                </div>
              </div>
            </div>
            <div class="divider"></div>

            <div class="container" >
              <div class="row gap-y align-items-center">
    
                <div class="col-md-7 mx-auto">
                  <h2>Notre mission</h2>
                  <p class="lead">L'ouverture de l’École sur l’environnement national et international est une réalité. Elle prend toutes les formes couramment pratiquées en la matière telles que:
                </p>
    
                  <br>
    
                  <p>
                    <i class="ti-check text-success mr-2"></i>
                    <span> Conventions de coopération en matière de formation et de recherche avec des écoles et établissements nationaux et étrangers</span>
                  </p>
    
                  <p>
                    <i class="ti-check text-success mr-2"></i>
                    <span> Organisations et participations aux manifestations scientifiques à l’échelle nationale et internationale</span>
                  </p>
    
                  <p>
                    <i class="ti-check text-success mr-2"></i>
                    <span> Coopération en matière d’ingénierie pédagogique avec des écoles de renommées mondiales</span>
                  </p>
    
                  <p>
                    <i class="ti-check text-success mr-2"></i>
                    <span> Organisation de séjours en laboratoires étrangers et formations doctorales et post-graduées</span>
                  </p>
                </div>
    
              </div>
            </div>
          </section>
          <section id="section-mission" class="section">

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
    
    

@endsection