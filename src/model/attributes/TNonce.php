<?php


namespace HEF\model\attributes;


trait TNonce
{

  public function set_accept( Nonce $obj ){
    $this -> set_attribute($obj);
    return $this;
  }

}