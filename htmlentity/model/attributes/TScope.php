<?php
namespace htmlentity\model\attributes;

trait TScope 
{

  /**
   * 
   * 
   * 
   * @param Scope $obj
   * @return $this
   */
    public function set_scope( Scope $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
