<?php
namespace HEF\model\attributes;

trait TValue 
{

  /**
   * 
   * 
   * 
   * @param Value $obj
   * @return $this
   */
    public function set_value( Value $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
