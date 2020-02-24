<?php
namespace htmlentity\model\attributes;

trait THigh 
{

  /**
   * 
   * 
   * 
   * @param High $obj
   * @return $this
   */
    public function set_high( High $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
