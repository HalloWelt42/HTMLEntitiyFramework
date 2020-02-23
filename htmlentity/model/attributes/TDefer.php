<?php
namespace htmlentity\model\attributes;

trait TDefer 
{

  /**
   * 
   * 
   * 
   * @param Defer $obj
   * @return $this
   */
    public function set_defer( Defer $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
