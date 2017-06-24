@extends("template")
@section("content")
<h1>Cadastro de produtos</h1>
<form action="/Produtos" method="post">

    {{--<input type="hidden" name="_token" value="{{csrf_token()}}" />--}}
    {{csrf_field()}}
    @if(isset($produto))
        <input type="hidden" name="_method" value="PUT" />
        <input type="hidden" name="id" value="{{$produto->id or old("id")}}" />
    @endif

    @if(count($errors)>0)
    <div class="alert alert-danger">
        <ul>
        @foreach($errors->all() as $erro)
            <li>{{$erro}}</li>
        @endforeach
        </ul>
    </div>
    @endif

    <hr />
    <div class="form-group row">
        <div class="col-sm-2">
            <label for="nome">Nome:</label>
        </div>
        <div class="col-sm-10">
            <input type="text" id="nome" name="nome" class="form-control" value="{{$produto->nome or old("nome")}}" />
        </div>
    </div>

    <hr />

    <div class="form-group row">
        <div class="col-sm-2">
            <label for="preco">Preço:</label>
        </div>
        <div class="col-sm-10">
            <input type="number" id="preco" name="preco" class="form-control" value="{{$produto->preco or old("preco")}}" />
        </div>
    </div>

    <hr />

    <div class="form-group row">
        <div class="col-sm-2">
            <label for="descricao">Descrição:</label>
        </div>
        <div class="col-sm-10">
            <textarea id="descricao" name="descricao" class="form-control" rows="5">{{$produto->descricao or old("descricao")}}</textarea>
        </div>
    </div>

    <hr />

    <div class="row">
        <button class="btn btn-primary pull-right" type="submit"><span class="glyphicon glyphicon-floppy-disk"></span> Salvar</button>
    </div>

</form>
@endsection