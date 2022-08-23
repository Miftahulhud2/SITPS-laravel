@extends("tps.tps")
@section('content')
    @parent
    <!-- Topbar Search -->


    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="card-title">Absensi Peserta</h4>
                    <p class="card-description"> Absensi peserta sebelum memberikan suara</p>
                </div>
                <div class="col-md-6">
                    <form action="/event" >
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
            </div>


        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">AKSI</th>
                <th>ABSENSI</th>
                <th>NAMA</th>
                <th>NIK</th>
                <th>TEMPAT LAHIR</th>
                <th>TANGGAL LAHIR</th>
                <th>UMUR</th>
                <th>STATUS PERKAWINAN</th>
                <th>JENIS KELAMIN</th>
                <th>ALAMAT</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($tps as $peserta)
                <form action="/event" method="POST">
                    @csrf

                    <tr>
                        <td>

                        </td>
                        <td>
                            @if ($peserta->hadir == 0)
                            <button class="btn btn-outline-danger" id="id" name='id'value="{{ $peserta->id }}">BELUM HADIR
                            </button>
                            @else
                                <button class="btn btn-danger btn-lg" id="id" name='id'value="{{ $peserta->id }}">HADIR
                                </button>

                            @endif
                        <td>
                            {{ $peserta->nama }}
                        </td>
                        <td>
                            {{ $peserta->nik }}
                        </td>
                        <td>
                            {{ $peserta->tmp_lahir }}
                        </td>
                        <td>
                            {{ $peserta->tgl_lahir}}
                        </td>
                        <td>
                            {{ $peserta->umur }}
                        </td>
                        <td>
                            {{ $peserta->sts_kawin }}
                        </td>
                        <td>
                            {{ $peserta->jns_kelamin }}
                        </td>
                        <td>
                            {{ $peserta->alamat }}
                        </td>
                    </tr>
                </form>
                @endforeach
            </tbody>
        </table>

        {{-- <div class="d-flex justify-content-center">
            {{ $tps->links() }}
        </div> --}}
        </div>
      </div>
    </div>

@stop
