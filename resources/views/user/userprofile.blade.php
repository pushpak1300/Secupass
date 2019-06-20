@extends('layouts.userlayouts') @push('css') <style>
  .nav-link {
    font-weight: bolder;
  }
</style> @endpush @section('content') <div class="header bg-dark pb-8 pt-5 pt-md-8">
  <!-- Header container -->
  <div class="container-fluid d-flex align-items-center">
    <div class="row">
      <div class="col-lg-11 col-md-11">
        <h1 class="display-3 text-white">{{__('Hello ') }}{{$user->username}}</h1>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid mt--7">
  <div class="row">
    <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
      <div class="card card-profile shadow pull-up">
        <div class="row justify-content-center">
          <div class="col-lg-3 order-lg-2">
          </div>
        </div>
        <div class="card-body pt-0 pt-md-4">
          <div class="row">
            <div class="col">
              <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                <div>
                  <span class="heading">{{$accounts->count()}}</span>
                  <span class="description">Accounts</span>
                </div>
                <div>
                  <span class="heading">{{$user->tasks->count()}}</span>
                  <span class="description">Notes</span>
                </div>
                <div>
                  <span class="heading">{{$user->membership==0?'Free':'Premium'}}</span>
                  <span class="description">Membership</span>
                </div>
              </div>
            </div>
          </div>
          <div class="text-center">
            {{-- <button type="button" class="btn btn-warning btn-block" data-toggle="modal" data-target="#change-password">Change Password</button> --}}
            <a href="" class="btn btn-default btn-block disabled">View IP Logs</a>
            {{-- <hr class="my-4" /> --}}
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
              <button class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="Email Address Verified">Verified</button>
            </div>
          </div>
        </div>
        <div class="card-body">
          <form role="form" method="POST" action="/User/{{$user->id}}"> @method('PATCH') @csrf <h6 class="heading-small mb-4">User information</h6>
            <div class="pl-lg-4"> @if (\Session::has('success')) <div class="alert alert-dark ">
                <ul>
                  <li>{!! \Session::get('success') !!}</li>
                </ul>
              </div> @endif <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-username">Username</label>
                    <input type="text" id="username" name="username" class="form-control form-control-alternative" value="{{$user->username}}" required>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Email address</label>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="text-center">
                      <button type="submit" class="btn btn-warning text-center my-4">Update profile</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div> @endsection