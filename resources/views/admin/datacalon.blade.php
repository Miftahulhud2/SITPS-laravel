@extends('admin.index')
@section('content')
<form action="datacalon" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="CARD" style="padding: 20px 20px 20px 20px">
        <div class="container px-4 text-center">
            <div class="row gx-5">
              <div class="col">
               <div class="p-3 border bg-light">
                <h5>NAMA CALON 1</h5>
                        <img class="img-preview1 img-fluid mg-2 col-sm-4">
                        <input type="file" class="form-control @error('foto1') is-invalid @enderror" name="foto1" id="foto1" placeholder="Image" value="{{ old('foto1') }}" onchange="previewImage1()">

                        <label for="">KETUA</label>
                        <input type="text" class="form-control" placeholder="NAMA CALON" name="nm_calon1" id="nm_calon1">
                        <label for="">WAKIL/PENDAMPING</label>
                        <input type="text" class="form-control" placeholder="NAMA WAKIL CALON" name="nm_w_calon1" id="nm_w_calon1">
               </div>
              </div>


              <div class="col">
                <div class="p-3 border bg-light">
                    <h5>NAMA CALON 2</h5>
                        <img class="img-preview2 img-fluid mg-2 col-sm-4">
                        <input type="file" class="form-control @error('foto2') is-invalid @enderror" name="foto2" id="foto2" placeholder="Image" value="{{ old('foto2') }}" onchange="previewImage2()">


                        <label for="">KETUA</label>
                        <input type="text" class="form-control" placeholder="NAMA CALON" name="nm_calon2" id="nm_calon2">
                        <label for="">WAKIL/PENDAMPING</label>
                        <input type="text" class="form-control" placeholder="NAMA WAKIL CALON" name="nm_w_calon2" id="nm_w_calon2">
                    </div>
                </div>
                <div>
                    <center>
                        <button type="submit" class="btn btn-primary" id="tryMe">Simpan</button>
                    </center>
                </div>
            </div>
          </div>

</form>
<script>
    function previewImage1() {
        const image1 = document.querySelector('#foto1');
        const imgPreview1 = document.querySelector('.img-preview1');
        imgPreview1.style.display = 'block';
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image1.files[0]);
        oFReader.onload = function(oFREvent) {
            imgPreview1.src = oFREvent.target.result;
        };
    };
</script>
<script>
    function previewImage2() {
        const image2 = document.querySelector('#foto2');
        const imgPreview = document.querySelector('.img-preview2');
        imgPreview.style.display = 'block';
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image2.files[0]);
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
@endsection
