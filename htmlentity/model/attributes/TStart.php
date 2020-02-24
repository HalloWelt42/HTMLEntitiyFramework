<?php
namespace htmlentity\model\attributes;

trait TStart 
{

  /**
   * 
   * 
   * 
   * @param Start $obj
   * @return $this
   */
    public function set_start( Start $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
