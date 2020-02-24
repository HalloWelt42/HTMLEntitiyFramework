<?php
namespace htmlentity\model\attributes;

trait TCite 
{

  /**
   * 
   * 
   * 
   * @param Cite $obj
   * @return $this
   */
    public function set_cite( Cite $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
