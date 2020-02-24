<?php
namespace htmlentity\model\attributes;

trait TSandbox 
{

  /**
   * 
   * 
   * 
   * @param Sandbox $obj
   * @return $this
   */
    public function set_sandbox( Sandbox $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
