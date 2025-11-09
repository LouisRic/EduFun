@extends('layout.master')
@section('title', $category)
@section('category', 'active')

@section('content')

@if ($isMatakuliah)
    <h1 class="py-3">{{ $category }}</h1>
@else
    <div class="card mb-3" style="max-width: 540px; border: none;">
        <div class="row g-0">
            <div class="col-md-4 d-flex justify-content-center align-items-center">
                <img src="{{ $writer->imgurl }}" class="img-fluid rounded-circle" alt="..." style="width: 120px; height: 120px; object-fit: cover;">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $writer->name }}</h5>
                    <p class="card-text">{{ $writer->description }}</p>
                </div>
            </div>
        </div>
    </div>
@endif

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
              <a class="btn btn-primary" href="{{ route('matakuliah.detail', $mk->id) }}" role="button">Read more ...</a>
            </div>
        </div>
        </div>
    </div>
    </div>

@endforeach

@endsection