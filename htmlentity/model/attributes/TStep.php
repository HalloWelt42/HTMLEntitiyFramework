<?php
namespace htmlentity\model\attributes;

trait TStep 
{

  /**
   * 
   * 
   * 
   * @param Step $obj
   * @return $this
   */
    public function set_step( Step $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
