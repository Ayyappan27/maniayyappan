<div class="tab-pane {{ Session::get('signinTab') == 'company' ? 'active' : 'fade' }}" id="company" role="tabpanel">
    <form class="mt-4" action="{{ route('front.companylogin', app()->getLocale()) }}" method="POST">
        {{ csrf_field() }}
        <div class="form-row">
            <div class="form-group col-12">
                <label for="signincomemail">Username / Email Address 3 *</label>
                <input type="text" class="form-control" name="signincomemail" id="signincomemail">
                @error('signincomemail')
                    <span class="require-input">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-12">
                <label for="signincompassword">Password*</label>
                <input type="password" class="form-control" name="signincompassword" id="signincompassword"> 
                @error('signincompassword')
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
</div>