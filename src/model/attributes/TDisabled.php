<?php
namespace HEF\model\attributes;

trait TDisabled 
{

  /**
   * 
   * 
   * 
   * @param Disabled $obj
   * @return $this
   */
    public function set_disabled( Disabled $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
