<div class="tab-pane {{ Session::get('signinTab') == '' ? 'active' : 'fade' }}" id="jobseeker" role="tabpanel">
    <form class="mt-4" action="{{ route('front.jobseekerlogin', app()->getLocale()) }}" method="POST">
        {{ csrf_field() }}
        <div class="form-row">
            <div class="form-group col-12">
                <label for="signinjobemail">Username / Email Address 1 *</label>
                <input type="text" class="form-control" name="signinjobemail" id="signinjobemail">
                @error('signinjobemail')
                <span class="require-input">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-12">
                <label for="signinjobpassword">Password *</label>
                <input type="password" class="form-control" name="signinjobpassword" id="signinjobpassword">
                @error('signinjobpassword')
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