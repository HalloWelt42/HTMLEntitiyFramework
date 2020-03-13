<?php
namespace HEF\model\attributes;

trait THeaders 
{

  /**
   * 
   * 
   * 
   * @param Headers $obj
   * @return $this
   */
    public function sHeaders( Headers $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
