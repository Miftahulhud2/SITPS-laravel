@extends('admin.index')
@section('content')
<?php
$koneksi    = mysqli_connect("localhost", "root", "", "sitps");
$suara1     = mysqli_query($koneksi, "SELECT sum(suara_1) FROM suaras");
$suara2     = mysqli_query($koneksi, "SELECT sum(suara_2) FROM suaras");
$suara3     = mysqli_query($koneksi, "SELECT sum(suara_tdk_sah) FROM suaras");

?>

<div>
    <div class="tab-content tab-transparent-content">
        <div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
          <div class="row">
                <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card border-danger mb-3 " style="max-width: 20rem;">
                            <div class="card-header"><center><h1>TPS</h1></center></div>
                            <div class="card-body text-danger">
                              <h1 class="card-title"><center>{{ $tpss }}</center></h1>
                              <h3 class="card-text"><center>TERSEDIA</center></h3>
                            </div>
                        </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card border-danger mb-3 " style="max-width: 20rem;">
                            {{-- <div class="card-header"><center><h1>SUARA</h1></center></div> --}}
                            <div class="card-body text-danger">


                                {{-- <div class="grafik">
                                    <canvas id="doughnutchart" width="10" height="10"></canvas>
                                </div> --}}

                                <canvas id="doughnutchart" ></canvas>
                              {{-- <h1 class="card-title"><center>{{ $suara }}</center></h1> --}}
                              {{-- <h3 class="card-text"><center>JUMLAH</center></h3> --}}
                            </div>
                        </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card border-danger mb-3 " style="max-width: 20rem;">
                            <div class="card-header"><center><h1>SUARA</h1></center></div>
                            <div class="card-body text-danger">
                              <h1 class="card-title"><center>{{ $suara_tdk_sah }}</center></h1>
                              <h3 class="card-text"><center>TIDAK SAH</center></h3>
                            </div>
                        </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card border-danger mb-3 " style="max-width: 20rem;">
                            <div class="card-header"><center><h1>PENCOBLOS</h1></center></div>
                            <div class="card-body text-danger">
                              <h1 class="card-title"><center>{{ $pencoblos }}</center></h1>
                              <h3 class="card-text"><center>ORANG</center></h3>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
&nbsp;
<div class="card">
    <h2>SELAMAT DATANG DI admin</h2>
</div>
<div class="container">
    <canvas id="doughnutchart" width="100" height="100"></canvas>
</div>
@endsection


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Chartjs, PHP dan MySQL Demo Grafik Lingkaran (Doughnut)</title>
    <script src="js/Chart.js"></script>
    <style type="text/css">
            .grafik {
                width: 40%;
                margin: 15px auto;
            }
    </style>
  </head>
  <body>

    {{-- <div class="grafik">
        <canvas id="doughnutchart" width="100" height="100"></canvas>
    </div> --}}
    <canvas id="doughnutchart" ></canvas>

  </body>
</html>


<!-- JavaScript -->
<script  type="text/javascript">
    var ctx = document.getElementById("doughnutchart").getContext("2d");
    var data = {
              labels: [
                  'SUARA 1',
                  'SUARA 2',
                  'SUARA TIDAK SAH',
              ],
              datasets: [
              {
                label: "Pemilu",
                data: [
                    <?php echo mysqli_fetch_array($suara1)[0]?>,
                    <?php echo mysqli_fetch_array($suara2)[0]?>,
                    <?php echo mysqli_fetch_array($suara3)[0]?>,
                    ],
                backgroundColor: [
                  '#29B0D0',
                  '#2A516E',
                  '#F07124',
                  '#CBE0E3',
                  '#979193'
                ]
              }
            ]


            };

    var mydoughnutchart = new Chart(ctx, {
                    type: 'doughnut',
                    data: data,
                    options: {
                      responsive: true
                  }
                });

</script>
<script src="js/beranda.js"></script>

