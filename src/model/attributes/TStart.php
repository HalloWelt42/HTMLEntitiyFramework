<?php
namespace HEF\model\attributes;

trait TStart 
{

  /**
   * 
   * 
   * 
   * @param Start $obj
   * @return $this
   */
    public function sStart( Start $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
