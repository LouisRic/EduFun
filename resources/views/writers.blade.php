@extends('layout.master')
@section('title', 'Writers')
@section('writer', 'active')

@section('content')

<div class="d-flex justify-content-evenly py-5">
    @foreach($writer as $wt)
        <a href="{{ route('matakuliah.writer', $wt->id) }}" style="text-decoration: none;">
            <div class="card" style="width: 18rem; border-radius: 15px; text-align: center; border: none;">
                <img src="{{ $wt->imgurl }}" class="card-img-top rounded-circle mx-auto" alt="..." style="width: 120px; height: 120px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">{{ $wt->name }}</h5>
                    <p class="card-text">{{ $wt->description }}</p>
                </div>
            </div>
        </a>
    @endforeach
</div>

@endsection
