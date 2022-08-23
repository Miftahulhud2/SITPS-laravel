<html>
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css') }}" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/charts.js') }}"></script>
    <script src="../Chart.bundle.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/Chart.js"></script>
    <style type="text/css">
            .grafik {
                width: 40%;
                margin: 15px auto;
            }
    </style>
    <style>
    canvas {
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
    }
    </style>

    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

</head>
<body>
    <div class="header">

        <div class="logout">
            <div class="dropdown">
                <button class="dropbtn">{{ auth()->user()->name }}</button>
                <div class="dropdown-content">
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" >Log out</button>
                    </form>
                </div>
            </div>
        </div>
        <h2>Aplikasi Tempat Pemungutan Suara</h2>


        {{-- <left>
            <button class="btn btn-outline-secondary">
                <i class="bi bi-box-arrow-right fa-2x"></i>
            </button>
        </left> --}}


        <div class="btn-group" >
            <a href="{{ url('dashboard') }}"><button class="button">DASHBOARD</button></a>
            <a href="{{ url('tps') }}"><button class="button">TPS</button></a>
            <a href="{{ url('datacalon') }}"><button class="button">DATA CALON</button></a>
            <a href="{{ url('datalogin') }}"><button class="button">DATA LOGIN</button></a>
        </div>

        <div class="isi">
            @yield('content')
        </div>
    </div>

</body>
</html>
