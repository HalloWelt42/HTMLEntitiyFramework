<?php
namespace HEF\model\attributes;

trait TMaxlength 
{

  /**
   * 
   * 
   * 
   * @param Maxlength $obj
   * @return $this
   */
    public function sMaxlength( Maxlength $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
