<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>EMP Events</title>
    

    <!-- Styles -->
    <link href="{{('assets/css/page.min.css')}}" rel="stylesheet">
    <link href="{{('assets/css/style.css')}}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{('assets/img/apple-touch-icon.png')}}">
    <link rel="icon" href="{{('assets/img/scs.png')}}">
  </head>

  <body >

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-stick-dark" data-navbar="sticky">
            <div class="container">
      
              <div class="navbar-left">
                <button class="navbar-toggler" type="button">&#9776;</button>
              <a class="navbar-brand" href="{{ route('welcome') }}">
                  <img class="logo-dark" src="assets/img/logo-dark.png" alt="logo">
                  <img class="logo-light" src="assets/img/logo-light.png" alt="logo">
                </a>
              </div>
      
              <section class="navbar-mobile">
                <span class="navbar-divider d-mobile-none"></span>
      
                <ul class="nav nav-navbar">
                  <li class="nav-item">
                  <a class="nav-link" href="{{ route('welcome') }}"> {{ __('Home') }} </span></a>
                  </li>
      

      
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('events') }}">{{ __('Events') }}</a>
                  </li>
      


                  <li class="nav-item">
                    <a class="nav-link" href="#">{{ __('Language') }} <span class="arrow"></span></a>
                    <nav class="nav">
                      <a class="nav-link" href="">Français</a>
                      <a class="nav-link" href="">Arabe</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                  </li>



                  @guest
                  @else
                  <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                  </li>                  <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                  </li>                  <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                  </li>                  <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                  </li>                  <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                  </li>                  

                  <li class="nav-item">
                     
                    <a class="nav-link" href="#"><i class="fa fa-user-circle  fa-2x"></i> {{ Auth::user()->name }} <span class="arrow"></span></a>
                    <nav class="nav">
                      <a class="nav-link" href="{{ route('myevents') }}">{{ __('Favourites') }}</a>

                      <a class="nav-link" href="{{ route('password.reset',csrf_token()) }} ">{{ __('Setting') }}</a>

                      <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                      </a>
        
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
        
                  </li>
        
                  @endguest



                </ul>
              </section>


              @guest
                <a class="btn btn-round btn-sm" data-toggle="modal" data-target="#modal-login">{{ __('Login') }}</a>
              @if (Route::has('register'))
                    <p style="width: 1%"></p>
                    <a class="btn btn-round btn-light btn-sm" data-toggle="modal" data-target="#modal-sign-up">{{ __('Sign Up') }}</a>               
              @endif
              @else
              @endguest

        </nav><!-- /.navbar -->

            @yield('content')


            <!-- Footer -->
            <footer class="footer">
              <div class="container">
                <div class="row gap-y align-items-center">
        
                  <div class="col-md-3 text-center text-md-left">
                  </div>
        
                  <div class="col-md-6">
                    <div class="nav nav-center">
                        <p>Made with <i class="fa fa-heart" ></i> in Algeria.</p>
                        
                        
                    </div>
                  </div>
        
                  <div class="col-md-3 text-center text-md-right">
                    <small>© 2020. All rights reserved.</small>
                  </div>
        
                </div>
              </div>
            </footer><!-- /.footer -->

          <!-- Modal - Default -->
          <div class="modal fade" id="modal-contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <div class="modal-body">
                  <p class="lead">Modals are a great tool to display call to action contents. Mostly you want to use them for sale promotions, sign up to your application, newsletter subscription, etc.</p>
                  <p class="lead mb-0">Our template make it an easy task as well.</p>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
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

          <button class="btn btn-circle btn-primary scroll-top"><i class="fa fa-angle-up"></i></button>

    <!-- Scripts -->
    <script src="{{asset('assets/js/page.min.js')}}"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>

  </body>
</html>
