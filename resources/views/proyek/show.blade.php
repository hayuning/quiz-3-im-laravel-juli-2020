@extends('layouts.master')

@section('content')
<div class="mt-3 ml-3">
<h4>{{ $proyek->nama_proyek }}</h4>
<p> {{ $proyek->deskripsi }}</p>
</div>
@endsection