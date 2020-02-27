<?php
namespace HEF\model\attributes;

trait TMultiple 
{

  /**
   * 
   * 
   * 
   * @param Multiple $obj
   * @return $this
   */
    public function set_multiple( Multiple $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
