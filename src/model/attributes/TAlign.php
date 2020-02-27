<?php
namespace HEF\model\attributes;

trait TAlign 
{

  /**
   * 
   * 
   * 
   * @param Align $obj
   * @return $this
   */
    public function set_align( Align $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
