@extends('layouts.costum')



@section('content')

    
        <!-- Header -->
        <header id="home" class="header text-white h-fullscreen text-center text-lg-left" style="background-color: #24292e">
          <canvas class="constellation" data-color="rgba(255,255,255,0.3)"></canvas>
          <div class="container">
            <div class="row align-items-center h-100">
    
              <div class="col-lg-6">
                <h1>{{ __('Welcome') }}</h1>
                <p class="lead mt-5 mb-8">Support your workflow with lightweight tools and features. Then work how you work best—we'll follow your lead.</p>
                <p class="gap-xy">
                  <a class="btn btn-round btn-success mw-150" href="#section-features">{{ __('Coming soon') }}</a>
                </p>
              </div>
    
              <div class="col-lg-5 ml-auto">
                <img class="mt-5" src="../assets/img/preview/laptop-1.png" alt="img">
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
                <div class="col-md-6 ml-auto">
                  <h4>Getting Started page</h4>
                  <p>As part of efforts to improve user onboarding, I shipped an experiment to a subset of new users showing them a Getting Started page immediately after signup to help them get to what we think are some of the most important actions for new users to take. We compared the subset of users against a control group to see whether such an experience improved engagement over a period of time.</p>
                </div>
    
                <div class="col-md-5 order-md-first">
                  <img class="rounded shadow-2" src="../assets/img/preview/dribbble-6.png" alt="...">
                </div>
              </div>
    
    
              <hr class="my-8">
    
    
              <div class="row gap-y align-items-center">
                <div class="col-md-6 mr-auto">
                  <h4>Outdated comments toggling</h4>
                  <p>Last week we shipped outdated comments...well, brought them back, actually. We used to show collapsed comments on outdated diffs as a single line, but removed that when we shipped code review recently. We brought that back last week with an improvement: you can now toggle open threads on outdated diffs in a review individually.</p>
                </div>
    
                <div class="col-md-5">
                  <img class="rounded shadow-2" src="../assets/img/preview/dribbble-7.png" alt="...">
                </div>
              </div>
    
    
              <hr class="my-8">
    
    
              <div class="row gap-y align-items-center">
                <div class="col-md-6 ml-auto">
                  <h4>Code review illustrations</h4>
                  <p>Less an illustration, and more a literal proxy. These show up when the feature's introduced. Monotonectally leverage existing standards compliant ideas with distributed data. Efficiently simplify cross-unit systems whereas adaptive testing. Monotonectally leverage existing standards compliant ideas with distributed data. Efficiently simplify cross-unit systems whereas adaptive testing.</p>
                </div>
    
                <div class="col-md-5 order-md-first">
                  <img class="rounded shadow-2" src="../assets/img/preview/dribbble-8.png" alt="...">
                </div>
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
    
    

@endsection