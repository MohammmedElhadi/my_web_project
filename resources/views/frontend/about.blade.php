@extends('layouts.costum')



@section('content')

    
    <!-- Header -->
    <header class="header">
      <div class="container">
        <div class="row align-items-center h-100">

          <div class="col-md-7 mx-auto">
            <h1>About us</h1>
            <p class="lead-3">Our company was founded in 2013 with a mission to create pretty templates for great startups. We can combine beautiful, modern designs with clean, functional and high-performance code to produce stunning websites. And best of all, we are super passionate about our work. Thought does cognitive into follow and rationale annoyed.</p>
          </div>

        </div>
      </div>
    </header><!-- /.header -->
    
        <!-- Main Content -->
        <main class="main-content">


          <!--
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          | Slider
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          !-->
          <section class="section p-0">
            <div data-provide="slider" data-autoplay="true" data-slides-to-show="2" data-css-ease="linear" data-speed="12000" data-autoplay-speed="0" data-pause-on-hover="false">
              <div class="p-2">
                <div class="rounded bg-img h-400" style="background-image: url(../assets/img/thumb/14.jpg)"></div>
              </div>
    
              <div class="p-2">
                <div class="rounded bg-img h-400" style="background-image: url(../assets/img/thumb/15.jpg)"></div>
              </div>
    
              <div class="p-2">
                <div class="rounded bg-img h-400" style="background-image: url(../assets/img/thumb/12.jpg)"></div>
              </div>
    
              <div class="p-2">
                <div class="rounded bg-img h-400" style="background-image: url(../assets/img/thumb/13.jpg)"></div>
              </div>
            </div>
          </section>
    
    
          <!--
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          | Our Mission
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          !-->
          <section id="section-mission" class="section">
            <div class="container">
              <div class="row gap-y align-items-center">
    
                <div class="col-md-7 mx-auto">
                  <h2>Our Mission</h2>
                  <p class="lead">We’re a team of creative and experienced designers and developers. We used to work as freelancers and we know what do you need and more that, we know what do your customers want from you.</p>
    
                  <br>
    
                  <p>
                    <i class="ti-check text-success mr-2"></i>
                    <span> Deliver a high quality web design</span>
                  </p>
    
                  <p>
                    <i class="ti-check text-success mr-2"></i>
                    <span> Support our customers once signing a contract</span>
                  </p>
    
                  <p>
                    <i class="ti-check text-success mr-2"></i>
                    <span> Streamline an expanded array of web</span>
                  </p>
    
                  <p>
                    <i class="ti-check text-success mr-2"></i>
                    <span> Pursue web-enabled niche markets with professionals</span>
                  </p>
                </div>
    
              </div>
            </div>
          </section>
    
    
          <!--
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          | Numbers
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          !-->
          <section class="section text-white" style="background-color: #93a5cf">
            <div class="container">
              <div class="row gap-y text-center">
    
                <div class="col-md-4">
                  <p class="small text-uppercase ls-2">Finished Projects</p>
                  <p class="lead-8 lh-1 fw-700" data-provide="countup" data-from="0" data-to="42"></p>
                </div>
    
                <div class="col-md-4">
                  <p class="small text-uppercase ls-2">Happy Customers</p>
                  <p class="lead-8 lh-1 fw-700" data-provide="countup" data-from="0" data-to="5478"></p>
                </div>
    
                <div class="col-md-4">
                  <p class="small text-uppercase ls-2">User Satisfaction</p>
                  <p class="lead-8 lh-1 fw-700" data-provide="countup" data-from="0" data-to="100" data-prefix="%"></p>
                </div>
    
              </div>
            </div>
          </section>
    
    
          <!--
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          | Testimonials
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          !-->
          <section class="section">
            <div class="container">
              <header class="section-header">
                <h2>What People Say</h2>
                <br>
                <p class="lead">We waited until we could do it right. Then we did! Instead of creating a carbon copy.</p>
              </header>
    
              <div class="row gap-y text-center">
    
                <div class="col-lg-4">
                  <blockquote class="blockquote">
                    <div><img class="avatar avatar-xl" src="../assets/img/avatar/1.jpg" alt="..."></div>
                    <div class="fs-15 mt-6">When you innovate, you make mistakes. It is best to admit them quickly, and get on with improving your other innovations.</div>
                    <footer><em>Steve Jobs</em></footer>
                  </blockquote>
                </div>
    
                <div class="col-lg-4">
                  <blockquote class="blockquote">
                    <div><img class="avatar avatar-xl" src="../assets/img/avatar/2.jpg" alt="..."></div>
                    <div class="fs-15 mt-6">Design everything on the assumption that people are not heartless or stupid but marvelously capable, given the chance.</div>
                    <footer><em>John Jones</em></footer>
                  </blockquote>
                </div>
    
                <div class="col-lg-4">
                  <blockquote class="blockquote">
                    <div><img class="avatar avatar-xl" src="../assets/img/avatar/3.jpg" alt="..."></div>
                    <div class="fs-15 mt-6">Technology is just a tool. In terms of getting the kids working together and motivating them, the teacher is the most important.</div>
                    <footer><em>Bill Gates</em></footer>
                  </blockquote>
                </div>
    
              </div>
    
            </div>
          </section>
    
    
    
    
          <!--
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          | Team
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          !-->
          <section class="section">
            <div class="container">
              <header class="section-header">
                <small>People</small>
                <h2>Meet The Team</h2>
                <hr>
                <p class="lead">Meet our small team that make those great products</p>
              </header>
    
    
              <div class="row gap-y">
                <div class="col-md-6 col-lg-3 team-1">
                  <a href="#">
                    <img src="../assets/img/avatar/5.jpg" alt="...">
                  </a>
                  <h6>Morgan Guadis</h6>
                  <small>Co-Founder & CEO</small>
                  <div class="social social-gray">
                    <a class="social-twitter" href="#"><i class="fa fa-twitter"></i></a>
                    <a class="social-facebook" href="#"><i class="fa fa-facebook"></i></a>
                    <a class="social-instagram" href="#"><i class="fa fa-instagram"></i></a>
                  </div>
                </div>
    
    
                <div class="col-md-6 col-lg-3 team-1">
                  <a href="#">
                    <img src="../assets/img/avatar/6.jpg" alt="...">
                  </a>
                  <h6>John Senating</h6>
                  <small>Co-Founder & CTO</small>
                  <div class="social social-gray">
                    <a class="social-facebook" href="#"><i class="fa fa-facebook"></i></a>
                    <a class="social-twitter" href="#"><i class="fa fa-twitter"></i></a>
                    <a class="social-instagram" href="#"><i class="fa fa-instagram"></i></a>
                  </div>
                </div>
    
    
                <div class="col-md-6 col-lg-3 team-1">
                  <a href="#">
                    <img src="../assets/img/avatar/7.jpg" alt="...">
                  </a>
                  <h6>Sandi Hormez</h6>
                  <small>Lead Developer</small>
                  <div class="social social-gray">
                    <a class="social-facebook" href="#"><i class="fa fa-facebook"></i></a>
                    <a class="social-twitter" href="#"><i class="fa fa-twitter"></i></a>
                    <a class="social-instagram" href="#"><i class="fa fa-instagram"></i></a>
                  </div>
                </div>
    
    
                <div class="col-md-6 col-lg-3 team-1">
                  <a href="#">
                    <img src="../assets/img/avatar/8.jpg" alt="...">
                  </a>
                  <h6>Animor Tiruse</h6>
                  <small>Designer</small>
                  <div class="social social-gray">
                    <a class="social-facebook" href="#"><i class="fa fa-facebook"></i></a>
                    <a class="social-twitter" href="#"><i class="fa fa-twitter"></i></a>
                    <a class="social-instagram" href="#"><i class="fa fa-instagram"></i></a>
                  </div>
                </div>
              </div>
    
            </div>
          </section>
    
    
        </main><!-- /.main-content -->

    
    

@endsection