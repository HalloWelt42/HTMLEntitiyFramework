<?php
namespace htmlentity\model\attributes;

trait TOpen 
{

  /**
   * 
   * 
   * 
   * @param Open $obj
   * @return $this
   */
    public function set_open( Open $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
