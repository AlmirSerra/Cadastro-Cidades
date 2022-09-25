@extends('layout.main')

@section('title', $cities->title)

@section('content')

  <div class="col-md-10 offset-md-1">
    <div class="row">
      <div id="image-container" class="col-md-6">
          <img src="/img/cities/{{ $cities->image }}" alt="{{ $cities->title }}">
      </div>
      <div id="info-container" class="col-md-6">
        <h1>{{ $cities->cidade }}</h1>
        <p class="city-name">{{ $cities->estado }}</p>
      </div>
    </div>
  </div>

@endsection