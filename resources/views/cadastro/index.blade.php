@extends('base.base')

@section('conteudo')
    <h1>Cadastros
        <a href="{{route('cadastro.create')}}" class="btn btn-dark">
            Novo Cadastro
        </a>
    </h1>
    <table class="table">
        <thead>
            <tr>
                <th>Ações</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Observações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cadastros as $cadastro)
            <tr>
                <td>
                    <a class="btn btn-dark" href="{{ route('cadastro.show', ['id'=>$cadastro->id])}}">
                        <i class="bi bi-eye"></i>
                        Ver
                    </a>

                    <a class="btn btn-danger" href="{{ route('cadastro.edit', ['id'=>$cadastro->id])}}">
                        <i class="bi bi-pencil-square"></i>
                        Editar
                    </a>
                </td>
                <td>{{$cadastro->nome;}}</td>
                <td>{{$cadastro->email;}}</td>
                <td>{{$cadastro->observacoes;}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection