<?php

namespace App\Http\Controllers;

use App\Models\CategoriasPalavras;
use Illuminate\Http\Request;

class CategoriasPalavrasController extends Controller
{

    // public function __construct()
    // {         
    //     $this->middleware('auth');     
    // }

    public function nova_categoria()
    {
        return view('novaCategoria');
    }

    public function create(Request $request){
        $categoria = $request->categoria;

        if(!CategoriasPalavras::where('group', $request->categoria)->first()){
            $categoriaPalavra = new CategoriasPalavras();
            $categoriaPalavra->group = $categoria;
        //    $categoriaPalavra->id = '15';
            $categoriaPalavra->save();
        }
        else {
            $request->session()->flash('flash_erro', '');
        }
    }

    public function exibe_categoriasPalavras(){
        $categoriaPalavras = CategoriasPalavras::all();
        return view('exibeCategorias', ['categoriaPalavras' => $categoriaPalavras]);
    }

    public function deleta_categoriaPalavra($id){
        CategoriasPalavras::destroy($id);
        return redirect()->route('deleta_categoria');
    }
}
