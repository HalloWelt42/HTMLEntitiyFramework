<?php
namespace HEF\model\attributes;

trait TCols 
{

  /**
   * 
   * 
   * 
   * @param Cols $obj
   * @return $this
   */
    public function sCols( Cols $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
