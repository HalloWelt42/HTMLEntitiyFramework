<?php
namespace htmlentity\model\attributes;

trait TCrossorigin 
{

  /**
   * 
   * 
   * 
   * @param Crossorigin $obj
   * @return $this
   */
    public function set_crossorigin( Crossorigin $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
