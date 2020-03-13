<?php
namespace HEF\model\attributes;

trait TPing 
{

  /**
   * 
   * 
   * 
   * @param Ping $obj
   * @return $this
   */
    public function sPing( Ping $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
