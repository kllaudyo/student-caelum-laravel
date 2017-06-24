<?php
/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 24/06/17
 * Time: 11:11
 */

namespace Lojinha\Http\Controllers;
//use Illuminate\Support\Facades\DB;

use Lojinha\Produto;
use Illuminate\Http\Request;
use Lojinha\Http\Requests\ProdutoRequest;

class ProdutosController extends Controller
{
    public function lista()
    {
        //$produtos = DB::table("produtos")->get();
        $produtos = Produto::all();
        return View("produtos/lista")->with("produtos", $produtos);
    }

    public function form()
    {
        return View("produtos/formulario");
    }

    /**
     * Quando precisamos pegar parametros da tela, usamos a classe Request
     */
    public function salvar(ProdutoRequest $request)
    {

        //$request->input("nome"); //retorna um valor específico
        //$request->all(); //devolve array com todos
        //$request->except("preco","xpto"); //devolve todos menos os keys especificados

        Produto::create($request->all());
        return redirect("/Produtos")->with("msg", "Produto incluído com sucesso");

    }

    public function remover(Request $request)
    {
        //retorna o produto
        $id = $request->input("id");
        $produto = Produto::find($id);
        if($produto instanceof Produto)
        {
            $produto->delete();
        }

        return redirect("/Produtos")->with("msg","Produto removido com sucesso");
    }

    public function editar($id)
    {
        $produto = Produto::find($id);
        return View("produtos/formulario")->with("produto",$produto);
    }

    public function alterar(ProdutoRequest $request)
    {
        $produto = Produto::find($request->input("id"));
        if($produto instanceof Produto)
        {
            $produto->update($request->all());
        }
        return redirect("/Produtos")->with("msg","Produto alterado com sucesso");
    }

}