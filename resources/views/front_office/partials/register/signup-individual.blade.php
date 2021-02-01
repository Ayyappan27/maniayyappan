 <div class="tab-pane {{ Session::get('signupTab') == '' ? 'active' : 'fade' }}" id="reg-individual" role="tabpanel">
  <form class="mt-4" method="POST" action="individual">
  {{ csrf_field() }}
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="indfirstname">First Name *</label>
      <input type="text" name="indfirstname" class="form-control mb-2" value="{{ old('indfirstname') }}">
      @error('indfirstname')
        <span class="require-input">{{ $message }}</span>
      @enderror
    </div>
    <div class="form-group col-md-6">
      <label for="indlastname">Last Name *</label>
      <input type="text" name="indlastname" class="form-control mb-2" value="{{ old('indlastname') }}">
      @error('indlastname')
        <span class="require-input">{{ $message }}</span>
      @enderror
    </div>
    <div class="form-group col-md-6">
      <label>Phone Number *</label>
      <input type="text" name="indphone_number" class="form-control mb-2" value="{{ old('indphone_number') }}">
      @error('indphone_number')
        <span class="require-input">{{ $message }}</span>
      @enderror
    </div>
    <div class="form-group col-md-6">
      <label>Nationality *</label>
      <input type="text" name="nationality" class="form-control mb-2" value="{{ old('nationality') }}">
      @error('nationality')
        <span class="require-input">{{ $message }}</span>
      @enderror
    </div>
    <div class="form-group col-md-12">
      <label>Email Address *</label>
      <input type="text" name="indemail" class="form-control mb-2" value="{{ old('indemail') }}">
      @error('indemail')
        <span class="require-input">{{ $message }}</span>
      @enderror
    </div>
    <div class="form-group col-md-6">
      <label>Password *</label>
      <input type="password" name="indpassword" class="form-control mb-2">
      @error('indpassword')
        <span class="require-input">{{ $message }}</span>
      @enderror
    </div>
    <div class="form-group col-md-6">
      <label for="indconfirmpassword">Confirm Password *</label>
      <input type="password" name="indconfirmpassword" class="form-control mb-2">
      @error('indconfirmpassword')
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
    <div class="col-md-12">
      <button class="btn btn-primary d-block" id="individual-reg-form" type="submit">Sign Up</button>
    </div>
    <div class="col-md-12 mt-2">
      <p>Already registered? <a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModalCenter"> Sign in here</a></p>
    </div>
  </div>
  @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
  @endif
</form>
</div>