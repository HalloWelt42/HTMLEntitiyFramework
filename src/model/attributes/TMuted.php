<?php
namespace HEF\model\attributes;

trait TMuted 
{

  /**
   * 
   * 
   * 
   * @param Muted $obj
   * @return $this
   */
    public function sMuted( Muted $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
