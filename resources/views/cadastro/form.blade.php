@extends('base.base')
@section('conteudo')


@if($cadastro)
<form action="{{route('cadastro.update', ['id'=>$cadastro->id])}}" method="post">
    @else
<form action="{{route('cadastro.store')}}" method="post">
@endif    
@csrf
<div class="mb-3">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" class="form-control" id="nome" name="nome" value="{{ $cadastro ? $cadastro->nome : old('nome')}}">
  </div>
<div class="mb-3">
    <label for="email" class="form-label">E-mail</label>
    <input type="email" class="form-control" id="email" name="email" value="{{ $cadastro ? $cadastro->email : old('email')}}">
  </div>
  <div class="mb-3">
    <label for="observacoes" class="form-label">Texto</label>
    <textarea class="form-control" id="observacoes" name="observacoes" rows="3"> {{ $cadastro ? $cadastro->observacoes : old('observacoes')}}</textarea>
  </div>

  <div>
    <input type="submit" value="{{ $cadastro ? 'Atualizar' : 'Cadastrar'}}" class="btn btn-dark">
  </div>
</form>
@endsection