@extends('layout.main')

@section('title', 'Dashboard')

@section('content')


<div id="search-container" class="col-md-12">
  <h1>Buscar Cidade</h1>
  <form action=""/ method="GET">
    <input type="text" id="search" name="search" class="form-control" placeholder="Procurar cidade...">
  </form>
</div>
<div id="cities-container" class="col-md-12">
  @if($search)
  <h2>Buscando por: {{ $search }}</h2>
  @else
  <h2>Adicionadas Recentemente</h2>
  @endif
  <div id="cards-container" class="row">
    @foreach($cities as $city)
    <div class="card col-md-3">
      <img src="/img/cities/{{ $city->image }}" alt="{{ $city->cidade }}">
      <div class="card-body">
        <p class="card-date">{{ date('d/m/Y', strtotime($city->data_de_fundacao)) }}</p>
        <h5 class="card-title">{{ $city->cidade }}</h5>
        <p class="card-state">{{ $city->estado }}</p>
        <a href="/cities/{{ $city->id }}" class="btn btn-primary">Veja os Bairros</a>
      </div>
    </div>
    @endforeach
    @if(count($cities) == 0 && $search)
    <h5>Não foi possivel localizar: {{ $search }}! <a href="/">Ver todos</a></h5>
    @elseif(count($cities) == 0)
    <h5>Não há cidades cadastradas!</h5>
    @endif
  </div>
</div>

@endsection