<?php
namespace HEF\model\attributes;

trait TDefaultType 
{

  /**
   * 
   * 
   * 
   * @param DefaultType $obj
   * @return $this
   */
    public function set_default( DefaultType $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
