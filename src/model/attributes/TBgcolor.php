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
    public function sBgcolor( Bgcolor $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
