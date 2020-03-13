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
    public function sAutoplay( Autoplay $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
