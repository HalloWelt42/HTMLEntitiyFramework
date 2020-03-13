<?php
namespace HEF\model\attributes;

trait TLoop 
{

  /**
   * 
   * 
   * 
   * @param Loop $obj
   * @return $this
   */
    public function sLoop( Loop $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
