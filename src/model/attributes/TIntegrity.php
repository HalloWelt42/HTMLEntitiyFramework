<?php
namespace HEF\model\attributes;

trait TIntegrity 
{

  /**
   * 
   * 
   * 
   * @param Integrity $obj
   * @return $this
   */
    public function sIntegrity( Integrity $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
