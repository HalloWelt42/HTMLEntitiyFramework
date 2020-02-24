<?php
namespace htmlentity\model\attributes;

trait TReversed 
{

  /**
   * 
   * 
   * 
   * @param Reversed $obj
   * @return $this
   */
    public function set_reversed( Reversed $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
