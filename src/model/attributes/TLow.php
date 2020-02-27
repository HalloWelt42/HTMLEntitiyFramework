<?php
namespace HEF\model\attributes;

trait TLow 
{

  /**
   * 
   * 
   * 
   * @param Low $obj
   * @return $this
   */
    public function set_low( Low $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
