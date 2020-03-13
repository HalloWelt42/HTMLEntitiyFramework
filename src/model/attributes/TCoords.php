<?php
namespace HEF\model\attributes;

trait TCoords 
{

  /**
   * 
   * 
   * 
   * @param Coords $obj
   * @return $this
   */
    public function sCoords( Coords $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
