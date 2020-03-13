<?php
namespace HEF\model\attributes;

trait TIsmap 
{

  /**
   * 
   * 
   * 
   * @param Ismap $obj
   * @return $this
   */
    public function sIsmap( Ismap $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
