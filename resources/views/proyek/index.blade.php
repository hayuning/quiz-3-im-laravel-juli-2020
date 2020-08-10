@extends('layouts.master')
@section('content')
<div class="card">
      <div class="card-header">
        <h3 class="card-title">Data Proyek</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
      @if(session('success'))
        <div class="alert alert-success">
        {{ session('success')}}
        </div>
      @endif
      <a class="btn btn-primary mb-2" href="/proyek/create">Buat Proyek baru</a>
        <table id="list-proyek" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>No</th>
            <th>nama proyek</th>
            <th>Deskripsi</th>
            <th>Tanggal Mulai</th>
            <th>Tanggal Deadline</th>
            <th>Aksi</th>
          </tr>
          </thead>
          <tbody>
         @foreach($proyek as $key => $proyek)
         <tr>
            <td>{{$key+1}} </td>
            <td> {{$proyek->nama_proyek}}</td>
            <td> {{$proyek-deskripsi}}</td>
            <td>{{$proyek->tgl_mulai}}</td>
            <td>{{$proyek->tgl_deadline}}</td>
            <td> <a href="/proyek/{{$proyek->proyek_id}}" class="btn btn-info btn-sm">Show</a> </td>
          </tr>
         @endforeach
        </tbody>

        </table>
      </div>
      <!-- /.card-body -->
    </div>


@endsection

@push('scripts')
<script src="{{ asset('/sbadmin2/swal.min.js')}}"></script>
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush