@extends('layout.master')
@section('title', 'home')
@section('home', 'active')

@section('content')
<div class="container text-center">
  <div class="row">
    <div class="col">
      <img src="..." class="img-fluid" style="max-width: 100%; min-height:200px;" alt="...">
    </div>
  </div>
</div>

@foreach ($matakuliah as $mk)

    <div class="card mb-3" style="max-width: 100%; margin : 20px">
    <div class="row g-0">
        <div class="col-md-4">
        <img src="{{ $mk->imgurl }}" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
        <div class="card-body">
            <h5 class="card-title">{{ $mk->name }}</h5>
            <p class="card-text"><small class="text-body-secondary">{{ \Carbon\Carbon::parse($mk->publishdate)->format('D M Y') }} | by : {{ $mk->writer->name }}</small></p>
            <p class="card-text">{{ $mk->description }}</p>
            <div class="d-flex justify-content-end">
              <a class="btn btn-primary" href="#" role="button">Read more ...</a>
            </div>
        </div>
        </div>
    </div>
    </div>

@endforeach
@endsection