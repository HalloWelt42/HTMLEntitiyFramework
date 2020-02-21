<?php


namespace htmlentity\model\attributes\globals;


trait TData
{
  public function set_data( Data $obj ){
    $this->set_attribute( $obj );
    return $this;
  }

}