<?php
namespace HEF\model\attributes;

trait TSelected 
{

  /**
   * 
   * 
   * 
   * @param Selected $obj
   * @return $this
   */
    public function set_selected( Selected $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
