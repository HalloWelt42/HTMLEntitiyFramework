<?php


namespace HEF\model\attributes\globals;


trait TAria
{
  public function sAria( Aria $obj ){
      $this->sAttribute($obj );
      return $this;
  }
}