<?php
namespace HEF\model\attributes;

trait TAlt 
{

  /**
   * 
   * 
   * 
   * @param Alt $obj
   * @return $this
   */
    public function sAlt( Alt $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
