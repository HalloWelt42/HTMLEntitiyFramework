<?php


namespace htmlentity\model\attributes\globals;


trait TData_
{
  public function set_data_(Data_ $obj ){
    $this->set_attribute( $obj );
    return $this;
  }

}