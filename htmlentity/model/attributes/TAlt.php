<?php
namespace htmlentity\model\attributes;

trait TAlt 
{

  /**
   * 
   * 
   * 
   * @param Alt $obj
   * @return $this
   */
    public function set_alt( Alt $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
