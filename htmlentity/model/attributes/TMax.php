<?php
namespace htmlentity\model\attributes;

trait TMax 
{

  /**
   * 
   * 
   * 
   * @param Max $obj
   * @return $this
   */
    public function set_max( Max $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
