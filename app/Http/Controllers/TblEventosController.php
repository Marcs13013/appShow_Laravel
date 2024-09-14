<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\Models\tbleventos;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class TblEventosController extends Controller
{
    // PARA MOSTRAR TELA ADMINISTRATIVA

    public function MostrarHome()
    {
        return view('homeadm');
    }

    //para mostrar tela de cadastro de evento

    public function MostrarCadastroEvento()
    {
        return view('cadastroevento');
    }

    //para salvar os registros na tabela evento
    public function CadastroEventos(Request $request)
    {
        $registros = $request->validator([
            'nomeEvento' => 'string|required',
            'dataEvento' => 'date' | 'required',
            'localEvento' => 'string' | 'required',
            'imgEvento' => 'string' | 'required'
        ]);


        tblEvento::create($registros);
        return Redirect::route('home-adm');
    }


    //para apagar os registros na tabela de eventos
    public function destroy(tblEventos $id)
    {
        $id->delete();
        return Redirect::route('home-adm');
    }

    // Alterar registros na tabela de eventos

    public function Update(tblEventos $id, Request $request)
    {
        $registros = $request->validator([
            'nomeEvento' => 'string|required',
            'dataEvento' => 'date' | 'required',
            'localEvento' => 'string' | 'required',
            'imgEvento' => 'string' | 'required'
        ]);
        $id->fill($registros);
        $id->save();

        return Redirect::route("home-adm");
    }

    //Para mostrar somente os eventos por código 
    public function MostrarEventoCodigo(tblEventos $id){
        return view('altera-evento',['registrosEventos'=>$id]);
    }

    // Para buscar os eventos por nome
    public function MostrarEventoNome(Request $request){
        $registros = tblEventos::query();
        $registros->when($request->nomeEvento,function($query,$valor){
            $query->where('nomeEvento','like','%',$valor,'%');
        });
        $todosRegistros = $registros->get();
        return view('listaEventos',['registrosEventos'=>$todosRegistros]);
    }



}

