<?php
namespace HEF\model\attributes;

trait TColor 
{

  /**
   * 
   * 
   * 
   * @param Color $obj
   * @return $this
   */
    public function set_color( Color $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
