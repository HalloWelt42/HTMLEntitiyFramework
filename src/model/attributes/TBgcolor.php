<?php
namespace HEF\model\attributes;

trait TBgcolor 
{

  /**
   * 
   * 
   * 
   * @param Bgcolor $obj
   * @return $this
   */
    public function set_bgcolor( Bgcolor $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
