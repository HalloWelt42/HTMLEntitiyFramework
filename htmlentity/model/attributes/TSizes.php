<?php
namespace htmlentity\model\attributes;

trait TSizes 
{

  /**
   * 
   * 
   * 
   * @param Sizes $obj
   * @return $this
   */
    public function set_sizes( Sizes $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
