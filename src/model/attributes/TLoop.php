<?php
namespace HEF\model\attributes;

trait TLoop 
{

  /**
   * 
   * 
   * 
   * @param Loop $obj
   * @return $this
   */
    public function set_loop( Loop $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
