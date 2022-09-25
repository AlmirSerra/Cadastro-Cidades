@extends('layout.main')

@section('title', 'Cadastrar Cidade')

@section('content')

  
  <div id="city-create-container" class="col-md-6 offset-md-3">
    <h1>Cadastrar Cidade</h1>
    <form id="city-form" action="/cities" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="image">Imagem da Cidade:</label>
        <input type="file" id="image" name="image" class="form-control-file">
      </div>
      <div class="form-group">
        <label for="title">Cidade:</label>
        <input type="text" class="form-control" id="city" name="city" placeholder="Nome da Cidade">
      </div>
      <div class="form-group">
        <label for="title">Estado:</label>
        <input type="text" class="form-control" id="state" name="state" placeholder="Nome da Cidade">
      </div>
      <div class="form-group">
        <label for="title">Data de Fundação:</label>
        <input type="date" class="form-control" id="date" name="date" placeholder="Data da Fundação da Cidade">
      </div>
      <input type="submit" class="btn btn-primary" value="create-city">
    </form>
  </div>
@endsection
