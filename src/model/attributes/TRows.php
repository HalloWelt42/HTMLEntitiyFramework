<?php
namespace HEF\model\attributes;

trait TRows 
{

  /**
   * 
   * 
   * 
   * @param Rows $obj
   * @return $this
   */
    public function sRows( Rows $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
