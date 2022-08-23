@extends("tps.tps")
@section('content')
@parent
<form action="report" enctype="multipart/form-data" method="POST">
    @csrf
    <div class="CARD" style="padding: 20px 20px 20px 20px">

        <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Laporan {{ $tps->namatps }}</h5>
                </div>
                <div class="container text-center">
                    <div class="row row-cols-2">
                        <div class="col"><img src="{{ asset('img/jokowi.png') }}" width="120px" height="120px">
                        <h5>NAMA CAPRES CAWAPRES</h5>
                        </div>
                      <div class="col">
                        <img src="{{ asset('img/prabowo.png') }}" width="200px" height="120px">
                        <h5>NAMA CAPRES CAWAPRES</h5>
                      </div>
                      <div class="col">
                        <input type="number" id="suara_1" name="suara_1" class="form-control @error('suara_1') is-invalid @enderror" placeholder="Suara 1" value="{{ old('suara_1') }}">

                        @error('suara_1')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                      <div class="col">
                        <input type="number" id="suara_2" name="suara_2" class="form-control @error('suara_2') is-invalid @enderror" placeholder="Suara 2" value="{{ old('suara_2') }}">

                        @error('suara_2')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                    </div>
                    <div class="mb-3">
                        <input type="number" id="suara_tdk_sah " name="suara_tdk_sah " class="form-control @error('suara_tdk_sah ') is-invalid @enderror" placeholder="Suara Tidak Sah" value="{{ old('suara_tdk_sah ') }}">

                        @error('suara_tdk_sah ')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <img class="img-preview img-fluid mg-1 col-sm-1">
                        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image" placeholder="Image" value="{{ old('image') }}" onchange="previewImage()">

                        @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <input type="text" id="tps_id" name="tps_id" class="form-control" placeholder="{{ auth()->user()->tps->id }}" value="{{ auth()->user()->tps->id }}" readonly>
                    </div>
                      <div class="mb-3">
                        <input type="submit" class="btn btn-primary" value="Simpan" id="tryMe">
                      </div>
                  </div>
            </div>
        </div>
    </div>
</form>
<script>
    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');
        imgPreview.style.display = 'block';
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        };
    };
</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js" ></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
    @if (session('success'))
        toastr.success('{{ session('success') }}')
    @endif
</script>
@stop
