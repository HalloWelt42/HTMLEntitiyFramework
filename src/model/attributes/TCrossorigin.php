<?php
namespace HEF\model\attributes;

trait TCrossorigin 
{

  /**
   * 
   * 
   * 
   * @param Crossorigin $obj
   * @return $this
   */
    public function sCrossorigin( Crossorigin $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
