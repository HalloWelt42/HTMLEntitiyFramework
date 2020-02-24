<?php
namespace htmlentity\model\attributes;

trait TIsmap 
{

  /**
   * 
   * 
   * 
   * @param Ismap $obj
   * @return $this
   */
    public function set_ismap( Ismap $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
