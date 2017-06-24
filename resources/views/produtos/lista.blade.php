@extends("template")
@section("content")
<h1>Lista de Produtos</h1>
<table class="table table-striped table-hover table-bordered">
    <thead>
        <th>Id</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Preço</th>
        <th>Ações</th>
    </thead>
    <tbody>
    @foreach($produtos as $produto)
    <tr>
        <td>{{$produto->id}}</td>
        <td>{{$produto->nome}}</td>
        <td>{{$produto->descricao}}</td>
        <td class="text-right">R$ {{number_format($produto->preco,2,',','.')}}</td>
        <td>

            <a href="/Produtos/{{$produto->id}}" class="btn btn-warning">
                <span class="glyphicon glyphicon-edit"></span> Editar
            </a>

            <form action="/Produtos" method="POST">
                <input type="hidden" name="_method" value="DELETE" />
                {{csrf_field()}}

                <input type="hidden" name="id" value="{{$produto->id}}">
                <button type="submit" class="btn btn-danger">
                    <span class="glyphicon glyphicon-trash"></span> Remover
                </button>
            </form>

        </td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection