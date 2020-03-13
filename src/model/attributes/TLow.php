<?php
namespace HEF\model\attributes;

trait TLow 
{

  /**
   * 
   * 
   * 
   * @param Low $obj
   * @return $this
   */
    public function sLow( Low $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
