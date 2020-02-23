<?php
namespace htmlentity\model\attributes;

trait TAsync 
{

  /**
   * 
   * 
   * 
   * @param Async $obj
   * @return $this
   */
    public function set_async( Async $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
