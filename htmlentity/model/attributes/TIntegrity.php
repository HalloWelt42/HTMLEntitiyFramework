<?php
namespace htmlentity\model\attributes;

trait TIntegrity 
{

  /**
   * 
   * 
   * 
   * @param Integrity $obj
   * @return $this
   */
    public function set_integrity( Integrity $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
