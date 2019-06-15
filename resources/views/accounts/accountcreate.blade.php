@extends('layouts.layouts')

@push('css')
<style>
    
    .nav-link{
        font-weight: bolder;
    }
</style>
@endpush

@section('title','Create Accounts')

@section('content')
<div class="container-fluid mt--3">
    <div class="row">
        <div class="col-sm">
        </div>
    <div class="col-sm">
        <button class="btn btn-icon btn-3 btn-block" style="color=success;" type="button" data-toggle="modal" data-target="#add-account">
            <span class="btn-inner--icon"><i class="ni ni-atom"></i></span>
                <span class="btn-inner--text">Add New Account</span>
      	</button>
    </div>
    <div class="col-sm">
    </div>
</div>
</div>




<div class="modal fade" id="add-account" tabindex="-1" role="dialog" aria-labelledby="modal-form" style="display: none;" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
    	<div class="modal-content">
        	<div class="modal-body p-0">
				<div class="card bg-secondary shadow border-0">
				    <div class="card-body px-lg-5 py-lg-5">
				        <div class="text-center mb-4">
				            <small>Add Account Vault</small>
				        </div>
				        <form role="form" method="POST" action="/accounts">
							@csrf

							<div class="form-group mb-3">
				                <div class="input-group input-group-alternative">
				                    <div class="input-group-prepend">
				                        <span class="input-group-text"><i class="ni ni-bold"></i></span>
				                    </div>
				                    <input class="form-control" placeholder="Title" type="text" name="title" id="title" required="">
				                </div>
				            </div>
				            {{-- <div class="form-group mb-3">
				                <div class="input-group input-group-alternative"> --}}
				                    {{-- <div class="input-group-prepend">
				                        <span class="input-group-text"><i class="ni ni-single-copy-04"></i></span>
				                    </div>
				                    <select class="form-control" name="category_id" id="category_id" required="">
				                    	<option value="" selected="" disabled="">Select a category</option>
				                    					                    	<option value="www.facebook.com">Facebook</option>
				                    					                    	<option value=www.gmail.com>Gmail</option>
				                    					                    	<option value="www.twitter.com">Twitter</option>
                                                                                <option value="Please Type URL">Other Account</option>
				                    					                    	
				                    </select>
				                </div>
				            </div> --}}
				            <div class="form-group mb-3">
				                <div class="input-group input-group-alternative">
				                    <div class="input-group-prepend">
				                        <span class="input-group-text"><i class="fas fa-link"></i></span>
				                    </div>
				                    <input class="form-control" placeholder="Link" type="text" name="link" id="link">
				                </div>
				            </div>
				            <div class="form-group mb-3">
				                <div class="input-group input-group-alternative">
				                    <div class="input-group-prepend">
				                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
				                    </div>
				                    <input class="form-control" placeholder="Account Login ID" type="text" name="login_id" id="login_id" required="">
				                </div>
				            </div>
				            <div class="form-group">
				                <div class="input-group input-group-alternative">
				                    <div class="input-group-prepend">
				                        <span class="input-group-text"><i class="ni ni-key-25"></i></span>
				                    </div>
				                    <input class="form-control" placeholder="Account Login Password" type="text" name="login_password" id="new_login_password" required=""> 
				                    <button type="button" class="btn btn-sm random"  name="random" id="random">Generate</button>
				                </div> 
				            </div>
				            <div class="form-group mb-3">
				                <div class="input-group input-group-alternative">
				                    <div class="input-group-prepend">
				                        <span class="input-group-text"><i class="ni ni-support-16"></i></span>
				                    </div>
				                    <input class="form-control" placeholder="Additional Info" type="text" name="comment" id="comment" required="">
				                </div>
				            </div>
				            <div class="text-center">
				                <button type="submit" class="btn my-4">Add Account</button>
				            </div>
				        </form>
				    </div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@push('js')
<script>
 $("#random").click(function(event) { 
	var length = 8,
    charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@#$%^&*!",
    retVal = "";
for (var i = 0, n = charset.length; i < length; ++i) {
    retVal += charset.charAt(Math.floor(Math.random() * n));
    }
$('#new_login_password').val(retVal);
}); 

</script>
	
@endpush