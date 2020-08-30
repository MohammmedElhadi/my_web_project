@extends('layouts.costum')



@section('content')

    


    
        <!-- Main Content -->
        <main class="main-content">
    
         
    
    
          <!--
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          | Features
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          !-->
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
              
              <div class="row gap-y align-items-center">
                <div class="col-md-6 ml-auto">
                  <h4>Getting Started page</h4>
                  <p>As part of efforts to improve user onboarding, I shipped an experiment to a subset of new users showing them a Getting Started page immediately after signup to help them get to what we think are some of the most important actions for new users to take. We compared the subset of users against a control group to see whether such an experience improved engagement over a period of time.</p>
                  <div class="col-md-auto">
                    <button type="submit" class="btn btn-info float-right" >
                        {{ __(' register') }}
                      </button>
                  </div>
                  
                </div>
    
                <div class="col-md-5 order-md-first">
                  <img class="rounded shadow-2" src="../assets/img/preview/dribbble-6.png" alt="...">
                </div>
              </div>
    
    
              <hr class="my-8">
            
    
    
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
    
    

@endsection