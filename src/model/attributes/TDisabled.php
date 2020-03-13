<?php
namespace HEF\model\attributes;

trait TDisabled 
{

  /**
   * 
   * 
   * 
   * @param Disabled $obj
   * @return $this
   */
    public function sDisabled( Disabled $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
