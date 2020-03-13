<?php


namespace HEF\model\attributes;


trait TNonce
{

  public function sAccept( Nonce $obj ){
    $this -> sAttribute($obj);
    return $this;
  }

}