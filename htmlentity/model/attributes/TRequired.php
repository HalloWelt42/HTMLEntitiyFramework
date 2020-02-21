<?php
namespace htmlentity\model\attributes;

trait TRequired 
{

  /**
   * 
   * 
   * 
   * @param Required $obj
   * @return $this
   */
    public function set_required( Required $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
