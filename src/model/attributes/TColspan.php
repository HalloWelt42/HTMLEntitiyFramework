<?php
namespace HEF\model\attributes;

trait TColspan 
{

  /**
   * 
   * 
   * 
   * @param Colspan $obj
   * @return $this
   */
    public function set_colspan( Colspan $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
