@extends('layouts.master')
@section('content')
<div class="card">
  <div class="card-header">
  </div>
  <div class="card-body">
    <h5 class="card-title">{{$proyek->nama_proyek}}</h5>
    <p class="card-text">{{$proyek->deskripsi_proyek}}</p>
    <p class="card-text">{{$proyek->tanggal_dimulai}}</p>
    <p class="card-text">{{$proyek->tanggal_deadline}}</p>
    <p class="card-text">{{$proyek->deskripsi_proyek}}</p>
    <a href="/pertanyaan" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

@endsection
