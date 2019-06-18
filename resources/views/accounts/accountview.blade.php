@extends('layouts.layouts')

@push('css')
<style>
    
    .nav-link{
        font-weight: bolder;
    }
    
</style>
@endpush

@section('title','Secupass')

@section('content')
    <div class="container-fluid mt--7">
      <div class="row">
    <div class="col-xl-12 order-xl-0">
      
      <div class="card bg-secondary shadow pull-up">
        <div class="card-body">
          <h6 class="heading text-center mb-4">Account information</h6>
          <div class="pl-lg-4">
            @if (\Session::has('success'))
                    <div class="alert alert-dark text-center">
                      <ul>
                        <li >{!! \Session::get('success') !!}</li>
                      </ul>
                    </div>
                  @endif
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3">
                      <label class="form-control-label" for="link">URL / Link</label>
                    </div>
                    <div class="col-md-6">
                    <input type="text" id="link" name="link" class="form-control form-control-alternative" value="{{$account['link']}}" readonly="">
                    </div>
                    <div class="col-md-1">
                      <a href="http://{{$account['link']}}" target="_blank" class="btn btn-warning btn-sm" >Open</a>
                    </div>
                    &nbsp;
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3">
                      <label class="form-control-label" for="login_id">Login ID</label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" id="login_id" name="login_id" class="form-control form-control-alternative" value="{{$account['login_id']}}" readonly="">
                    </div>
                    <div class="col-md-2">
                      <button type="button" class="btn" name="btn" id="btn" onclick="copyLogin()" data-container="body" data-toggle="popover" data-placement="top" data-content="Copied!">Copy</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3">
                      <label class="form-control-label" for="login_password">Login Password</label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" id="login_password" name="login_password" class="form-control form-control-alternative" value="{{$account['login_password']}}" readonly="">
                    </div>
                    <div class="col-md-2">
                      <button type="button" class="btn" name="btn" id="btn1" onclick="copyPassword()" data-container="body" data-toggle="popover" data-placement="top" data-content="Copied!">Copy</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3">
                      <label class="form-control-label" for="additional_info">Additional Info</label>
                    </div>
                    <div class="col-md-9">
                      <textarea type="text" id="additional_info" name="additional_info" class="form-control form-control-alternative" placeholder="No Addtional Info Available" readonly="">{{$account['comment']}}</textarea>
                    </div>
                  </div>
                </div>
              </div>
                          </div>
          </div>
          <div class="pl-lg-4">
            <div class="row">
              <div class="col-lg-6">
                <div class="text-center">
                  <button type="button" class="btn btn-primary my-4" data-toggle="modal" data-target="#edit-account">Edit Account</button>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="text-center">
                  <button type="submit" class="btn btn-danger my-4" data-toggle="modal" data-target="#delete-account">Delete Account</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 mb-5 mb-xl-1">
  
</div> 
 </div>
  </div>
<!-- Add New Account Modal -->
<div class="modal fade" id="edit-account" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
    	<div class="modal-content">
        	<div class="modal-body p-2">
				<div class="card bg-secondary shadow border-0">
				    <div class="card-body px-lg-5 py-lg-5">
				        <div class="text-center mb-5">
				            <b>Edit Account {{$account['title']}}</b>
                </div>
                    <form role="form" method="POST" action="/accounts/{{ $account->account_id }}">
                            @method('PATCH')
                            @csrf	
                            <div class="form-group mb-3">
				                <div class="input-group input-group-alternative">
				                    <div class="input-group-prepend">
				                        <span class="input-group-text"><i class="ni ni-bold"></i></span>
				                    </div>
				                    <input class="form-control" placeholder="Title" type="text" name="title" id="title" value="{{$account['title']}}" required="">
				                </div>
				            </div>
				            <div class="form-group mb-3">
				                <div class="input-group input-group-alternative">
				                    <div class="input-group-prepend">
				                        <span class="input-group-text"><i class="ni ni-book-bookmark"></i></span>
				                    </div>
				                    <input class="form-control" placeholder="Link" type="text" name="link" id="link" value="{{$account['link']}}">
				                </div>
				            </div>
				            <div class="form-group mb-3">
				                <div class="input-group input-group-alternative">
				                    <div class="input-group-prepend">
				                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
				                    </div>
				                    <input class="form-control" placeholder="Account Login ID" type="text" name="login_id" id="login_id" value="{{$account['login_id']}}" required="">
				                </div>
				            </div>
				            <div class="form-group">
				                <div class="input-group input-group-alternative">
				                    <div class="input-group-prepend">
				                        <span class="input-group-text"><i class="ni ni-key-25"></i></span>
				                    </div>
				                    <input class="form-control" placeholder="Account Login Password" type="text" name="login_password" id="new_login_password" value="{{$account['login_password']}}" required="">
				                    <button type="button" class="btn  btn-sm random" name="random" id="random">Generate</button>
				                </div>
				            </div>
				            <div class="form-group mb-3">
				                <div class="input-group input-group-alternative">
				                    <div class="input-group-prepend">
				                        <span class="input-group-text"><i class="ni ni-support-16"></i></span>
				                    </div>
				                    <input class="form-control" placeholder="Additional Info" type="text" name="comment" id="comment" value="{{$account['comment']}}">
				                </div>
				            </div>
				            <div class="text-center">
				                <button type="submit" class="btn btn-primary my-4">{{__('Update Account')}}</button>
				            </div>
				        </form>
				    </div>
				</div>
			</div>
		</div>
	</div>
</div><div class="modal fade" id="delete-account" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
        <div class="modal-content" >
            <div class="modal-header">
            <h3 class="modal-title" id="modal-title-notification">Warning! Attempting to delete:{{$account['title']}}</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="py-3 text-center">
                    <i class="ni ni-bell-55 ni-3x"></i>
                    <h2 class="heading mt-4">Are your sure you want to do this ?</h2>
                    <p>All content related to this account will be deleted permanantly. This action cannot be reversed.</p>
                </div>
            </div>
            <div class="modal-footer">
            <form  method="POST" action="/accounts/{{ $account->account_id }}">
              @method('DELETE')      
              @csrf
                    
            		<input type="hidden" name="id" value="{{$account['account_id']}}">
                	<button type="submit" class="btn btn-white">Ok, Delete it</button>
                </form>
                <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button> 
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>  
 function copyLogin() {
  var copyText = document.getElementById("login_id");
  copyText.select();
  document.execCommand("copy");
}
 function copyPassword() {
  var copyText = document.getElementById("login_password");
  copyText.select();
  document.execCommand("copy");

}
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
@if($errors->any())

<script>

$( document ).ready(function() {
   $('#edit-account').modal('show');
});
</script>

@endif
@endpush