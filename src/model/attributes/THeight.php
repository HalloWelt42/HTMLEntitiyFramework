<?php
namespace HEF\model\attributes;

trait THeight 
{

  /**
   * 
   * 
   * 
   * @param Height $obj
   * @return $this
   */
    public function set_height( Height $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
