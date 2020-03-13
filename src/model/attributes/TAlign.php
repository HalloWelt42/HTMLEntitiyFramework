<?php
namespace HEF\model\attributes;

trait TAlign 
{

  /**
   * 
   * 
   * 
   * @param Align $obj
   * @return $this
   */
    public function sAlign( Align $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
