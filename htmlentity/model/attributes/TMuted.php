<?php
namespace htmlentity\model\attributes;

trait TMuted 
{

  /**
   * 
   * 
   * 
   * @param Muted $obj
   * @return $this
   */
    public function set_muted( Muted $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
