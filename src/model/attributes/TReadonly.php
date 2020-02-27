<?php
namespace HEF\model\attributes;

trait TReadonly 
{

  /**
   * 
   * 
   * 
   * @param Readonly $obj
   * @return $this
   */
    public function set_readonly( Readonly $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
