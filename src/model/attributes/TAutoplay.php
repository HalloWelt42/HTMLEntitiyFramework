<?php
namespace HEF\model\attributes;

trait TAutoplay 
{

  /**
   * 
   * 
   * 
   * @param Autoplay $obj
   * @return $this
   */
    public function set_autoplay( Autoplay $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
