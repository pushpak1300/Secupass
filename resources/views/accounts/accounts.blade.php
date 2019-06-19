@extends('layouts.layouts') @push('css') <style>
  .nav-link {
    font-weight: bolder;
  }
</style> @endpush @section('title','Accounts') @section('content') <div class="container-fluid mt--6">
  <div class="row">
    <div class="col-xl-12 mb-8 mb-xl-0">
      <div class="row"> @foreach ($accounts as $account) <div class="col-md-6" style="margin-bottom: 25px">
          <div class="card-dec">
            <div class="card bg-secondary border-primary shadow">
              <div class="card-body">
                <h3>{{$account->title}}
                </h3>
              </div>
              <div class="card-footer">
                <div class="row justify-content-md-center">
                  <button class="btn btn-primary" data-toggle="modal" data-target="#modal-view{{$account->account_id}}">Quick View</button>
                  <a href="/accounts/{{$account->account_id}}" class="btn btn-primary ">Account Details</a>
                </div>
              </div>
            </div>
          </div>
        </div> @endforeach </div>
    </div>
  </div>
</div> @foreach ($accounts as $account) <div class="modal fade" id="modal-view{{$account->account_id}}" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered " role="document">
    <div class="modal-content bg-secondary shadow">
      <div class="modal-header">
        <h3 class="modal-title" id="modal-title-default">{{$account->title}}
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
      </div>
      <div class="modal-body">
        <h4>
          <div class="row">
            <div class="col-md-4 pull-text-right">{{__('Link')}}</div>
            <div class="col-md-8">
              <a href="http://{{$account->link}}" target="_blank">{{$account->link}}</a>
            </div>
          </div>
        </h4>
        <hr>
        <h4>
          <div class="row">
            <div class="col-md-4">{{__('Login ID')}}</div>
            <div class="col-md-8">
              <span id="login">{{$account->login_id}}</span>
            </div>
          </div>
        </h4>
        <hr>
        <h4>
          <div class="row">
            <div class="col-md-4">Login Password </div>
            <div class="col-md-8">
              <span id="password">{{$account->login_password}}</span>
            </div>
          </div>
        </h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> @endforeach @endsection