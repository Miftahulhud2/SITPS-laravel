@extends("tps.tps")
@section('content')

<form method="POST" action="/registrasi">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <h5 class="card-title">Registrasi</h5>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" placeholder="Nama lengkap" value="{{ old('nama') }}">
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>NIK</label>
                                <input type="number" class="form-control @error('nik') is-invalid @enderror" name="nik" placeholder="NIK" value="{{ old('nik') }}">
                                @error('nik')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>




                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tempat lahir</label>
                                <input type="text" class="form-control @error('tmp_lahir') is-invalid @enderror" name="tmp_lahir" placeholder="Tempat lahir" value="{{ old('tmp_lahir') }}">
                                @error('tmp_lahir')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" name="tgl_lahir" placeholder="Tanggal lahir" value="{{ old('tgl_lahir') }}">
                                @error('tgl_lahir')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>




                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Umur</label>
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control @error('umur') is-invalid @enderror" name="umur" placeholder="Umur" value="{{ old('umur') }}">
                                    @error('umur')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                              </div>
                        </div>
                    </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Status Perkawinan</label>
                                <div class="input-group mb-3">
                                    <select class="form-select  @error('sts_kawin') is-invalid @enderror" name="sts_kawin" placeholder="Status perkawinan" value="{{ old('sts_kawin') }}">
                                        <option selected value="Menikah">Menikah</option>
                                        <option value="Belum Menikah">Belum Menikah</option>
                                    </select>
                                    @error('sts_kawin')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                              </div>
                        </div>
                    </div>

                <div class="col-md-6">
                    <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <div class="input-group mb-3">
                                <select class="form-select  @error('jns_kelamin') is-invalid @enderror" name="jns_kelamin" placeholder="Status perkawinan" value="{{ old('jns_kelamin') }}">
                                    <option selected value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                @error('jns_kelamin')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                          </div>
                    </div>
                </div>

                <div class="col-md-6">
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" placeholder="alamat" value="{{ old('alamat') }}">
                                @error('alamat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                </div>
                <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" id="tps_id" name="tps_id" class="form-control" placeholder="{{ auth()->user()->tps->id }}" value="{{ auth()->user()->tps->id }}" readonly>
                            </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-6">
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Simpan" id="tryMe">
                            </div>
                        </div>
                </div>







</form>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js" ></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
    @if (session('success'))
        toastr.success('{{ session('success') }}')
    @endif
</script>
@endsection
