<?php
namespace HEF\model\attributes;

trait TMaxlength 
{

  /**
   * 
   * 
   * 
   * @param Maxlength $obj
   * @return $this
   */
    public function set_maxlength( Maxlength $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
