<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solicitacao;
use Response;
use Storage;
use Auth;
use Input;
use Cache;
use App\Posts;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Validator;
use File;
use Intervention\Image\Facades\Pdf;

class SolicitacoesController extends Controller
{
  public function avaliar_view(){
    $solicitacoes = Solicitacao::where('status', '=', null)->get();
    return view('solicitacoes.avaliar')->with("solicitacoes", $solicitacoes);
  }


  public function update(Request $request, $id){
    $solicitacao = Solicitacao::where('id', '=', $id)->first();
    $solicitacao->avaliado_por = Auth::user()->id;
    $solicitacao->status = $request->status;
    $solicitacao->save();
    return redirect()->route('avaliarsolicitacoes');
  }

  public function gerar(){
    $solicitacoes = Solicitacao::where('solicitante', '=', Auth::user()->id)->orderBy('created_at')->get();
    return view('solicitacoes.relatorio')->with("solicitacoes", $solicitacoes);
  }
  public function cadastrarview(){
    return view('solicitacoes.store');
  }
  public function store(Request $request){
    $file = Input::file('arquivo');
    $img = Image::make($file);
     $request->request->add(['solicitante'=>Auth::user()->id]);
      Solicitacao::create($request->all());
      return redirect ('/relatoriosolicitacoes');
  }

  public function show($id){
    $solicitacao = Solicitacao::where('id', '=', $id)->first();
      if ($id == 1){ //trancamento de matrícula
        return view ('solicitacoes.showT')->with('solicitacao', $solicitacao);
      }else if ($id == 2){
        return view ('solicitacoes.showA')->with('solicitacao', $solicitacao);
      }else if ($id == 3){
        return view ('solicitacoes.showQ')->with('solicitacao', $solicitacao);
      }
  }

  public function enviarArq(Request $request){
    Storage::put('trancamento.pdf', $request->file, 'public');
  }


    public function getDownload(){
        //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). "/download/info.pdf";

        $headers = array(
              'Content-Type: application/pdf',
            );

            return Response::download($file, 'filename.pdf', $headers);
          //return response()->download(storage_path("app/public/{$filename}"));
          //$path = storage_path('./storage/app/public/info.pdf');

          //return response()->download($path);
    }
    public function upload()
   {
        return view ('products.upload');
   }

   public function move()
   {
       $file = \Input::file('photo'); // retorna o objeto em questão

       var_dump($file);
       var_dump(\Input::hasFile('photo'));

       $destinationPath = public_path().DIRECTORY_SEPARATOR.'files';
       $fileName = '01.'.pathinfo('Hearthstone.desktop')['extension'];

       //var_dump($file->move($destinationPath.DIRECTORY_SEPARATOR.'tmp'));
       var_dump($file->move($destinationPath, $fileName));
   }
}
