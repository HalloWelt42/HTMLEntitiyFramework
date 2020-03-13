<?php
namespace HEF\model\attributes;

trait TReadonly 
{

  /**
   * 
   * 
   * 
   * @param Readonly $obj
   * @return $this
   */
    public function sReadonly( Readonly $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
