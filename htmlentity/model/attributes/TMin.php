<?php
namespace htmlentity\model\attributes;

trait TMin 
{

  /**
   * 
   * 
   * 
   * @param Min $obj
   * @return $this
   */
    public function set_min( Min $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
