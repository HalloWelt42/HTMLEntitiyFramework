<?php
namespace HEF\model\attributes;

trait TReversed 
{

  /**
   * 
   * 
   * 
   * @param Reversed $obj
   * @return $this
   */
    public function sReversed( Reversed $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
