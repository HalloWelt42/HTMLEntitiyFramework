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
    public function set_coords( Coords $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
