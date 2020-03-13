<?php
namespace HEF\model\attributes;

trait TRel 
{

  /**
   * 
   * 
   * 
   * @param Rel $obj
   * @return $this
   */
    public function sRel( Rel $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
