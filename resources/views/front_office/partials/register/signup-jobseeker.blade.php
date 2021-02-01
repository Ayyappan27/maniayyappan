
            <div class="tab-pane {{ Session::get('signupTab') == 'jobseeker' ? 'active' : 'fade' }}" id="reg-jobseeker" role="tabpanel">
               <form class="mt-4" method="POST" action="jobseeker" >
               {{ csrf_field() }}
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="jobfirstname">First Name *</label>
                    <input type="text" name="jobfirstname" id="jobfirstname" class="form-control mb-2" value="{{ old('jobfirstname') }}">
                    @error('jobfirstname')
                      <span class="require-input">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="form-group col-md-6">
                    <label>Email Address *</label>
                    <input type="text" name="jobemail" class="form-control mb-2" value="{{ old('jobemail') }}">
                    @error('jobemail')
                      <span class="require-input">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="form-group col-md-6">
                    <label>Phone Number *</label>
                    <input type="text" name="jobphone_number" class="form-control mb-2" value="{{ old('jobphone_number') }}">
                    @error('jobphone_number')
                      <span class="require-input">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="form-group col-md-6">
                    <label>Education Level *</label>
                    <select class="form-control mb-2" name="education_level">
                      <option value="">Please Select Level</option>
                      <option value="Low" {{ old('education_level') == 'Low' ? 'selected' : '' }}>Low</option>
                      <option value="Medium" {{ old('education_level') == 'Medium' ? 'selected' : '' }}>Medium</option>
                      <option value="High" {{ old('education_level') == 'High' ? 'selected' : '' }}>High</option>
                    </select>
                    @error('education_level')
                      <span class="require-input">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="form-group col-md-6">
                    <label>Password *</label>
                    <input type="password" name="jobpassword" class="form-control mb-2">
                    @error('jobpassword')
                      <span class="require-input">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="form-group col-md-6">
                    <label for="jobconfirmpassword">Confirm Password *</label>
                    <input type="password" name="jobconfirmpassword" class="form-control mb-2">
                    @error('jobconfirmpassword')
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
                    <button class="btn btn-primary d-block" id="jobseeker-reg-form" type="submit" >Sign Up</button>
                  </div>
                  <div class="col-md-6 text-md-right mt-2 text-center">
                    <p>Already registered? <a href=""  data-toggle="modal" data-target="#exampleModalCenter"> Sign in here</a></p>
                  </div>
                </div>
              </form>
            </div>