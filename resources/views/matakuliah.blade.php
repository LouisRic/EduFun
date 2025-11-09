@extends('layout.master')
@section('title', $matakuliah->category)

@section('content')
<h1>{{ $matakuliah->category }}</h1>

<div class="card mb-3 d-flex" style="border: none; gap: 2rem;">
  <img src="{{ $matakuliah->imgurl }}" class="card-img-top" style="min-height: 300px" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{ $matakuliah->name }}</h5>
    <p class="card-text"><small class="text-body-secondary">{{ \Carbon\Carbon::parse($matakuliah->publishdate)->format('D M Y') }} | by : {{ $matakuliah->writer->name }}</small></p>
    <p class="card-text">{{ $matakuliah->description }}</p>
  </div>
</div>

</div>
@endsection
