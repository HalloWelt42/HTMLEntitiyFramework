<?php
namespace htmlentity\model\attributes;

trait TPattern 
{

  /**
   * 
   * 
   * 
   * @param Pattern $obj
   * @return $this
   */
    public function set_pattern( Pattern $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
