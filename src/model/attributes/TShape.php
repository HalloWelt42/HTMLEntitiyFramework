<?php
namespace HEF\model\attributes;

trait TShape 
{

  /**
   * 
   * 
   * 
   * @param Shape $obj
   * @return $this
   */
    public function set_shape( Shape $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
