@extends('admin.index')
@section('content')
<div class="row">
    @foreach ($tpss as $tps)
        <div class="col-md-3">
            <a href="/tps/{{ $tps->slug }}" style="text-decoration: none;">
                <div class="cards">
                    <div class="card text-bg-danger mb-3" style="max-width: 18rem;">
                        <div class="card-header">{{ $tps->namatps }}</div>
                        <div class="card-body">
                        <h5 class="card-title">{{ $tps->tmp_tps }}</h5>
                        <p class="card-text">dengan Ketua Panitia oleh {{ $tps->kt_anggota }}</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
</div>
<div class="d-flex justify-content-center">
    {{ $tpss->links() }}
</div>
@endsection
