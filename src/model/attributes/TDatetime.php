<?php
namespace HEF\model\attributes;

trait TDatetime 
{

  /**
   * 
   * 
   * 
   * @param Datetime $obj
   * @return $this
   */
    public function sDatetime( Datetime $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
