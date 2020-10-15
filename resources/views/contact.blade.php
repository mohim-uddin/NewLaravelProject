@extends('welcome')
   @section('contact')

                            <!-- Start contact section -->
            <div class="contact-section mt-3 mb-3">
                <div class="title">
                    <h3 class="text-center font-weight-bold">Contact Me</h3>
                </div>              
                 <form action="/action_page.php" class="was-validated">
                  <div class="form-group">
                    <label for="uname">Username:</label>
                    <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                  </div>
                  <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                  </div>
                  <div class="form-check-inline">
                    <lable class="form-check-label">
                        <input type="checkbox" class="form-check-input">Bangladesh
                    </lable>
                  </div>
                  <div class="form-check-inline">
                    <lable class="form-check-label">
                        <input type="checkbox" class="form-check-input">India
                    </lable>
                  </div>
                  <div class="form-check-inline">
                    <lable class="form-check-label">
                        <input type="checkbox" class="form-check-input">Pakistan
                    </lable>
                  </div>
                   <input type="range" class="form-control-range">
                    <input type="file" class="form-control-file border">                  
                  <div class="form-group">
                      <label for="comment" required>Comment:</label>
                      <textarea class="form-control" rows="5" id="comment" required></textarea>
                      <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                  </div>                                   
                  <div class="form-group form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" name="remember" required> I agree on blabla.
                      <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Check this checkbox to continue.</div>
                    </label>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form> 
            </div>
            <!-- End contact Section -->
@endsection