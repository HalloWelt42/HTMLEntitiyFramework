<?php
namespace HEF\model\attributes;

trait TCite 
{

  /**
   * 
   * 
   * 
   * @param Cite $obj
   * @return $this
   */
    public function sCite( Cite $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
