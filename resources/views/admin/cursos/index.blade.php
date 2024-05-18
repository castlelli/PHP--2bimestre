@extends('layout.site')

@section('titulo', 'Cursos')

@section('conteudo')
<div class='container'>
    <h3 class='center'>Lista de Cursos</h3>
    <div class='row'>
        <table class="striped centered responsive-table">
            <thead>
                <tr> <!-- CABECALHO -->
                    <th>Titulo</th>
                    <th>Publicado</th>
                    <th>Valor</th>
                    <th>Descrição</th>
                    <th>Imagem</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rows as $row) <!-- LOOP PRA LER A TABELA -->
                <tr>
                    <td> {{$row -> titulo }}</td>
                    <td>{{ $row->publicado }}</td>
                    <td>{{ $row->valor }}</td>
                    <td>{{ $row->descricao }}</td>
                    <td><img src="{{ asset($row->imagem) }}" width="100"
                    alt="{{ $row->titulo }}" class="circle responsive-img"></td>

                    <td> <!-- COLUNA COM ALTERAR E EXCLUIR -->
                    <a class='btn deep-orange'
                    href="{{ route('admin.cursos.editar',$row->id) }}">Alterar</a>
                    <a class='btn rede'
                    href="{{ route('admin.cursos.excluir',$row->id) }}">Excluir</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class='row'> <!-- BOTAO ADICIONAR -->
        <a class='btn blue' href="{{ route('admin.cursos.adicionar')}}">Adicionar</a>
    </div>
</div>

@endsection