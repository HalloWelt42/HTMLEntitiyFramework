<?php
namespace HEF\model\attributes;

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
