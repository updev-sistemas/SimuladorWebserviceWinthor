<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class WinthorController extends Controller
{
    public function PC_Produto(Request $request)
    {
        $content = file_get_contents("C:\Workspace\Winthor\produto.xml");
        return response($content, 200);
    }
    public function PC_Departamento(Request $request)
    {
        $content = file_get_contents("C:\Workspace\Winthor\departamento.xml");
        return response($content, 200);
    }
    public function PC_Categoria(Request $request)
    {
        $content = file_get_contents("C:\Workspace\Winthor\categoria.xml");
        return response($content, 200);
    }
    public function PC_SubCategoria(Request $request)
    {
        $content = file_get_contents("C:\Workspace\Winthor\subcategoria.xml");
        return response($content, 200);
    }
    public function PC_Secao(Request $request)
    {
        $content = file_get_contents("C:\Workspace\Winthor\secao.xml");
        return response($content, 200);
    }
    public function PC_Cliente(Request $request)
    {
        # $content = file_get_contents("C:\Workspace\Winthor\secao.xml");
        return response([], 200);
    }
    public function PC_Marca(Request $request)
    {
        $content = file_get_contents("C:\Workspace\Winthor\brand.xml");
        return response($content, 200);
    }
    public function PC_Estoque(Request $request)
    {
        # $content = file_get_contents("C:\Workspace\Winthor\secao.xml");
        return response([], 200);
    }
    public function PC_Preco(Request $request)
    {
        # $content = file_get_contents("C:\Workspace\Winthor\secao.xml");
        return response([], 200);
    }
    public function PC_Filial(Request $request)
    {
        # $content = file_get_contents("C:\Workspace\Winthor\secao.xml");
        return response([], 200);
    }
    public function PC_Pedido(Request $request)
    {
        # $content = file_get_contents("C:\Workspace\Winthor\secao.xml");
        return response([], 200);
    }
}
