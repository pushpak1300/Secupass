@extends('layouts.layouts')

@push('css')
<style>
    
    .nav-link{
        font-weight: bolder;
    }
</style>
@endpush

@section('title','Accounts')

@section('content')
<div class="container-fluid mt--7">
 <div class="row mt-5">
   <div class="col-xl-7 mb-7 mb-xl-0">
    <div class="card shadow pull-up">
      <div class="card-header border-0">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="mb-0">Quick Notes</h3>
          </div>
        </div>
      </div> 
      <div>
        <div class="card-body bg-secondary">
          <ul class="todo-list ui-sortable">
            </ul>
          </div>
           <div class="card-footer">
             <div class="form-group">
               <input type="text" id="content" name="content" required="required" placeholder="Write a note &amp; press enter to save" class="form-control form-control">
              </div>
            </div>
          </div>
        </div>
      </div>
 <div class="col-xl-4">
  <div class="card bg-secondary card-stats mb-4 mb-xl-0 pull-up">
    <div class="card-body">
      <div class="row">
        <div class="col">
          <h5 class="card-title text-uppercase text-muted mb-0">Server Clock</h5>
          <span class="h2 font-weight-bold mb-0"><span text-size="17" id="clock"></span></span>
        </div>
        <div class="col-auto">
          <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
            <i class="fas fa-clock"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br/>
  <div class="card bg-secondary card-stats mb-4 mb-xl-0 pull-up">
    <div class="card-body">
      <div class="row">
        <div class="col">
          <h5 class="card-title text-uppercase text-muted mb-0">Last Login IP</h5>
        <span class="h4 font-weight-bold mb-0"><a style="color:black" target="_blank" href="http://whatismyipaddress.com/ip/{{request()->ip()}}">{{ request()->ip()}}</a></span>
        </div>
        <div class="col-auto">
          <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
            <i class="fas fa-server"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br/>
</div> 
</div>
</div>
@endsection

@push('js')
<script type="text/javascript">
    function startTime() {
        var today=new Date(),
        curr_hour=today.getHours(),
        curr_min=today.getMinutes(),
        curr_sec=today.getSeconds();
        curr_hour=checkTime(curr_hour);
        curr_min=checkTime(curr_min);
        curr_sec=checkTime(curr_sec);
        document.getElementById('clock').innerHTML=curr_hour+":"+curr_min+":"+curr_sec;
    }
    function checkTime(i) {
        if (i<10) {
            i="0" + i;
        }
        return i;
    }
    setInterval(startTime, 500);
</script>
    
@endpush