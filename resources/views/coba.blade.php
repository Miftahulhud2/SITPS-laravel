{{-- <!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website Coming Soon Page</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/coba.css') }}" />
  </head>
  <body>
    {{-- <section class="container">
      <img src="img/merah.jpg" alt="" class="image" />
      <header>Comming Soon Page</header>
      <p>
        Our website is under construction. We're working hard to improve our
        website and we'll ready to launch after.
      </p>
      <div class="time-content">
        <div class="time days">
          <span class="number"></span>
          <span class="text">days</span>
        </div>
        <div class="time hours">
          <span class="number"></span>
          <span class="text">hours</span>
        </div>
        <div class="time minutes">
          <span class="number"></span>
          <span class="text">minutes</span>
        </div>
        <div class="time seconds">
          <span class="number"></span>
          <span class="text">seconds</span>
        </div>
      </div>

      <div class="email-content">
        <p>Subscribe now to get the latest updates!</p>

        <div class="input-box">
          <input type="email" placeholder="Enter your email" />
          <button>Notify Me</button>
        </div>
      </div>
    </section>

    <!-- JavaScript -->
    <script src="js/script.js"></script> --}}
  {{-- </body>
</html> --}}

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/coba.css') }}" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap.min.css" rel="stylesheet" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet" />

</head>
<body>
    {{-- <div class="container">

        <div class="panel panel-primary">
          <div class="panel-heading"><h2>laravel 8 image upload example - Medikre.com.com</h2></div>
          <div class="panel-body">

            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
            </div>
            <img src="images/{{ Session::get('image') }}">
            @endif

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="coba" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-md-6">
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success">Upload</button>
                    </div>

                </div>
            </form>

          </div>
        </div>
    </div> --}}
    <h1>Toastr with FontAwesome Icons</h1>
        <ul class="icons-ul">
            <li><i class="icon-li icon-ok"></i>Embedded icon using the &lt;i&gt; tag</li>
            <li><i class="icon-li icon-ok"></i>Doesn't work with background-image</li>
            <li><i class="icon-li icon-ok"></i>We can use the :before psuedo class</li>
            <li><i class="icon-li icon-ok"></i>Works in IE8+, FireFox 21+, Chrome 26+, Safari 5.1+, most mobile browsers</li>
            <li><i class="icon-li icon-ok"></i>See <a href="http://caniuse.com/#search=before">CanIUse.com</a> for browser support</li>
        </ul>
        <button class="btn btn-primary" id="tryMe">Try Me</button>
        <div class="col-md-6">
            <form action="/coba">
                <div class="input-group">
                    <input type="text" name="search" value="{{ request('search') }}" class="form-control bg-light border-1 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">
                            <i class=""> cari</i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        {{-- @foreach ($coba as $cobas)
        <p>
            {{ $cobas->nama }}
        </p>
        @endforeach --}}

        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js" ></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

        <script src="{{ asset('js/script.js') }}"></script>
        <script>
            @if (session('success'))
                toastr.success('{{ session('success') }}')
            @endif
        </script>
</body>
</html>









{{-- <?php
$koneksi    = mysqli_connect("localhost", "root", "", "grafik");
$penjualan  = mysqli_query($koneksi, "SELECT penjualan FROM sales order by ID asc");
$merk       = mysqli_query($koneksi, "SELECT merk FROM sales order by ID asc");
?> --}}

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Chartjs, PHP dan MySQL Demo Grafik Lingkaran (Doughnut)</title>
    <script src="js/Chart.js"></script>
    <style type="text/css">
            .container {
                width: 20%;
                margin: 15px auto;
            }
    </style>
  </head>
  <body>

    <div class="container">
        <canvas id="doughnutchart" width="100" height="100"></canvas>
    </div>

  </body>
</html>

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
              label: "Penjualan Barang",
              data: [
                12,
                20,
                10,
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
