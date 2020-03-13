<?php
namespace HEF\model\attributes;

trait TSeamless 
{

  /**
   * 
   * 
   * 
   * @param Seamless $obj
   * @return $this
   */
    public function sSeamless( Seamless $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
