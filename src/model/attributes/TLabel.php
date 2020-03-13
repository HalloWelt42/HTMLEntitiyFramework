<?php
namespace HEF\model\attributes;

trait TLabel 
{

  /**
   * 
   * 
   * 
   * @param Label $obj
   * @return $this
   */
    public function sLabel( Label $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
