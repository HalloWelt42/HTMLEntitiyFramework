<?php


namespace HEF\model\attributes\globals;


trait TData_
{
  public function sData_(Data_ $obj ){
    $this->set_attribute( $obj );
    return $this;
  }

}