@extends('layout.main')

@if(isset($search) != '')
<p>O usuário está procurando a cidade: {{ $search }}</p>
@elseif($cities != '')
<p>A cidade do get é: {{ $cities }}</p>
@endif

