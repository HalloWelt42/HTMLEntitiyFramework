<?php
namespace htmlentity\model\attributes;

trait TLabel 
{

  /**
   * 
   * 
   * 
   * @param Label $obj
   * @return $this
   */
    public function set_label( Label $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
