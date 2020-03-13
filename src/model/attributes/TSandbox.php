<?php
namespace HEF\model\attributes;

trait TSandbox 
{

  /**
   * 
   * 
   * 
   * @param Sandbox $obj
   * @return $this
   */
    public function sSandbox( Sandbox $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
