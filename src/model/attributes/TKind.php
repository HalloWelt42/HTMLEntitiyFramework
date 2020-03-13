<?php
namespace HEF\model\attributes;

trait TKind 
{

  /**
   * 
   * 
   * 
   * @param Kind $obj
   * @return $this
   */
    public function sKind( Kind $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
