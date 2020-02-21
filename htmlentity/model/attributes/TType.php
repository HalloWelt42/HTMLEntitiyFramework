<?php
namespace htmlentity\model\attributes;

trait TType 
{

  /**
   * 
   * 
   * 
   * @param Type $obj
   * @return $this
   */
    public function set_type( Type $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
