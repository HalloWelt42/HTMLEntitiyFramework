<?php
namespace HEF\model\attributes;

trait TForType
{

  /**
   * 
   * 
   * 
   * @param ForType $obj
   * @return $this
   */
    public function set_for( ForType $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
