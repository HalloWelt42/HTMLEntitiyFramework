<?php
namespace HEF\model\attributes;

trait TValue 
{

  /**
   * 
   * 
   * 
   * @param Value $obj
   * @return $this
   */
    public function sValue( Value $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
