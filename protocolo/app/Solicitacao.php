<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\User;
use Auth;
class Solicitacao extends Model
{
  protected $table = 'solicitacoes';
  protected $fillable = [
      'name', 'solicitante', 'avaliado_por','status'
  ];

  public static function solicitanteName(Solicitacao $solicitacao){
    $result = User::where('id', '=', $solicitacao->solicitante)->first();
      if($result)
        return $result->name;
      else
        return null;
  }

  public static function avaliadorName(Solicitacao $solicitacao){
    $result = User::where('id', '=', $solicitacao->avaliado_por)->first();
      if($result)
        return $result->name;
      else
        return null;
  }

}
