<?php


namespace HEF\model\attributes\globals;


trait TAria
{
  public function set_aria( Aria $obj ){
      $this->set_attribute($obj );
      return $this;
  }
}