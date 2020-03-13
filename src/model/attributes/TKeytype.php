<?php
namespace HEF\model\attributes;

trait TKeytype 
{

  /**
   * 
   * 
   * 
   * @param Keytype $obj
   * @return $this
   */
    public function sKeytype( Keytype $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
