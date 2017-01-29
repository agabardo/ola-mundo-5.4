<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Produto extends Model{

  use SoftDeletes;
  protected $dates = ['deleted_at'];

  public function comComentarios(){
      return $this->hasMany('App\Comentario','produto_id','id');
  }
}
