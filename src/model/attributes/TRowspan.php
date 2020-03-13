<?php
namespace HEF\model\attributes;

trait TRowspan 
{

  /**
   * 
   * 
   * 
   * @param Rowspan $obj
   * @return $this
   */
    public function sRowspan( Rowspan $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
