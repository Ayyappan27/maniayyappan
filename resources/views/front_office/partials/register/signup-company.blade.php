 <div class="tab-pane fade" id="reg-company" role="tabpanel">
  <form class="mt-4" method="POST" action="company">
    {{ csrf_field() }}
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="firstname">First Name *</label>
        <input type="text" name="firstname" id="firstname" class="form-control mb-2" value="{{ old('firstname') }}">
        @error('firstname')
          <span class="require-input">{{ $message }}</span>
        @enderror
      </div>
      <div class="form-group col-md-6">
        <label for="firstname">Last Name *</label>
        <input type="text" name="firstname" id="firstname" class="form-control mb-2" value="{{ old('firstname') }}">
        @error('lastname')
          <span class="require-input">{{ $message }}</span>
        @enderror
      </div>
      <div class="form-group col-md-6">
        <label for="company_name">Company Name *</label>
        <input type="text" name="company_name" id="company_name" class="form-control mb-2" value="{{ old('company_name') }}">
        @error('company_name')
          <span class="require-input">{{ $message }}</span>
        @enderror
      </div>
      <div class="form-group col-md-6">
        <label>Phone Number *</label>
        <input type="text" name="phone_number" class="form-control mb-2" value="{{ old('phone_number') }}">
        @error('phone_number')
          <span class="require-input">{{ $message }}</span>
        @enderror
      </div>
      <div class="form-group col-md-12">
        <label>Email Address *</label>
        <input type="text" name="email" id="email" class="form-control mb-2" value="{{ old('email') }}">
        @error('email')
          <span class="require-input">{{ $message }}</span>
        @enderror
      </div>
      <div class="form-group col-md-6">
        <label>Password *</label>
        <input type="password" name="password" class="form-control mb-2">
        @error('password')
          <span class="require-input">{{ $message }}</span>
        @enderror
      </div>
      <div class="form-group col-md-6">
        <label for="password2">Confirm Password *</label>
        <input type="password" name="confirmpassword" class="form-control mb-2">
        @error('confirmpassword')
          <span class="require-input">{{ $message }}</span>
        @enderror
      </div> 
      <div class="form-group col-12">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="accepts-01">
          <label class="custom-control-label" for="accepts-01">you accept our Terms and Conditions and Privacy Policy</label>
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6">
        <button class="btn btn-primary d-block" id="company-reg-form" type="submit">Sign Up</button>
      </div>
      <div class="col-md-6 text-md-right mt-2 text-center">
        <p>Already registered? <a href=""  data-toggle="modal" data-target="#exampleModalCenter"> Sign in here</a></p>
      </div>
    </div>
  </form>
</div>