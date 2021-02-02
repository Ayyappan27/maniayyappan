<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <title> :: wize genie ::</title>
      <link rel="apple-touch-icon" href="{{ asset('/dashboard/app-assets/images/ico/apple-icon-120.png')}}">
      <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/dashboard/app-assets/images/logo/logo.png')}}">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="{{ asset('/dashboard/app-assets/css/bootstrap.css')}}">
      <link rel="stylesheet" type="text/css" href="{{ asset('/dashboard/app-assets/css/colors.css')}}">
      <link rel="stylesheet" type="text/css" href="{{ asset('/dashboard/app-assets/css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/dashboard/app-assets/css/custom.css')}}">
   </head>
   <body class="vertical-layout vertical-menu 1-column  blank-page" data-open="click" data-menu="vertical-menu" data-col="1-column">
      <!-- BEGIN: Content-->
      <div class="app-content content">
         <div class="content-overlay"></div>
         <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
               <section class="row flexbox-container">
                  <div class="col-12 d-flex align-items-center justify-content-center">
                     <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 m-0">
                           <div class="card-header border-0">
                              <div class="card-title text-center">
                                 <div class="mt-1">
                                    <img style="width: 250px;" src="{{ asset('/dashboard/app-assets/images/logo/logo.png')}}" alt="branding logo">
                                </div>
                              </div>
                           </div>
                           <div class="card-content">
                              <h3 class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 mb-1">
                                 <span class="font-weight-bold"> Account Details</span>
                              </h3>
                              <div class="card-body pt-0">
                                 <form class="form-horizontal" method="POST" action="{{ route('admin.login') }}">
                                    @csrf
                                    <fieldset class="form-group floating-label-form-group">
                                       <label for="user-name">{{ __('E-Mail Address') }}</label>
                                       <input id="email"  class="form-control @error('email') is-invalid @enderror" name="email"  autocomplete="email" autofocus value="{{ old('email') }}" >
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </fieldset>
                                    <fieldset class="form-group floating-label-form-group mb-1">
                                       <label for="user-password">{{ __('Password') }}</label>
                                       <input  id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password">

                                       @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                       </span>
                                        @enderror


                                    </fieldset>
                                    <div class="form-group row">
                                       <div class="col-sm-6 col-12 text-center text-sm-left">
                                          <fieldset>
                                             <input type="checkbox" id="remember-me" class="chk-remember">
                                             <label for="remember-me"> {{ __('Remember Me') }}</label>
                                          </fieldset>
                                       </div>
                                       <div class="col-sm-6 col-12 float-sm-left text-center text-sm-right">

                                        @if (Route::has('password.request'))
                                         <a href="{{ route('password.request')}}" class="card-link"> {{ __('Forgot Password?') }}</a>
                                        @endif

                                    </div>
                                    </div>
                                    <button type="submit" class="btn btn-green btn-block mb-2"><i class="ft-unlock"></i> {{ __('Login') }}</button>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
         </div>
      </div>


    @include('sweetalert::alert')

    
   </body>
</html>