<?php
namespace htmlentity\model\attributes;

trait TSize 
{

  /**
   * 
   * 
   * 
   * @param Size $obj
   * @return $this
   */
    public function set_size( Size $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
