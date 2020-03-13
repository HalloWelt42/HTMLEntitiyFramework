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
    public function sColspan( Colspan $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
