@extends("admin.index")
@section('content')
@parent
<!-- Donut Chart -->


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="col-md-12">
                    <a href="/tps">
                        <button type="button" class="btn btn-outline-danger">
                            <i class="bi bi-arrow-left-circle"> Kembali</i>
                        </button>
                    </a>
                    @foreach ($tps as $tp)
                        <h3>Laporan Data {{ $tp->namatps }}</h3>
                        <h4>di lokasi {{ $tp->tmp_tps }} yang dikelola/diketuai oleh Pak {{ $tp->kt_anggota }}</h4>
                    @endforeach
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                            <div class="card border-danger mb-3 " style="max-width: 20rem;">
                                <div class="card-header"><center><h1>JUMLAH</h1></center></div>
                                <div class="card-body text-danger">
                                    <h1 class="card-title">
                                        <center>
                                            {{ $jumlah_suara }}
                                        </center>
                                    </h1>
                                    <h3 class="card-text">
                                        <center>
                                            SUARA
                                        </center>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                            <div class="card border-danger mb-3 " style="max-width: 20rem;">
                                <div class="card-header"><center><h1>SUARA 1</h1></center></div>
                                <div class="card-body text-danger">
                                  <h1 class="card-title">
                                    <center>
                                        {{ $suara1 }}
                                    </center>
                                    </h1>
                                  <h3 class="card-text"><center>SUARA</center></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                            <div class="card border-danger mb-3 " style="max-width: 20rem;">
                                <div class="card-header"><center><h1>SUARA 2</h1></center></div>
                                <div class="card-body text-danger">
                                  <h1 class="card-title">
                                    <center>
                                        {{ $suara2 }}
                                    </center>
                                    </h1>
                                  <h3 class="card-text"><center>SUARA</center></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                            <div class="card border-danger mb-3 " style="max-width: 20rem;">
                                <div class="card-header"><center><h1>SUARA</h1></center></div>
                                <div class="card-body text-danger">
                                  <h1 class="card-title">
                                    <center>
                                        {{ $suara3 }}
                                    </center>
                                    </h1>
                                  <h3 class="card-text"><center>TIDAK SAH</center></h3>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>


    <div class="grafik"style="width: 30%">
        <canvas id="inicanvas"></canvas>
    </div>

    <script>

        // var ctx = document.getElementById("inicanvas").getContext("2d");
        // // tampilan chart
        // var piechart = new Chart(ctx,{type: 'pie',
        //   data : {
        // // label nama setiap Value
        // labels:[
        //     <?php
        //     while($row = mysqli_fetch_array($jns_suara)){
        //         echo '"' . $row['jns_suara'] . '",';
        //     }
        //     ?>
        //   ],
        // datasets: [{
        //   // Jumlah Value yang ditampilkan
        //    data:[
        //     <?php
        //     while($row = mysqli_fetch_array($isi)){
        //         echo '"' . $row['isi'] . '",';
        //     }
        //     ?>
        //     ],

        //   backgroundColor:[
        //          'rgba(24, 220, 110, 0.5)',
        //          'rgba(111, 80, 10, 0.5)',
        //          'rgba(11, 120, 170, 0.5)',
        //          'rgba(55, 20, 50, 1)',
        //          'rgba(99, 230, 90, 0.5)'
        //          ]
        // }],
        // }
        // });

    </script>
@stop
