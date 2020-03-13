<?php
namespace HEF\model\attributes;

trait TType 
{

  /**
   * 
   * 
   * 
   * @param Type $obj
   * @return $this
   */
    public function sType( Type $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
