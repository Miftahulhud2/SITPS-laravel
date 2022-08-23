@extends('tps.tps')
@section('content')
@parent
<div class="tab-content tab-transparent-content">
    <div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
      <div class="row">
        <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
            <div class="card border-danger mb-3 " style="max-width: 20rem;">
                <div class="card-header"><center><h1>TPS</h1></center></div>
                <div class="card-body text-danger">
                  <h1 class="card-title"><center>{{ auth()->user()->tps->namatps }}</center></h1>
                  <h3 class="card-text"><center>TERSEDIA</center></h3>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
            <div class="card border-danger mb-3 " style="max-width: 20rem;">
                <div class="card-header"><center><h1>HADIR</h1></center></div>
                <div class="card-body text-danger">
                    <h1 class="card-title"><center>{{ $hadir }}</center></h1>
                    <h3 class="card-text"><center>JUMLAH</center></h3>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
            <div class="card border-danger mb-3 " style="max-width: 20rem;">
                <div class="card-header"><center><h1>PENCOBLOS</h1></center></div>
                <div class="card-body text-danger">
                    <h1 class="card-title"><center>{{ $pencoblos }}</center></h1>
                    <h3 class="card-text"><center>JUMLAH</center></h3>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
            <div class="card border-danger mb-3 " style="max-width: 20rem;">
                <div class="card-header"><center><h1>LOKASI</h1></center></div>
                <div class="card-body text-danger">
                    <h1 class="card-title"><center>{{ auth()->user()->tps->tmp_tps }}</center></h1>

                </div>
            </div>
        </div>
    </div>
</div>
<center>
    <h1>SELAMAT DATANG di {{ auth()->user()->tps->namatps }}</h1>
</center>
</div>
@stop

