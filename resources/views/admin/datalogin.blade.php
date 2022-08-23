@extends("admin.index")
@section("content")
<table class="table table-hover">
    <thead>
      <tr>
        <th>NO</th>
        <th>NAMA TPS</th>
        <th>TEMPAT TPS</th>
        <th>AKSI</th>
      </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->namatps }}</td>
            <td>{{ $user->tmp_tps }}</td>
            <td>
                <a href="{{ url('/admin/tps/1') }}" class="btn btn-primary">Lihat</a>
                <a href="{{ url('/admin/tps/1/edit') }}" class="btn btn-warning">Edit</a>
                <a href="{{ url('/admin/tps/1/delete') }}" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<button class="btn btn-primary">
    <i class="bi bi-plus-circle"></i>
</button>
<div class="d-flex justify-content-center">
    {{ $users->links() }}
</div>
@endsection
