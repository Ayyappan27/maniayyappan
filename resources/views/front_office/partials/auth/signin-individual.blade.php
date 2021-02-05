<div class="tab-pane {{ Session::get('signinTab') == 'individual' ? 'active' : 'fade' }}" id="individual" role="tabpanel">
    <form id="signin-individual" class="mt-4" action="{{ route('front.individuallogin', app()->getLocale()) }}" method="POST">
        {{ csrf_field() }}
        <div class="form-row">
            <div class="form-group col-12">
                <label for="signinindemail">Username / Email Address 2 *</label>
                <input type="text" class="form-control" name="signinindemail" id="signinindemail">
                @error('signinindemail')
                    <span class="require-input">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-12">
                <label for="signinindpassword">Password *</label>
                <input type="password" class="form-control" name="signinindpassword" id="signinindpassword"> 
                @error('signinindpassword')
                    <span class="require-input">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6">
            <button class="btn btn-primary btn-block" href="javascript:void(0);" type="submit">Sign In</button>
            </div>
            <div class="col-md-6">
            <div class="ml-md-3 mt-3 mt-md-0 forgot-pass">
                <a href="#">Forgot Password?</a>
                <p class="mt-1">Don't have account? <a href="{{ route('front.registration', app()->getLocale()) }}">Sign Up here</a></p>
            </div>
            </div>
        </div>
    </form>
    <div class="mt-4">
        <fieldset>
            <legend class="px-2">Login or Sign up with</legend>
            <div class="social-login">
            <ul class="list-unstyled d-flex mb-0">
                <li class="facebook text-center">
                <a href="#"> <i class="fab fa-facebook-f mr-4"></i>Login with Facebook</a>
                </li>
                <li class="google text-center">
                <a href="#"> <i class="fab fa-google mr-4"></i>Login with Google</a>
                </li>
            </ul>
            </div>
        </fieldset>
    </div>
</div>