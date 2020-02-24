<?php
namespace htmlentity\model\attributes;

trait TSeamless 
{

  /**
   * 
   * 
   * 
   * @param Seamless $obj
   * @return $this
   */
    public function set_seamless( Seamless $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
