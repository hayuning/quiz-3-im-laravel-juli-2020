@extends('layouts.master')
@section('content')
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Buat proyek Baru</h3>
            </div>
            
            <form role="form" action="/proyek" method="POST">
            @csrf
              <div class="card-body">
                <div class="form-group"> <!--judul, isi, tgl dibuat, tgl diperbarui, profil id-->
                  <label for="judul">Nama proyek</label>
                  <input type="text" class="form-control" name="judul" id="judul" value="{{ old('judul') }}" maxlength="100" required>
                    @error('judul')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                <div class="form-group">
                    <label for="nama">Deskripsi proyek</label>
                    <textarea class="form-control" rows="3" value="{{ old('isi'),'' }}" id="isi" name="isi"></textarea>
                </div>
                <div class="form-group">
                    <label for="nama">Tanggal dimulai</label>
                    
                    <input type="text" name="tgl_dibuat" id="tgl_dibuat" class="form-control form-control-sm" placeholder="(yyyy-mm-dd)">
                </div>
                <div class="form-group">
                    <label for="nama">Tanggal deadline</label>
                    <input type="text" class="form-control" name="tgl_diperbarui" id="tgl_diperbarui" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                </div>
             
              </div>
              <!-- /.box-body -->

              <div class="box-footer" >
                <button type="submit" class="btn btn-primary">Simpan ya</button>
              </div>
            </form>

@endsection
