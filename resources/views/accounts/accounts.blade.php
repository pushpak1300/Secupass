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
<div class="row">
<div class="col-xl-12 mb-8 mb-xl-0">
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                
            <div class="card-body">
              <div class="chart">
                  <div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor">
                    <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                        <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                        </div>
                    </div>
                <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                    <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                </div>
            </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection