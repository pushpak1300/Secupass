@extends('layouts.userlayouts')

@section('content')
<div class="container-fluid mt--7">
  <div class="row">
    <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
      <div class="card card-profile shadow pull-up">
        <div class="row justify-content-center">
          <div class="col-lg-3 order-lg-2">
          </div>
        </div
        <div class="card-body pt-0 pt-md-4">
          <div class="row">
            <div class="col">
              <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                <div>
                  <span class="heading">32</span>
                  <span class="description">Accounts</span>
                </div>
                <div>
                  <span class="heading">42</span>
                  <span class="description">Folders</span>
                </div>
                <div>
                  <span class="heading">Free</span>
                  <span class="description">Membership</span>
                </div>
              </div>
            </div>
          </div>
          <div class="text-center">
          	<button type="button" class="btn btn-warning btn-block" data-toggle="modal" data-target="#change-password">Change Password</button>
            <a href="https://demo.larapass.net/profile/logs" class="btn btn-default btn-block">View IP Logs</a>
            <hr class="my-4">
            <small class="text-muted">
      				<span class="badge badge-pill badge-danger">Note</span> Email Address cannot be changed by the user for security reasons. If you need to change your email address, please contact customer support using the contact page.
      			</small>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-8 order-xl-1">
  	  	      <div class="card bg-secondary shadow pull-up">
        <div class="card-header bg-white border-0">
          <div class="row align-items-center">
            <div class="col-8">
              <h3 class="mb-0">My account</h3>
            </div>
            <div class="col-4 text-right">
                            <button class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Email Address Verified">Verified</button>
                                          <a href="https://demo.larapass.net/security" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Activate 2-Step Authentication">Unsecured</a>
                          </div>
          </div>
        </div>
        <div class="card-body">
          <form role="form" method="POST" action="https://demo.larapass.net/profile">
          	<input type="hidden" name="_token" value="LNILmWtJ1fNo0EHFx3P3tb99UfUEyNr96J2cD73Y">            <h6 class="heading-small text-muted mb-4">User information</h6>
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group focused">
                    <label class="form-control-label" for="input-username">Username</label>
                    <input type="text" id="input-username" class="form-control form-control-alternative" value="demo" readonly="">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group focused">
                    <label class="form-control-label" for="input-email">Email address</label>
                    <input type="email" id="input-email" class="form-control form-control-alternative" value="demo@example.com" readonly="">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group focused">
                    <label class="form-control-label" for="input-first-name">Full name</label>
                    <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="Your Full name" name="name" value="Demo Account" required="">
                  </div>
                </div>
                <div class="col-lg-6">
                  	<div class="form-group">
                    	<label class="form-control-label" for="dob">Date of Birth</label>
					    <div class="form-group">
						    <div class="input-group input-group-alternative">
						        <div class="input-group-prepend">
						            <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
						        </div>
						        <input class="form-control datepicker" placeholder="Select date" type="text" value="" name="dob" id="dob" required="">
						    </div>
						</div>
					</div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-username">Mobile #</label>
                    <input type="text" id="mobile" name="mobile" class="form-control form-control-alternative" value="" placeholder="Enter Your Mobile Number" required="">
                  </div>
                </div>
              </div>
            </div>
            <hr class="my-4">
            <!-- Address -->
            <h6 class="heading-small text-muted mb-4">Account information</h6>
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group focused">
                    <label class="form-control-label" for="rng_level">Password Randomizer <span data-toggle="tooltip" data-placement="right" title="" data-original-title="Select difficulty level of our Random String Generator"><i class="fas fa-question-circle"></i></span></label>
                    <select class="form-control" name="rng_level" id="rng_level">
	                    <option value="1">Weak [8 Characters Combo of (a-z) + (1-9)] </option>
	                    <option value="2" selected="">Normal [8 Characters Combo of (a-z) + (A-Z) + (1-9)] </option>
	                    <option value="3">Strong [12 Characters Combo of (a-z) + (A-Z) + (1-9) + (Special Characters)] </option>
	                    <option value="4">Very Strong [16 Characters Combo of (a-z) + (A-Z) + (1-9) + (Special Characters) + (Dashes)] </option>
                  	</select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group focused">
                    <label class="form-control-label" for="support_pin">Support PIN <span data-toggle="tooltip" data-placement="right" title="" data-original-title="The 4 digit support pin is used by the support staff to verify your identity."><i class="fas fa-question-circle"></i></span></label>
                    <input type="text" id="support_pin" name="support_pin" class="form-control form-control-alternative" placeholder="Your 4-digit Support PIN" value="4597" required="">
                  </div>
                </div>
                <div class="col-lg-6">
		            <div class="text-center">
		              <button type="submit" class="btn btn-success my-4" disabled="">Update profile</button>
		            </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Change Password Modal -->
	<div class="modal fade" id="change-password" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
    	<div class="modal-content">
        	<div class="modal-body p-0">
				<div class="card bg-secondary shadow border-0">
				    <div class="card-body px-lg-5 py-lg-5">
				        <div class="text-center text-muted mb-4">
				            <small>Change your password</small>
				        </div>
				        <form role="form" method="POST" action="https://demo.larapass.net/profile/password">
				        	<input type="hidden" name="_token" value="LNILmWtJ1fNo0EHFx3P3tb99UfUEyNr96J2cD73Y">				            <div class="form-group mb-3">
				                <div class="input-group input-group-alternative">
				                    <div class="input-group-prepend">
				                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
				                    </div>
				                    <input class="form-control" placeholder="Current Password" type="password" name="current_password" id="current_password" required="">
				                </div>
				            </div>
				            <div class="form-group mb-3">
				                <div class="input-group input-group-alternative">
				                    <div class="input-group-prepend">
				                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
				                    </div>
				                    <input class="form-control" placeholder="Enter New Password" type="password" name="password" id="password" required="">
				                </div>
				            </div>
				            <div class="text-muted font-italic"><small>password strength: <span class="text-success font-weight-700" id="pass_type"></span></small></div>
				            <br>
				            <div class="form-group mb-3">
				                <div class="input-group input-group-alternative">
				                    <div class="input-group-prepend">
				                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
				                    </div>
				                    <input class="form-control" placeholder="Repeat New Password" type="password" name="password_confirmation" id="confirm_password">
				                </div>
				            </div>
				            <div class="text-center">
				                <button type="submit" class="btn btn-info my-4" disabled="">Change Password</button>
				            </div>
				        </form>
				    </div>
				</div>
			</div>
		</div>
	</div>
</div>  <div class="modal fade" id="change-avatar" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
    	<div class="modal-content">
        	<div class="modal-body p-0">
				<div class="card bg-secondary shadow border-0">
				    <div class="card-body px-lg-5 py-lg-5">
				        <div class="text-center text-muted mb-4">
				        	<h4>Change Your Avatar</h4>
				            <small>Recommend Size 800x800</small>
				        </div>
				        <form role="form" method="POST" action="https://demo.larapass.net/profile/avatar" enctype="multipart/form-data">
				        	<input type="hidden" name="_token" value="LNILmWtJ1fNo0EHFx3P3tb99UfUEyNr96J2cD73Y">				            <div class="form-group mb-3">
				                <div class="input-group input-group-alternative">
				                    <div class="input-group-prepend">
				                        <span class="input-group-text"><i class="fa fa-picture-o"></i></span>
				                    </div>
				                    <input class="form-control" type="file" name="avatar" id="avatar" required="">
				                </div>
				            </div>
				            <div class="text-center">
				                <button type="submit" class="btn btn-default my-4" disabled="">Change Avatar</button>
				            </div>
				        </form>
				    </div>
				</div>
			</div>
		</div>
	</div>
</div>  <!-- Footer -->
  <footer class="footer">
  <div class="row align-items-center justify-content-xl-between">
    <div class="col-xl-6">
      <div class="copyright text-center text-xl-left text-muted">
       2019 ©<a href="https://demo.larapass.net" class="font-weight-bold ml-1" target="_blank">Larapass Demo </a><small>v1.2.1</small>
      </div>
    </div>
    <div class="col-xl-6">
      <ul class="nav nav-footer justify-content-center justify-content-xl-end">
        <li class="nav-item">
          <a href="" class="nav-link" target="_blank">About Us</a>
        </li>
        <li class="nav-item">
          <a href="https://demo.larapass.net/pages/privacy" class="nav-link" target="_blank">Privacy Policy</a>
        </li>
        <li class="nav-item">
          <a href="https://demo.larapass.net/pages/terms" class="nav-link" target="_blank">Terms of Service</a>
        </li> 
      </ul>
    </div>
  </div>
</footer></div>
    
@endsection