@extends('base.base')

@section('titulo')
    FALE CONOSCO
@endsection

@section('conteudo')
    <form action="{{ route('base.cadastro')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control">
        </div>
        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <input type="submit" value="Enviar" class="btn btn-dark">
    </form>
@endsection